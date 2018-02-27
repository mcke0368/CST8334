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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/popper.min.js">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="{{ URL::asset('js/extra.js') }}"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>       
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
        
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

            .nav-item:hover{
                background-color: #54B2C7;                 
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

            .btn-right{
                position:relative;
                right:-15px;
            }

            form{
                padding:10px;
            }
          
            footer {
                padding: 2%;
            }   
            
            footer .footer-links a {
                margin-left: 1%;
                margin-right: 1%;
                color: white;
            }

            .circle{
                height:40px;
                width:40px;
                border-radius:50%;
                background-color:white;
                padding:10px;
                margin:4px;
            }
            .icon-color{
                color:#523E3A; 
                font-size: 130%; 
            }
            .twitter-icon:hover{
                background-color:#1da1f2;
                color: white;
            }
            
            .facebook-icon:hover{
                background-color:#365899; 
                color:white;    
            }

            .instagram-icon:hover{
                background-color:#0078D7; 
                color:white;
            }
            
            footer .footer-company-name {
                color: white;
            }
            
            footer p {
                align-content: middle;
            }
			white-space: pre-wrap;
            
        </style>
        @yield('head')
        <title>Adventure Innovation</title>
    </head>
    <body>		        
		<nav class="navbar navbar-inverse backgroundRockBlack">
		  <div class="container-fluid">
			<div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
			  <a class="navbar-brand" href="homepage">
			  <span><img src="{{ URL::asset('images/s3.amazonaws.com_upload.uxpin_files_272217_618567_newlogo_adventureibw-1.png') }}" alt="" 
                style="max-height:50px; max-width:50px;"></span></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse pull-right btn-right">                
				<ul class="nav navbar-nav">
				    <li class="nav-item">
					  <a class="nav-link" href="about"><h4>ABOUT</h4></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><h4>BLOG</h4></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact"><h4>CONTACT</h4></a>
					</li>
				</ul>
                <form class="form-inline navbar-right">
                    <div class="input-group">
                        <input class="form-control input-lg ml-sm-2" type="text" placeholder="Search">
                        <div class="input-group-addon input-lg mr-sm-2">
                            <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <a href="login" class="btn btn-danger btn-lg" role="button" aria-pressed="true">Login</a>
                </form>
			</div>
		  </div>
		</nav>
	
		@yield('body')
        
    <footer class="navbar-default backgroundRockBlack text-center">
        <div>       
        <a href="http://www.twitter.com" data-toggle="tooltip" data-placement="left" title="Twitter"><i class="fa fa-twitter circle twitter-icon icon-color" aria-hidden="true" ></i></a>
        <a href="http://www.facebook.com" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook circle facebook-icon icon-color" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram circle instagram-icon icon-color" aria-hidden="true"></i></a>
    </div>
        <p class="footer-links">
            <a href="about">About</a>
            <a href="blog">Blog</a>
            <a href="companyContact">Contact</a>
            <a href="legal">Legal</a>
        </p>
        <p class="footer-company-name">&copy; Copyright 2018, Advenure Innovation Inc. All rights reserved.</p>
    </footer>

    <script>
       $('[data-toggle="tooltip"]').tooltip()
   </script>
        
    </body>

</html>