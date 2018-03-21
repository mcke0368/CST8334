<?php

namespace App\Http\Controllers;

use App\Models\LogTemplate;
use App\Models\LogType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestingController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getWeather(Request $request) {

        $templates = LogTemplate::all();

        return view('logs.testing');
    }


    public function showTemplate(Request $request) {

        if ( Auth::check()) {
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
    public function saveTemplate(Request $request) {
        $template_name = (string)$request->template_name;
        $template_desc = (string)$request->template_desc;
        $html_data = (string)$request->html_data;

        if ( Auth::check()) {
            $template = new LogTemplate();
            $template->name = $template_name;
            $template->description = $template_desc;
            $template->html_data = $html_data;

            $template->save();
            return json_encode(true);
        }
        return json_encode(false);
    }

    public function showTemplateList(Request $request) {

        if ( Auth::check()) {
            $user = Auth::user();


            //$logbook_types =
            //return view('logTemplate-partial', ['logbook_types' => $logbook_types]);
        }
    }

}
