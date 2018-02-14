@extends('layout')

@section('head')
    <style>
    </style>
    <script>
    </script>

@yield('headCompany')

@stop

@section('body')

<nav id="sub-navbar" class="navbar navbar-inverse navbar-static-top" style="background: #E7E7E7; color: #000000;">
    <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                <a class="nav-link" href="jobSearch"><h5>JOB POST&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></h5></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logBook"><h5>INVENTORY&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></h5></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="profile"><h5>GUIDES&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></h5></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="mailbox"><h5><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;MAILBOX</h5></a>
                </li>
            </ul>
    </div>
</nav>

@yield('headCompany')

@stop