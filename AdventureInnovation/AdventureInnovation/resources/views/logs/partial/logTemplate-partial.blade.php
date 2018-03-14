@extends('layoutGuide')

<div id="logbook-history-container" class="container-fulid">
    <p class="" style="">Logbook Count: {{ sizeof($logs) }}</p>

    <div class="pre-scrollable">

        @foreach ($logs as $log)
        <div id="lg{{ $log->id }}" class="card log-ref">
            <div class="card-block log-card" style="padding-right:1%;">
                <p class="card-title" style="display:inline">Log Title: {{ $log->title }}</p>
                <i id="dl{{ $log->id }}" name="{{ $log->title }}" class='fa fa-times pull-right delete-log-icon'
                   aria-hidden='true'></i>
                <p class="card-text">Log Type: {{ $log->type_title }}</p>
            </div>
        </div>
        @endforeach


    </div>

</div>

@stop
