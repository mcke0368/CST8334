<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
		
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/project.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('jquery-ui-1.12.1/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('jquery-ui-1.12.1/jquery-ui.theme.min.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="{{ URL::asset('js/extra.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
        
       
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
				<a class="navbar-brand" href="/homepage">
					<span>
						<img src="{{ URL::asset('images/s3.amazonaws.com_upload.uxpin_files_272217_618567_newlogo_adventureibw-1.png') }}"
							 alt="Adventure Innovation" class="brand-image">
					</span>
				</a>
			</div>
			<div id="navbar">
				<form class="navbar-form navbar-nav navbar-right search-form">
					<div class="input-group">
					  <input type="text" class="form-control" placeholder="Search">
					  <div class="input-group-addon mr-sm-2">
                            <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
					</div>
				</form>


				<ul class="nav navbar-nav navbar-right">
				    <li class="nav-item">
					  <a class="nav-link" href="/about"><h4>ABOUT</h4></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><h4>BLOG</h4></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contact"><h4>CONTACT</h4></a>
					</li>
                    <li>
                        @if(Auth::check())


                            <div class="btn-group">
                                <button class="dropdown-toggle btn btn-danger btn-lg"
                                        data-toggle="dropdown" id="login-menu" type="button"
                                        aria-haspopup="true" aria-expanded="false"
                                        style="padding:7px 15px; margin-top:17px">
                                    {{ Auth::user()->username }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="login-menu" id="login-item">
                                    <li class="dropdown-item">
                                        <div class="btn-default btn-xs" id="dropdown-profile" type="button">
                                            <span class="fa" >Profile</span>
                                        </div>
                                    </li>
                                    <li class="dropdown-item">
                                        <div class="btn-default btn-xs" id="dropdown-edit-profile" type="button">
                                            <span class="fa" >Edit Profile</span>
                                        </div>
                                    </li>
                                    <li class="dropdown-item">
                                        <div class="btn-default btn-xs" id="dropdown-logbooks" type="button">
                                            <span class="fa">Logbooks</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="btn-default btn-xs" id="dropdown-logout" type="button">
                                            <span class = "fa" >Logout</span>
                                        </div>

                                    </li>
                                </ul>
                            </div>




                            <!--<form id="form-inline" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn login-logout btn-danger">Logout of {{Auth::user()->username}}</button>
                            </form>-->

                        @else
                            <a href="/login" class="btn login-logout btn-danger nohover" role="button">Login</a>
                        @endif
                    </li>
				</ul>
			</div>
		  </div>
		</nav>
	
		@yield('body')
        
    <footer class="navbar-default backgroundRockBlack text-center">
        <p class="footer-links">
            <a href="/about">About</a>
            <a href="/blog">Blog</a>
            <a href="/companyContact">Contact</a>
            <a href="/legal">Legal</a>
        </p>
        <p class="footer-company-name">&copy; Copyright 2018, Advenure Innovation, Inc. All rights reserved.</p>
    </footer>
        
    </body>
</html>
