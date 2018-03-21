@extends('layout')

@section('head')
    <style>
        <!--
        custom style

        -->
    </style>

    <link rel="stylesheet" href="{{ URL::asset('js/dragula/dist/dragula.min.css') }}">
    <script src="{{ URL::asset('js/dragula/dist/dragula.min.js') }}"></script>
    <script src="{{URL::asset('js/logbooks.js')}}"></script>

    @yield('headLogbook')
@stop

@section('body')

    <div class="container-fulid backgroundSeaBlue"><h1 class="text-center" style="margin:0; padding:1%; color:white;">
            Testing</h1></div>

    <div class="container">
        @include('logs.partial.panel-form')
    </div>

@stop