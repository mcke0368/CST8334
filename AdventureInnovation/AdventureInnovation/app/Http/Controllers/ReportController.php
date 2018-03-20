<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ReportController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $report = new Report;
        //date
        $report -> Report_date = Input::get('report_date');
        //time
        $report -> Report_time =Input::get('report_time');
        //temp
        $report->Temperature=Input::get('temprature');
        //wind
        $report->Wind =Input::get('wind');
        //percipitation
        $report->Precipitation=Input::get('precipitation');
        //visibility
        $report->Visibility=Input::get('visibility');
        //surface
        $surface_array = array(Input::get('surfaceCondition'));
        $surface_array = implode(',',$surface_array);
        $report ->Surface_Condition = $surface_array;

        //type of Injury
        $injury_array = array(Input::get('injury'));
        $injury_array = implode(',',$injury_array);
        $report ->Type_of_Injury = $injury_array;
        $report -> Other_Injury = Input::get('otherInjury');
        //type of Illness
        $illness_array = array(Input::get('illness'));
        $illness_array = implode(',',$illness_array);
        $report ->Type_of_Illness = $illness_array;
        $report -> Other_Illness = Input::get('otherIllnes');
        //Program Activity
        $activitie_array = array(Input::get('activitie'));
        $activitie_array = implode(',',$activitie_array);
        $report ->Program_Activity = $activitie_array;
        $report -> Other_Activity = Input::get('otherActivity');
        //Immediate Cause
        $cause_array = array(Input::get('cause'));
        $cause_array = implode(',',$cause_array);
        $report ->Immediate_Cause = $cause_array;
        $report -> Other_Cause = Input::get('otherCause');
        //anatomical location
        $anatomical_location_array = array(Input::get('anatomical_location'));
        $anatomical_location_array = implode(',',$anatomical_location_array);
        $report ->Anatomical_Location = $anatomical_location_array;

        //user Id
        $report->user_id = $user_id;
        $report->save();
        return redirect()->action(
            'GuideProfileController@getGuide'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);
        //in reportShow.blade.php object is called Report
        return view('reportView')->with('report',$report);
    }

}
