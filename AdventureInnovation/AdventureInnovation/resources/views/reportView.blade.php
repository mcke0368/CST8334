@extends('layoutGuide')

@section('headGuide')
    <link rel="stylesheet" href="{{ URL::asset('slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('slick/slick-theme.css') }}"/>
    <script>
        $(document).on("click", "#b2", function () {
            $('html, body').animate({
                scrollTop: $("#f1").offset().top
            }, 500);
        });
    </script>

    <style>

    </style>
@stop

@section('bodyGuide')
    <div id="c1" class="container-fluid">
        <div class="col-xs-10 panel panel-default col-xs-offset-1 col-no-padding">
            <div id="name-panel" class="panel-heading">
                <h4> Risk Manager's report</h4>
            </div>
            <div class="panel-body">
                <h2>Date:{{$report->Report_date}}</h2>
                <h2>Time:{{$report->Report_time}}</h2>
                <h2>Location :{{$report->Location}}</h2>
                <h2>Temperature (C):{{$report->Temperature}}</h2>
                <h2>Wind :{{$report->Wind}}</h2>
                <h2>Precipitation :{{$report->Precipitation}}</h2>
                <h2>Visibility :{{$report->Visibility}}</h2>
                <h2>Surface Condition :{{$report->Surface_Condition}}</h2>
                <h2>Incident: {{$report->Incident}}</h2>
                <h2>Evacuation Method: {{$report->Evacuation_Method}}</h2>
                <h2>Damage: {{$report->Damage}}</h2>
                <h2>Is this a Lost-Day case?  {{$report->Lost_Day}} </h2>
                <h2>If yes: # of days lost?: {{$report->Lost_Number_Of_Days}}</h2>
                <h2>Did the victim leave the field? {{$report->Victim_Left_Field}} </h2>
                <h2>If yes, on what date?:{{$report->Victim_Left_Date}}</h2>
                <h2>Did the victim visit a medical facility?  {{$report->Visit_Facility}} </h2>
                <h2>If yes, # of hours/days : {{$report->Left_Date}}</h2>
                <h2>Did the victim return the course?{{$report->Return_Field}} </h2>
                <h2>If yes, on what date?: {{$report->Return_Date}}</h2>
                <h2>Is this a re-curring injury?  {{$report->Re_Curring}}</h2>
                <h2>Type of Injury :{{$report->Type_of_Injury}}</h2>
                <h2>Other Injury :{{$report->Other_Injury}}</h2>
                <h2>Type of Illness :{{$report->Type_of_Illness}}</h2>
                <h2>Other Illness :{{$report->Other_Illness}}</h2>
                <h2>Immediate Cause :{{$report->Immediate_Cause}}</h2>
                <h2>Other Cause :{{$report->Other_Cause}}</h2>
                <h2>Anatomical Location :{{$report->Anatomical_Location}}</h2>
                <img src="{{$report->Attachment}}" alt="" title="" ></img>
                <div style="text-align:right;" class="form-buttons-wrapper">
                    <button onClick="window.print()">Print this page</button>
                </div>
            </div>
        </div>
    </div>
@stop