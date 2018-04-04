<!-- /resources/views/LogbookScroll.blade.php -->

    <?php
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\Controller;

    $userid = Auth::user()->user_id;
    $logs = App\Models\BaseLog::all();

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

            <?php foreach ($logs as $log) {
                if ($log->is_public == 1) {?>
                    <div class="list-group-item text-center container">
                        <div class="row justify-content-start">
                            <a href="/printlog" class="col-">
                                <p class="h5">{{$log->title}}</p>
                                <p class="h6">{{date('F j, Y',strtotime($log->start_time))}}</p>
                                <p class="h6">{{$log->base_logable_type}}</p>
                            </a>
                            <div class="col-">

                            </div>
                        </div>

                    </div>
            <?php }
            }?>

        </div>
    </div>
</div>
