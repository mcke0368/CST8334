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
        <h3>{{$title}}</h3>
        @if ($logcount > 0)
            <small>Log Count <?php echo$logcount?></small>
        @elseif ($logcount === 0 )
            <small>You have no logs to show</small>
        @endif
    </div>
    <div class="panel-footer">

        <div class="list-group">
            <p class="list-group-item">Search bar goes here</p>
        </div>

        <div class="list-group" id=logscroll>

            <?php foreach ($logs as $log) { ?>
            <a href="#" class="list-group-item flex-column list-group-item-action">
                <div class="row">
                  <h3 class="pull-left"><?php echo$log->debrief?> </h3>
                  <span class="badge badge-primary badge-pill pull-right align-center"><?php echo date('F j, Y',strtotime($log->date_occurred))?></span>
                </div>
                <p class="mb-1"><?php echo$log->summary?></p>
                <small class="text-muted"><?php echo$log->activity?></small>
            </a>
          <?php } ?>

        </div>
    </div>
Hi {{ $slot }}
</div>
