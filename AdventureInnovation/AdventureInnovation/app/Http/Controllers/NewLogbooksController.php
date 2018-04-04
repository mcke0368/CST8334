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
    public function show(Request $request) {

        $activity_slug = $request->route('activity_slug');

        // find activity by slug
        $activity = $activity_slug;

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
        $rafting_data = $request->rafting_data;
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

            $group='base';
            $keys = array_keys($base_data);
            $pat = '/' . $group .'-(?P<field>\w+)$/';
            foreach( $keys as $k) {
                $matches = array();
                if (preg_match($pat, $k, $matches)) {
                    $field = $matches['field'];
                    $base->{$field} = $base_data[$k];
                }
            };
            $base->user_id = Auth::user()->id;
            /*
            $base->title = $base_data['base-title'];
            $base->location = $base_data['base-location'];
            $base->company = $base_data['base-company'];
            $base->start_time = Carbon::createFromFormat('Y-m-d H:i', $base_data['base-start_time']);
            $base->end_time = Carbon::createFromFormat('Y-m-d H:i', $base_data['base-end_time']);
            $base->incident = ($base_data['base-incident'] == 'yes') ? true : false;
            $base->number_participants = $base_data['base-number_participants'];
            $base->group_size = $base_data['base-group_size'];
            $base->other_other_leaders = $base_data['base-other_leaders'];
            $base->user_id = Auth::user()->id;
            */
            /* get custom data */
            $base->html_text = $custom_data;

            $log = new RaftingLog();
            $log->rapid_class = $rafting_data['rapid_class'];
            $log->flow_level = $rafting_data['flow_level'];
            $log->launch_site = $rafting_data['launch_site'];
            $log->trip_number = $rafting_data['trip_number'];
            $log->trip_type = $rafting_data['trip_type'];

            $log->save();
            $log->baselogs()->save($base);

            $log = BaseLog::first();

            $logt = $log->base_logable;

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
