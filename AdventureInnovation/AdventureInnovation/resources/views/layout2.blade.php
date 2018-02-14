<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('jquery-ui-1.12.1/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('jquery-ui-1.12.1/jquery-ui.theme.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="{{ URL::asset('js/extra.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
        <!--
             Tinymce plugins can be added in a listlike format.
             https://www.tinymce.com/docs/plugins/
        -->
        <style>
            body {
				font-family: 'Contrail One', cursive;
			}
            
            .navbar { 
                margin-bottom: 0;
                border: None;
            }
            
            #sub-navbar {
                min-height:10px !important;
                border: None;
            }
            
            #sub-navbar ul li > a {
                padding-top:1px !important; 
                padding-bottom:1px !important;
            }
            
            #sub-navbar ul li a h5 {
                color: #000000;
            }
          
            footer {
                padding: 2%;
            }   
            
            footer .footer-links a {
                margin-left: 1%;
                margin-right: 1%;
                color: white;
            }
            
            footer .footer-company-name {
                color: white;
            }
            
            footer p {
                align-content: middle;
            }
			white-space: pre-wrap;
            
        </style>
        @yield('head2')
        <title>Adventure Innovation</title>
    </head>
    <body>		
        
		<nav class="navbar navbar-inverse navbar-static-top backgroundRockBlack">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="homepage">
			  <span><img src="{{ URL::asset('images/s3.amazonaws.com_upload.uxpin_files_272217_618567_newlogo_adventureibw-1.png') }}" alt="" 
style="max-height:50px; max-width:50px;"></span></a>
			</div>
			<div id="navbar">
				<form class="navbar-form navbar-nav navbar-right" style="padding-top:10px;">
					<div class="form-group">
					  <input type="text" class="form-control" placeholder="Search">
					</div>
<!--					<button type="submit" class="btn btn-danger">Login</button>-->
                        <a href="login" class="btn btn-danger" role="button">Login</a>
				</form>
				<ul class="nav navbar-nav navbar-right">
				    <li class="nav-item">
					  <a class="nav-link" href="about"><h4>About</h4></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><h4>Blog</h4></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact"><h4>Contact</h4></a>
					</li>
				</ul>
			</div>
		  </div>
		</nav>
	
		@yield('body2')
        
    <footer class="navbar-default backgroundRockBlack text-center">
        <p class="footer-links">
            <a href="about">About</a>
            <a href="blog">Blog</a>
            <a href="companyContact">Contact</a>
            <a href="legal">Legal</a>
        </p>
        <p class="footer-company-name">&copy; Copyright 2017, Advenure Innovation, Inc. All rights reserved.</p>
    </footer>
        
    </body>
</html>