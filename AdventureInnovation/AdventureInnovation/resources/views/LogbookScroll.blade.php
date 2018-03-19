<!-- /resources/views/LogbookScroll.blade.php -->

        <?php

        use Illuminate\Support\Facades\DB;
        use App\Http\Controllers\Controller;

        $userid = Auth::user()->user_id;
        $logs = DB::table('logs')
                    ->get();?>


        <div class="list-group list-group-flush">
          <?php foreach ($logs as $log) { ?>
            <a href="#" class="list-group-item list-group-item-action align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1"><?php echo$log->debrief?></h5>
                  <small class="text-muted"><?php echo date('F j, Y',strtotime($log->date_occurred))?></small>
                </div>
                <p class="mb-1"><?php echo$log->debrief?></p>
                <small class="text-muted"><?php echo$log->activity?></small>
            </a>
          <?php } ?>
        </div>
    Hi {{ $slot }}
