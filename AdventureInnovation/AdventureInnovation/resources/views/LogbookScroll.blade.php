<!-- /resources/views/LogbookScroll.blade.php -->

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
            @foreach($log_data as $log)
                <a href="/printlog" class="list-group-item flex-column list-group-item-action">
                    <div class="row">
                      <h4> {{$log['title']}}
                          <span class="badge badge-primary badge-pill pull-right" style ="background-color: {{$bannerColour}}">{{date('F j, Y',strtotime($log['date']))}}</span>
                      </h4>
                    </div>
                    <h5 class="mb-1">{{$log['location']}}
                        <small class="pull-right">{{$log['activity']}} <span class='btn btn-danger btn-xs'> X </span></small>
                    </h5>
                </a>
            @endforeach
        </div>
    </div>
</div>
