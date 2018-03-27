@extends('layoutGuide')

@section('headGuide')

@stop
@section('bodyGuide')

<div class="container-fluid background-report">
    <h2 class="report-title">Risk Manager's Report</h2>
    <div class="col-md-6 col-md-offset-3 report-elements">
        <div class="input-lg">
        {!! Form::open(array('route' => 'Reports.store')) !!}
        {{Form::label('dateLabel','Date: ')}}
        {{Form::date('report_date', \Carbon\Carbon::now(), array('class' => 'input-report'))}}
        {{Form::time('report_time', Carbon\Carbon::now()->format('H:i'), array('class' => 'input-report')) }}
        </div>
        <div class="input-lg">
        {{Form::label('locationLabel','Location: ')}}
        {{Form::text('location',null, array('class' => 'input-report'))}}
        </div>
        <div class="input-lg">
        {{Form::label('TempLabel','Temp (C): ')}}
        
        <!-- For selectRange function. Prams are (variableName,min,max,defaultValue)-->

        {{Form::selectRange('temprature', -40, 40,0, array('class' => 'input-report'))}}
        </div>
        <div class="input-lg">
        {{Form::label('WindLabel','Wind (mph): ')}}
        {{Form::text('wind',null, array('class' => 'input-report'))}}
        </div>
        <div class="input-lg">
        {{Form::label('PrecipitatioLabel','Precipitation: ')}}
        <?php
        $precipitations = array("rain","snow","freezing rain","None");
        ?>
        @foreach($precipitations as $precipitation)
            {{Form::radio('precipitation',$precipitation,false)}}
            {{Form::label('precipitationLabel',$precipitation)}}
        @endforeach
        </div>
        <!-- Visibility -->
        <div class="input-lg">
        {{Form::label('VisibilityLabel','Visibility: ')}}
        <?php
        $visibility = array("unlimited","good","poor");
        ?>
        @foreach($visibility as $visibilit)
            {{Form::radio('visibility',$visibilit,false)}}
            {{Form::label($visibilit,$visibilit)}}
        @endforeach
        </div>
        <!-- Surface conditioin -->
        <div class="input-lg">
        {{Form::label('surfaceLabel','Surface Condition: ')}}
        <?php
        $surfaces = array("wet","dry","snow","ice","trail","rock","uneven","flat","sloped");
        ?>
        @foreach($surfaces as $surface)
            {{Form::checkbox('surfaceCondition[]',$surface)}}
            {{Form::label($surface,$surface)}}
        @endforeach
        </div>
        <br>
        <div class="col-md-6">{{Form::file('attachment',array('class' => 'form-control'))}}
        </div>
    </div>


    <div class="panel-group" id="report">   
        <div class="col-md-6">   
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#report" href="#collapse6">
                            <h4>Type of Incident</h4>
                        </a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <?php
                        $incidents = array("&nbsp;Injury","&nbsp;Illness","&nbsp;Motivation/Behaviour","&nbsp;Near Miss");
                        ?>
                        @foreach($incidents as $incident)
                        {{Form::label($incident,$incident)}}
                        {{Form::checkbox('incident[]',$incident)}}
                        @endforeach
                        </br>
                        {{Form::label('evacuationMethodLabel','Evacuation method: ')}}
                        <?php
                        $evacuationMethods = array("&nbsp;Walks Unassisted"," &nbsp;Litter ","&nbsp;Vehicle ","&nbsp;Helicopter"," &nbsp;Other ");
                        ?>
                        @foreach($evacuationMethods as $evacuationMethod)
                        {{Form::checkbox('evacuationMethod[]',$evacuationMethod)}}
                        {{Form::label($evacuationMethod,$evacuationMethod)}}
                        @endforeach
                        </br>
                        {{Form::label('damageLabel','Was there damage to: : ')}}
                        <?php
                        $damages = array("&nbsp;Vehicle","&nbsp;Equipment","&nbsp;Property");
                        ?>
                        @foreach($damages as $damage)
                        {{Form::checkbox('damage[]',$damage)}}
                        {{Form::label($damage,$damage)}}
                        @endforeach
                        </br>
                        {{Form::label('lostDayLabel','Is this a Lost-Day case? ')}}
                        <?php
                        $lostDays = array("Yes","No");
                        ?>
                        @foreach($lostDays as $lostDay)
                        {{Form::radio('lostDay',$lostDay,false)}}
                        {{Form::label($lostDay,$lostDay)}}
                        @endforeach
                        {{Form::label('lostDayLabel','If yes: # of days lost?: ')}}
                        {{Form::text('lostNumDay',null)}}
                        </br>

                        {{Form::label('VictimLabel','Did the victim leave the field?  ')}}
                        @foreach($lostDays as $lostDay)
                            {{Form::radio('victimLeftField',$lostDay,false)}}
                            {{Form::label($lostDay,$lostDay)}}
                        @endforeach
                        {{Form::label('DateLeftLabel','If yes, on what date?:  ')}}
                        {{Form::text('DateLeft',null)}}
                        <br>

                        {{Form::label('VictimLabel','Did the victim visit a medical facility?  ')}}
                        @foreach($lostDays as $lostDay)
                            {{Form::radio('victimVisitFacility',$lostDay,false)}}
                            {{Form::label($lostDay,$lostDay)}}
                        @endforeach
                        {{Form::label('VictimLeftLabel','If yes, # of hours/days  ')}}
                        {{Form::text('numberOfDateLeft',null)}}
                        <br>

                        {{Form::label('VictimLabel','Did the victim return the course?  ')}}
                        @foreach($lostDays as $lostDay)
                            {{Form::radio('returnField',$lostDay,false)}}
                            {{Form::label($lostDay,$lostDay)}}
                        @endforeach
                        {{Form::label('returnDate','If yes, on what date?:  ')}}
                        {{Form::text('dateReturn',null)}}
                        <br>

                        {{Form::label('VictimLabel','Is this a re-curring injury?  ')}}
                        @foreach($lostDays as $lostDay)
                            {{Form::radio('recurring',$lostDay,false)}}
                            {{Form::label($lostDay,$lostDay)}}
                        @endforeach
                        <br>

                        </div>

                    </div>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#report" href="#collapse1">
                            <h4> Type of Injury</h4>
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <?php
                            $typeOfInjuries = array("&nbsp;Bruise, contusion or similar soft-tissue trauma","&nbsp;Immersion foot","&nbsp;ligament sprain","&nbsp;Tendonitis","&nbsp;Muscle strain","&nbsp;Eye injury","Frostbite",
                            "&nbsp;Dental or tooth-related","&nbsp;Fracture","&nbsp;Burn","&nbsp;Dislocation","&nbsp;Blister(s)","&nbsp;Head injury without loss of consciousness",
                                "&nbsp;Laceration","&nbsp;Head injury with loss of consciousness","&nbsp;Skin abrasions","&nbsp;Near drowning or other submersion problem","&nbsp;Sunburn","&nbsp;Other (Specify)");
                            ?>
                            @foreach($typeOfInjuries as $typeOfInjuriy)
                                {{Form::checkbox('injury[]',$typeOfInjuriy)}}
                                {{Form::label($typeOfInjuriy,$typeOfInjuriy)}}
                            @endforeach
                            {{Form::text('otherInjury',null,array('class' => 'form-control'))}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#report" href="#collapse2">
                            <h4>Anatomical Location of injury</h4>
                        </a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <?php
                            $locationInjuries = array("&nbsp;Head","&nbsp;Neck","&nbsp;Face","&nbsp;Nose","&nbsp;Mouth","&nbsp;Upper Back (L)","&nbsp;Upper Back (R)","&nbsp;Hip (L)","&nbsp;Hip (R)","&nbsp;Shoulder (L)","&nbsp;Shoulder (R)","&nbsp;Lower back (L)"
                            ,"&nbsp;Lower back (R)","T&nbsp;high (L)","&nbsp;Thigh (R)","&nbsp;Upper Arm (L)","&nbsp;&nbsp;Upper Arm (R)","&nbsp;Chest (L)","&nbsp;Chest (R)","&nbsp;Knee (L)","&nbsp;Knee (R)","&nbsp;Elbow (L)","&nbsp;Elbow (R)","&nbsp;Eye (L)","&nbsp;Eye (R)",
                            "&nbsp;Abdomen (L)","&nbsp;Abdomen (R)","&nbsp;Lower Leg (L)","&nbsp;Lower Leg (R)","&nbsp;Forearm (L)","&nbsp;Forearm (R)","&nbsp;Pelvis (L)","&nbsp;Pelvis (R)","&nbsp;Ankle (L)","&nbsp;Ankle (R)","&nbsp;Wrist (L)","&nbsp;Wrist (R)",
                                "&nbsp;Foot (L)","&nbsp;Foot (R)","&nbsp;Hand/Fingers (L)","&nbsp;Hand/Fingers (R)","&nbsp;Toe (L)","&nbsp;Toe (R)");
                            ?>
                            @foreach($locationInjuries as $locationInjury)
                                {{Form::checkbox('anatomical_location[]',$locationInjury)}}
                                {{Form::label($locationInjury,$locationInjury)}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#report" href="#collapse3">
                            <h4> Type of Illness</h4>
                        </a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <?php
                            $typeOfIllnesses = array("&nbsp;Chest pain or cardiac condition","&nbsp;Apparent food-related illness","&nbsp;Nonspecific fever illness","&nbsp;Urinary tract infection",
                                "&nbsp;Skin infection","&nbsp;Left eye infection","&nbsp;Right eye infection","&nbsp;Mild or localized allergic reaction ","&nbsp;Severe, generalized or anaphylaxis allergic reaction",
                                "&nbsp;Hypothermia or heat illness (specify temp)","&nbsp;Upper respiratory illness (runny nose, congestion, cold)",
                                "&nbsp;Abdominal or other gastrointestinal problem including diarrhea","&nbsp;Other (Specify)");
                            ?>
                            @foreach($typeOfIllnesses as $typeOfIllness)
                                {{Form::checkbox('illness[]',$typeOfIllness)}}
                                {{Form::label($typeOfIllness,$typeOfIllness)}}
                            @endforeach
                                {{Form::text('otherIllness',null,array('class' => 'form-control'))}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#report" href="#collapse4">
                            <h4>Program Activity</h4>
                        </a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <?php
                            $programActivities = array("&nbsp;Rafting","&nbsp;Kayak","&nbsp;Canoe","&nbsp;Sea Kayak","&nbsp;Scuba","&nbsp;Rock Climbing","&nbsp;Rope Rescue Training","&nbsp;Backpacking","&nbsp;Hike - No Pack",
                                "&nbsp;Portage","&nbsp;Rescue Simulation","&nbsp;Snowboard","&nbsp;Alpine Ski", "&nbsp;XC Ski","&nbsp;Ice Climb","&nbsp;Snowshoeing","&nbsp;Ice Rescue","&nbsp;Swim","&nbsp;Urban Activity","&nbsp;Camp",
                                "&nbsp;Cooking","&nbsp;Vehicle/Trailer","&nbsp;Solo","&nbsp;Independent Travel","&nbsp;Mountain Bike","&nbsp;Work/trail crew","&nbsp;Other");
                            ?>
                            @foreach($programActivities as $programActivitie)
                                {{Form::checkbox('activitie[]',$programActivitie)}}
                                {{Form::label($programActivitie,$programActivitie)}}
                            @endforeach
                            {{Form::text('otherActivity',null,array('class' => 'form-control'))}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#report" href="#collapse5">
                            <h4> Immediate Cause</h4>
                        </a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <?php
                            $immediateCauses = array("&nbsp;Fall On Snow","&nbsp;Fall On Rock","&nbsp;Fall/Slipt on Trail","&nbsp;Dehydration","&nbsp;Cold Exposure", "Technique","&nbsp;Pre-existing Medical Condition",
                                "&nbsp;Overuse Injury", "&nbsp;Failed to Folow Instructions","&nbsp;Carelessness","&nbsp;Exceeded Ability", "&nbsp;Exhaustion","&nbsp;Psychological","&nbsp;Misbehaviour","&nbsp;Supervisioin","&nbsp;Instruction",
                                "&nbsp;Equipment","&nbsp;Weather","&nbsp;Other");
                            ?>
                            @foreach($immediateCauses as $immediateCause)
                                {{Form::checkbox('cause[]',$immediateCause)}}
                                {{Form::label($immediateCause,$immediateCause)}}
                            @endforeach
                                {{Form::text('otherCause',null,array('class' => 'form-control'))}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-danger col-md-2 col-md-offset-5 col-xs-2 col-xs-offset-5 report-submit col-no-padding" >{{Form::submit('Submit', array('class' => 'btn btn-danger col-md-12'))}}</button>    
    {!! Form::close() !!}
</div>
@stop
