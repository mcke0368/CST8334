@extends('layoutGuide')
@section('headGuide')
    <script src="{{URL::asset('js/logbooks-main.js')}}"></script>
    @yield('headLogbook')
@stop

@section('bodyGuide')
    <div class="container-fulid backgroundSeaBlue"><h1 class="text-center" style="margin:5%; padding:1%; color:white;">LOGBOOKS</h1></div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6">
                <div class="row">
                    <!-- Jo : Use for each loop to populate here )-->

                    <div class="col col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading d-flex justify-content-center align-items-center" style="background-color: #54B2C7">
                                <h4>Create a new Logbook</h4>
                            </div>
                            <div class="panel-body" style="text-align: center">
                                <form>
                                    <div class="form-group">
                                        <select class="form-control" id="logbookmain-select-activity">
                                            <option selected="true" disabled="disabled" value="disabled">--- Choose Activity ---</option>
                                            @foreach($log_types as $type)
                                                <option value="/logbook/{{$type->slug}}/new">{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                                <button class="btn btn-primary form" id="logbookmain-create-btn">Create</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-40 col-sm-6">
                        @component('logBookScroll', ['logcount' => $logcount, 'log_data' => $log_data])
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
