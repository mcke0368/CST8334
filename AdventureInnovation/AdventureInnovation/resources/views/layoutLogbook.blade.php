@extends('layout2')

@section('head2')
    <style>
    </style>
    <script>
	$( function() {
		$("#ref-logout").click(function() {
				$.ajax({
					url: '/logout'
				});
		   
		});	
	 } );
    </script>

@yield('headLogbook')

@stop

@section('body2')

<nav id="sub-navbar" class="navbar navbar-inverse navbar-static-top" style="background: #E7E7E7; color: #000000;">
    <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                
                <li class="nav-item">
                <a class="nav-link" href="logbook"><h5>LOGBOOK&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></h5></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="profile"><h5>PROFILE&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></h5></a>
                </li>
                <li class="nav-item">
                <a id="ref-logout" class="nav-link" href="login"><h5>&nbsp;&nbsp;Logout</h5></a>
                </li>
            </ul>
    </div>
</nav>

@yield('bodyLogbook')

@stop
