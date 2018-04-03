<?php

namespace App\Http\Controllers;

use App\Models\BaseLog;
use App\Models\KayakingLog;
use App\Models\LogTemplate;
use App\Models\LogType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class TestingController extends Controller
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
        $kayak_data = $request->kayak_data;
        $custom_data = $request->custom_data;

        if (Auth::check()) {
            /* construct the base log */
            $base = new BaseLog();
            $base->title = $base_data['title'];
            $base->location = $base_data['location'];
            $base->company = $base_data['company'];
            $base->start_time = Carbon::createFromFormat('Y-m-d H:i', $base_data['starttime']);
            $base->end_time = Carbon::createFromFormat('Y-m-d H:i', $base_data['endtime']);
            $base->incident = ($base_data['incident'] == 'yes') ? true : false;
            $base->number_participants = $base_data['nrparticipants'];
            $base->group_size = $base_data['grpsize'];
            $base->other_leaders = $base_data['leaders'];
            $base->user_id = Auth::user()->id;

            /* get custom data */
            $base->html_text = $custom_data;

            $log = new KayakingLog();
            $log->rapid_class = $kayak_data['rapidclass'];
            $log->flow_level = $kayak_data['flowlevel'];
            $log->trip_type = $kayak_data['launchsite'];
            $log->trip_number = $kayak_data['tripnr'];
            $log->trip_type = $kayak_data['triptype'];
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
