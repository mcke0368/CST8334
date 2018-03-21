@extends('layoutGuide')
@section('headGuide')

@stop

@section('bodyGuide')
    <div class="container-fulid backgroundSeaBlue"><h1 class="text-center" style="margin:5%; padding:1%; color:white;">LOGBOOKS</h1></div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-8">
                <div class="row">
                    <!-- Jo : Use for each loop to populate here )-->

                    <div class="col col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body" style="text-align: center; background-color: #54B2C7">
                                Title will be populated by Logbook Type
                            </div>
                            <div class="panel-footer" style="text-align: center">
                                <!-- Jo : the href should be populated by logType-->
                                <a href="/logbook" class="btn btn-primary">Create</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body" style="text-align: center; background-color: #54B2C7">
                                Rock Climbing Logbook
                            </div>
                            <div class="panel-footer" style="text-align: center">
                                <!-- Jo : the href should be populated by logType-->
                                <a href="/rockClimbingLogbook" class="btn btn-primary">Create</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body" style="text-align: center; background-color: #54B2C7">
                                Kayak Logbook
                            </div>
                            <div class="panel-footer" style="text-align: center">
                                <!-- Jo : the href should be populated by logType-->
                                <a href="/kayakLookbook" class="btn btn-primary">Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-40 col-sm-4">
                        @component('logBookScroll')
                            @slot('title')
                                Logbook History
                            @endslot
                            @slot('bannerColour')
                                #54B2C7
                            @endslot
                        @endcomponent

            </div>
            <!-- Force next columns to break to new line -->
        </div>
    </div>
    <div class="container-fulid backgroundSeaBlue" ><h1 class="text-center" style="margin:5%; padding:1%; color:white;">REPORTS</h1></div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-8">
                <div class="row">
                    <!-- Jo : Use for each loop to populate here )-->

                    <div class="col col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body" style="text-align: center; background-color: #54B2C7">
                                Risk Managers Incident Report
                            </div>
                            <div class="panel-footer" style="text-align: center">
                                <!-- Jo : the href should be populated by logType-->
                                <a href="/report" class="btn btn-primary">Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-40 col-sm-4">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Report History
                        </a>
                        <?php
                            $reports = App\Models\Report::all();
                            foreach ($reports as $report)
                               {
                                   $link = "Reports/$report->id";
                                    echo "$report->Report_date";
                                    echo "<a href = ".$link.">     Report</a></br>";
                               }
                           ?>

                    </div>

                </div>
            </div>
            <!-- Force next columns to break to new line -->
        </div>
    </div>

@stop
