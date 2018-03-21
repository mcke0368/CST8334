@extends('layoutGuide')

@section('headGuide')
@stop
@section('bodyGuide')
    {!! Form::open(array('route' => 'Reports.store')) !!}
    {{Form::label('dateLabel','Date: ')}}
    {{Form::date('report_date', \Carbon\Carbon::now())}}
   <!-- {{Form::select('size', array('L' => 'Large', 'S' => 'Small'), 'S')}} -->
    {{Form::time('report_time', Carbon\Carbon::now()->format('H:i')) }}
    </br>
    {{Form::label('TempLabel','Temp (C): ')}}
    <!-- For selectRange function. Prams are (variableName,min,max,defaultValue)-->
    {{Form::selectRange('temprature', -40, 40,0)}}
    </br>
    {{Form::label('WindLabel','Wind (mph): ')}}
    {{Form::text('wind',null)}}
    </br>
    {{Form::label('PrecipitatioLabel','Precipitation: ')}}
    <?php
    $precipitations = array("rain","snow","None");
    ?>
    @foreach($precipitations as $precipitation)
        {{Form::radio('precipitation',$precipitation,false)}}
        {{Form::label('precipitationLabel',$precipitation)}}
    @endforeach
    </br>
    <!-- Visibility -->
    {{Form::label('VisibilityLabel','Visibility: ')}}
    <?php
    $visibility = array("unlimited","good","poor");
    ?>
    @foreach($visibility as $visibilit)
        {{Form::radio('visibility',$visibilit,false)}}
        {{Form::label($visibilit,$visibilit)}}
    @endforeach
    </br>
    <!-- Surface conditioin -->
    {{Form::label('surfaceLabel','Surface Condition: ')}}
    <?php
    $surfaces = array("wet","dry","snow","ice","trail","rock","uneven","flat","sloped");
    ?>
    @foreach($surfaces as $surface)
        {{Form::checkbox('surfaceCondition[]',$surface)}}
        {{Form::label($surface,$surface)}}
    @endforeach
    </br>

    <div class="panel-group" id="report">
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


                    </div>

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
                        $typeOfInjuries = array("Bruise, contusion or similar soft-tissue trauma","Immersion foot","ligament sprain","Tendonitis","Muscle strain","Eye injury","Frostbite",
                        "dental or tooth-related","Fracture","Burn","Dislocation","Blister(s)","Head injury without loss of consciousness",
                            "Laceration","Head injury with loss of consciousness","Skin abrasions","Near drowning or other submersion problem","Sunburn","Other (Specify)");
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
                        $locationInjuries = array("Head","Neck","Face","Nose","Mouth","Upper Back (L)","Upper Back (R)","Hip (L)","Hip (R)","Shoulder (L)","Shoulder (R)","Lower back (L)"
                        ,"Lower back (R)","Thigh (L)","Thigh (R)","Upper Arm (L)","Upper Arm (R)","Chest (L)","Chest (R)","Knee (L)","Knee (R)","Elbow (L)","Elbow (R)","Eye (L)","Eye (R)",
                        "Abdomen (L)","Abdomen (R)","Lower Leg (L)","Lower Leg (R)","Forearm (L)","Forearm (R)","Pelvis (L)","Pelvis (R)","Ankle (L)","Ankle (R)","Wrist (L)","Wrist (R)",
                            "Foot (L)","Foot (R)","Hand/Fingers (L)","Hand/Fingers (R)","Toe (L)","Toe (R)");
                        ?>
                        @foreach($locationInjuries as $locationInjury)
                            {{Form::checkbox('anatomical_location[]',$locationInjury)}}
                            {{Form::label($locationInjury,$locationInjury)}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
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
                        $typeOfIllnesses = array("Chest pain or cardiac condition","Apparent food-related illness","Nonspecific fever illness","Urinary tract infection",
                            "Skin infection","Left eye infection","Right eye infection","Mild or localized allergic reaction ","Severe, generalized or anaphylaxis allergic reaction",
                            "Hypothermia or heat illness (specify temp)","Upper respiratory illness (runny nose, congestion, cold)",
                            "Abdominal or other gastrointestinal problem including diarrhea","Other (Specify)");
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
                        $programActivities = array("Rafting","Kayak","Canoe","Sea Kayak","Scuba","Rock Climbing","Rope Rescue Training","Backpacking","Hike - No Pack",
                            "Portage","Rescue Simulation","Snowboard","Alpine Ski", "XC Ski","Ice Climb","Snowshoeing","Ice Rescue","Swim","Urban Activity","Camp",
                            "Cooking","Vehicle/Trailer","Solo","Independent Travel","Mountain Bike","Work/trail crew","Other");
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
                        $immediateCauses = array("Fall On Snow","Fall On Rock","Fall/Slipt on Trail","Dehydration","Cold Exposure", "Technique","Pre-existing Medical Condition",
                            "Overuse Injury", "Failed to Folow Instructions","Carelessness","Exceeded Ability", "Exhaustion","Psychological","Misbehaviour","Supervisioin","Instruction",
                            "Equipment","Weather","Other");
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
    {{Form::file('attachment',array('class' => 'form-control'))}}
    {{Form::submit('Submit')}}
    {!! Form::close() !!}
@stop
