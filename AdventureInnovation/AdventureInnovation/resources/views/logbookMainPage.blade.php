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
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading" style="text-align: center;background-color: #54B2C7">Log History</div>
                    <div class="panel-footer" id=logscroll>
                        @component('logBookScroll')
                            @slot('title')
                                Joel's Test Logbooks
                            @endslot

                            Joel
                        @endcomponent
                    </div>
                    <!-- Table -->
                    <!-- <table class="table">
                        ...
                    </table> -->
                </div>
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
                                Title will be populated by Report Type
                            </div>
                            <div class="panel-footer" style="text-align: center">
                                <!-- Jo : the href should be populated by logType-->
                                <a href="/createReportType" class="btn btn-primary">Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-40 col-sm-4">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading" style="text-align: left;background-color: #54B2C7">Report History</div>
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
