<?php

namespace App\Http\Controllers;

use App\Models\BaseLog;
use App\Models\LogAttachment;
use App\Models\LogTemplate;
use App\Models\LogType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
use Validator;


/**
 * Controller class for the log books.
 * Handles showing a new log, loading old logs, saving logs as well as saving a log template.
 *
 * Class NewLogbooksController
 * @package App\Http\Controllers
 */
class NewLogbooksController extends Controller
{

    /**
     * show a new template log based in input activity param.
     * - templates, log types, activity name/slug are sent to the blade.
     * @param Request $request
     */
    public function create(Request $request) {

        $activity_slug = $request->route('activity_slug');

        // find activity by slug
        $type = LogType::all()->where('slug','=',$activity_slug)->first();
        $activity = $type->name;

        $templates = LogTemplate::all();
        $types = LogType::all();


        return view('logs.newLogbook', [
            'templates' => $templates,
            'log_types' => $types,
            'activity_name' => $activity,
            'activity_slug' => $activity_slug
        ]);
    }

    /**
     * Show a given log book.
     * - log data for the given log is sent to the blade file.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request) {
        $activity_slug = $request->route('activity_slug');
        $log_id = $request->route('id');

        // find activity by slug
        $type = LogType::all()->where('slug','=',$activity_slug)->first();
        $activity = $type->name;

        // Get the log
        $base_log = BaseLog::find($log_id);
        $bltype = $base_log->base_logable_type;
        $blid = $base_log->base_logable_id;
        $activity_log = $bltype::find($blid) ;

        // get the attachements for the log
        $attach = $base_log->log_attachments()->get();

        // get all templates
        $templates = LogTemplate::all();

        return view('logs.newLogbook', [
            'templates' => $templates,
            'activity_name' => $activity,
            'activity_slug' => $activity_slug,
            'base_log' => $base_log,
            'activity_log' => $activity_log,
            'editing' => true,
            'attach' => $attach
        ]);

    }

    /**
     * Called when saving a template.  Raw HTML markup from the template is sent
     * via post and is to be stored in the database.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function saveTemplate(Request $request)
    {
        $template_name = (string)$request->template_name;
        $template_desc = (string)$request->template_desc;
        $html_data = (string)$request->html_data;

        if (Auth::check()) {
            $template = new LogTemplate();
            $template->name = $template_name;
            $template->description = $template_desc;
            $template->html_data = $html_data;

            $template->save();
            return json_encode(true);
        }
        return json_encode(false);
    }

    /**
     * Called when saving a log.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function saveLog(Request $request)
    {
        $base_data = json_decode($request->base_data, true);
        $activity_data = json_decode($request->activity_data, true);
        $activity_name = $request->activity_name;
        $custom_data = $request->custom_data;

        /* validate the base data */

        $validator = Validator::make($base_data, [
            'base-title' => 'required',
            'base-location' => 'required',
            'base-route' => 'required',
            'base-end_time' => 'date_format:"Y-m-d H:i"',
            'base-start_time' => 'date_format:"Y-m-d H:i"',
            'base-number_participants' => 'filled|integer',
            'base-group_size' => 'filled|integer',

        ]);

        if ($validator->fails()) {
            return json_encode(['error'=>$validator->errors()->all()]);
        }

        if (Auth::check()) {

            /* construct the base log */
            $base = new BaseLog();

            // cycle through base_data keys and use them to populate base log
            $keys = array_keys($base_data);
            $pat = '/base-(?P<field>\w+)$/';
            foreach( $keys as $k) {
                $matches = array();
                if (preg_match($pat, $k, $matches)) {
                    $field = $matches['field'];
                    $base->{$field} = $base_data[$k];
                }
            };
            $base->user_id = Auth::user()->id;

            /* get custom data */
            $base->html_text = $custom_data;

            /* parse activity data */
            // get class type from LogType so we can construct log of proper type
            $class = LogType::all()->where('name', '=', $activity_name)->first();
            $class = $class->base_logable_type;
            $log = new $class();

            // cycle through the keys and add in the data
            if (sizeof($activity_data)) {
                $keys = array_keys($activity_data);
                $pat = '/(?P<field>\w+)$/';
                foreach ($keys as $k) {
                    $matches = array();
                    if (preg_match($pat, $k, $matches)) {
                        $field = $matches['field'];
                        $log->{$field} = $activity_data[$k];
                    }
                };
            }

            $log->save();
            $log->baselogs()->save($base);

            // save attachments
            $files = $request->file('files');
            if (is_null($files) == false) {
                $user = Auth::user();
                foreach ($files as $f) {

                    $path = $f->store($user->username . '/log-attachments/' . $base->id);
                    $attachment = new LogAttachment();
                    $attachment->original_name = $f->getClientOriginalName();
                    $attachment->storage_path = $path;
                    $attachment->base_log_id = $base->id;
                    $attachment->user_id = $user->id;
                    $attachment->save();
                }
            }

            return json_encode(true);
        }
        return json_encode(false);
    }

    /**
     * Helper function to download a log file
     * @param string $filename file to download
     */
    public function download(Request $request) {
        $id = $request->query('attach_id');
        $log = LogAttachment::find($id);
        return Storage::download($log->storage_path, $log->original_name );
    }

}
