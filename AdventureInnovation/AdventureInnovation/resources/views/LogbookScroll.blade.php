<!-- /resources/views/LogbookScroll.blade.php -->

    <?php
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\Controller;

    $userid = Auth::user()->user_id;
    $logs = DB::table('logs')
                ->get();
    $logcount = count($logs);
    ?>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading d-flex justify-content-center align-items-center" style="background-color: {{$bannerColour}}">
        <h4><i class="glyphicon glyphicon-book" ></i> {{$title}}
            @if ($logcount > 0)
                <small class = "pull-right align-items-center">Log Count: {{$logcount}} </small>
            @elseif ($logcount === 0 )
                <small class = "pull-right align-items-center">You have no logs to show</small>
            @endif
        </h4>
    </div>
    <div class="panel-footer">

        <div class="list-group">
            <p class="list-group-item">Search bar goes here</p>
        </div>

        <div class="list-group" id=logscroll>

            <?php foreach ($logs as $log) { ?>
                <a href="#" class="list-group-item flex-column list-group-item-action">
                    <div class="row">
                      <h4> {{$log->debrief}}
                          <span class="badge badge-primary badge-pill pull-right" style ="background-color: {{$bannerColour}}">{{date('F j, Y',strtotime($log->date_occurred))}}</span>
                      </h4>
                    </div>
                    <h5 class="mb-1">{{$log->summary}}
                        <small class="pull-right">{{$log->activity}}</small>
                    </h5>
                </a>
            <?php } ?>

        </div>
    </div>
</div>
