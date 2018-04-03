@extends('layoutGuide')

@section('headGuide')
    <link rel="stylesheet" href="{{ URL::asset('slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('slick/slick-theme.css') }}"/>
    <script>
        $(document).on("click", "#b2", function () {
            $('html, body').animate({
                scrollTop: $("#f1").offset().top
            }, 500);
        });
    </script>

    <style>

    </style>

@stop

@section('bodyGuide')

    <div id="c1" class="container-fluid">
        <div class="col-md-5 panel panel-default col-no-padding">
            <div id="name-panel" class="panel-heading">
                <h4> <?php echo $firstname;?>
                	<div class="col-no-padding pull-right">
            			<a href="{{ url('profile/edit') }}" class="edit-profile"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
	        		</div>
	        	</h4>               
            </div>
          
            <div class="panel-body">
                <div id="badge-block">
                    <a href="#" class="inline-block badge purple-badge">Sea Kayaking</a>
                    <a href="#" class="inline-block badge orange-badge">Rock Climbing</a>
                    <a href="#" class="inline-block badge red-badge">Scuba</a>
                </div>
                <div><img class="img-thumbnail" id="profile-img" src="{{ asset('images/11.png') }}"></img></div>
            </div>
          
			<div class="panel-heading"><h4><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Contact Me!
				</h4>
			</div>
			<div class="panel-body">
				<div><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: {{ $user->email }}
				</div>
				<div><i class="fa fa-phone" aria-hidden="true"></i> Phone: {{ $user->phone }}
				</div>

				<div class="fa-3x row">
					<div class="col-xs-1">
						<a href="{{ ($social_media != null) ? $social_media->Twitter_URL : ""}}" data-toggle="tooltip" data-placement="left" title="Twitter">
						<i class="fa fa-twitter social-icons" aria-hidden="true"></i>
					</a>
					</div>
					<div class="col-xs-1">
						<a href="{{ ($social_media != null) ? $social_media->Instagram_URL : ""}}" data-toggle="tooltip" data-placement="top" title="Instagram">
						<i class="fa fa-instagram social-icons" aria-hidden="true"></i>
						</a>
					</div>
					<div class="col-xs-1">
						<a href="{{ ($social_media != null) ? $social_media->Facebook_URL : ""}}" data-toggle="tooltip" data-placement="top" title="Facebook">
						<i class="fa fa-facebook-official social-icons" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
            
			<div class="panel-heading">
				<h4><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Youtube Videos</h4>
			</div>

			<div>

			   <?php
				// TODO store this converter function somewhere other than inline
				function convertYoutube($string)
				{
					return preg_replace(
						"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
						"<iframe width=\"100%\" height=\"350\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
						$string);
				}
				$user = Auth::user();

				if ($user->videos()->count() > 0) {
					$Raw_Youtube_link = $user->videos()->first()->Youtube_URL;
					$Youtube_link = convertYoutube($Raw_Youtube_link);
					echo $Youtube_link;
				}
				?>
			</div>
                @component('logBookScroll')
                    @slot('title')
                        Logbook History
                    @endslot
                    @slot('bannerColour')
                        #523E3A
                    @endslot
                @endcomponent
        </div>



        <div class="col-md-7 no-padding-right">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <h4><i class="fa fa-user" aria-hidden="true"></i> About Me</h4>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php echo $guide->about; ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                <h4><i class="fa fa-certificate" aria-hidden="true"></i> Certifications</h4>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach ($certs as $cert)
                                    <li class="list-group-item">
                                        <div style="overflow:hidden">
                                            <h4>{{ $cert->cert_name }}</h4>
                                            <a href="<?php echo 'http://localhost/pdfs/' . $cert->cert_link;?>"
                                               class="btn btn-info float-right" role="button">Download Certificate</a>
                                        </div>
                                        <div>
                                            <div class="small">
                                                <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
                                                Expiry Date: {{ $cert->cert_expiry }}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                <h4><i class="fa fa-file-text" aria-hidden="true"></i> Resume</h4>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Work Experience</h4></div>
                                <div class="panel-body work-exp-panel">
                                    <div class="exp-panel">
                                        {{ $guide->work_experience }}
                                    </div>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Employment History</h4></div>
                                <div class="panel-body emp-his-panel">
                                    <?php echo $guide->employment_history; ?>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Training/Courses</h4></div>
                                <div class="panel-body training-panel">
                                    <?php echo $guide->training;?>
                                </div>
                            </div>
                            <div class="pdf-link"><a
                                        href="{{ asset('pdfs/functionalSample.pdf') }}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> View resume as PDF</a></div>
                        </div>
                    </div>
                </div>
				
			<div class="carousel slide" data-interval="false" id="carousel1">
				<ol class="carousel-indicators">
					<li  data-target="#carousel1" data-slide-to="0"></li>
					<li  data-target="#carousel1" data-slide-to="1"></li>
					<li  data-target="#carousel1" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active img-responsive">
						<img src="{{ asset('images/adventure_sport.jpg') }}">
						
					</div>
					<div class="item img-responsive">
						<img src="{{ asset('images/1200px-Kayakersview.jpg') }}">			
					</div>
					<div class="item img-responsive">
						<img src="{{ asset('images/11.png') }}">
					</div>				
				</div>
				<a href="#carousel1" class="left carousel-control" data-slide="prev">
					<span id ="icon-left" class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#carousel1" class="right carousel-control" data-slide="next">
					<span id ="icon-left" class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			             
            </div>
        </div>
        <!-- <div class="col-md-1 col-no-padding">
            <a href="{{ url('profile/edit') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
        </div> -->

        <script type="text/javascript" src="{{ URL::asset('slick/slick.min.js') }}"></script>
        
    </div>



@stop
