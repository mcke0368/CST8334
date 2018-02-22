@extends('layoutGuide')
@section('headGuide')


@stop

@section('bodyGuide')
    <div class="container-fulid backgroundSeaBlue"><h1 class="text-center" style="margin:0; padding:1%; color:white;">LOGBOOKS</h1></div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-8">
                <div class="row">
                    <!-- Jo : Use for each loop to populate here )-->

                    <div class="col col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body" style="text-align: center">
                                Title will be populated by Logbook Type
                            </div>
                            <div class="panel-footer" style="text-align: center">
                                <!-- Jo : the href should be populated by logType-->
                                <a href="logbook" class="btn btn-primary">Create</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body" style="text-align: center">
                                Rock Climbing Logbook
                            </div>
                            <div class="panel-footer" style="text-align: center">
                                <!-- Jo : the href should be populated by logType-->
                                <a href="rockclimbingLogbook" class="btn btn-primary">Create</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body" style="text-align: center">
                                Kayak Logbook
                            </div>
                            <div class="panel-footer" style="text-align: center">
                                <!-- Jo : the href should be populated by logType-->
                                <a href="kayakLookbook" class="btn btn-primary">Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-40 col-sm-4">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Log History</div>
                    <div class="panel-body">
                        <p>...</p>
                    </div>
                    <!-- Table -->
                    <table class="table">
                        ...
                    </table>
                </div>
            </div>
            <!-- Force next columns to break to new line -->
        </div>
    </div>
    <div class="container-fulid backgroundSeaBlue"><h1 class="text-center" style="margin:0; padding:1%; color:white;">REPORTS</h1></div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-8">
                <div class="row">
                    <!-- Jo : Use for each loop to populate here )-->

                    <div class="col col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body" style="text-align: center">
                                Title will be populated by Report Type
                            </div>
                            <div class="panel-footer" style="text-align: center">
                                <!-- Jo : the href should be populated by logType-->
                                <a href="createReportType" class="btn btn-primary">Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-40 col-sm-4">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Report History</div>
                    <div class="panel-body">
                        <p>...</p>
                    </div>
                    <!-- Table -->
                    <table class="table">
                        ...
                    </table>
                </div>
            </div>
            <!-- Force next columns to break to new line -->
        </div>
    </div>

@stop
