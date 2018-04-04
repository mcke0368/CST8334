<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\BaseLog;
use App\Models\RaftingLog;
use App\Models\LogTemplate;
use App\Models\LogType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;


class NewLogbooksController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getWeather(Request $request)
    {

        $templates = LogTemplate::all();
        $types = LogType::all();

        return view('logs.testing', ['templates' => $templates, 'log_types' => $types]);
    }

    public function showTemplate(Request $request)
    {

        if (Auth::check()) {
            $user = Auth::user();
            return view('logs.createLogType');
        } else {
            return "No Authentication";
        }

        return "No Authentication";
    }

    /**
     * show a new template log based in input activity param
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
     *
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

        $templates = LogTemplate::all();

        return view('logs.newLogbook', [
            'templates' => $templates,
            'activity_name' => $activity,
            'activity_slug' => $activity_slug,
            'base_log' => $base_log,
            'activity_log' => $activity_log,
            'editing' => true
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
        $base_data = $request->base_data;
        $activity_data = $request->activity_data;
        $activity_name = $request->activity;
        $custom_data = $request->custom_data;

        /* validate the base data */

        $validator = Validator::make($base_data, [
            'base-title' => 'required',
            'base-location' => 'required',
            'base-company' => 'required',
            'base-end_time' => 'rdate_format:"Y-m-d H:i"',
            'base-start_time' => 'date_format:"Y-m-d H:i"'

        ]);

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

            return json_encode(true);
        }
        return json_encode(false);
    }

    public function showTemplateList(Request $request)
    {

        if (Auth::check()) {
            $user = Auth::user();


            //$logbook_types =
            //return view('logTemplate-partial', ['logbook_types' => $logbook_types]);
        }
    }

}
