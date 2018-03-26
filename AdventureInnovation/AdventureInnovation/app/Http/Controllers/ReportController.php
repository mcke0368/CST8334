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
        //Location
        $report->Location=Input::get('location');
        //wind
        $report->Wind =Input::get('wind');
        //percipitation
        $report->Precipitation=Input::get('precipitation');
        //visibility
        $report->Visibility=Input::get('visibility');
        //surface
        $surface_array = (array)(Input::get('surfaceCondition'));
        $report ->Surface_Condition = implode(',',$surface_array);
        //incident
        $incident_array = (array)(Input::get('incident'));
        $report ->Incident= implode(',',$incident_array);
        //Evacuation_Method
        $evacuationMethod_array  = (array)(Input::get('evacuationMethod'));
        $report ->Evacuation_Method= implode(',',$evacuationMethod_array);
        //damage to
        $damage_array = (array)(Input::get('damage'));
        $report ->Damage= implode(',',$damage_array);
        //lost day
        $report->Lost_Day=Input::get('lostDay');
        $report->Lost_Number_Of_Days=Input::get('lostNumDay');
        //victime left field
        $report->Victim_Left_Field=Input::get('victimLeftField');
        $report->Victim_Left_Date=Input::get('DateLeft');
        //victime visit facility
        $report->Visit_Facility=Input::get('victimVisitFacility');
        $report->Left_Date=Input::get('numberOfDateLeft');
        //victime visit facility
        $report->Return_Field=Input::get('returnField');
        $report->Return_Date=Input::get('dateReturn');
        //victime visit facility
        $report->Re_Curring=Input::get('recurring');


        //type of Injury
        $injury_array = (array)(Input::get('injury'));
        $report ->Type_of_Injury = implode(',',$injury_array);
        $report -> Other_Injury = Input::get('otherInjury');
        //type of Illness
        $illness_array = (array)(Input::get('illness'));
        $report ->Type_of_Illness = implode(',',$illness_array);
        $report -> Other_Illness = Input::get('otherIllness');
        //Program Activity
        $activitie_array = (array)(Input::get('activitie'));
        $report ->Program_Activity = implode(',',$activitie_array);
        $report -> Other_Activity = Input::get('otherActivity');
        //Immediate Cause
        $cause_array = (array)(Input::get('cause'));
        $report ->Immediate_Cause = implode(',',$cause_array);
        $report -> Other_Cause = Input::get('otherCause');
        //anatomical location
        $anatomical_location_array = (array)(Input::get('anatomical_location'));
        $report ->Anatomical_Location = implode(',',$anatomical_location_array);

        //user Id
        $report->user_id = $user_id;
        $report->save();
        return redirect('/logbookMainPage');
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
