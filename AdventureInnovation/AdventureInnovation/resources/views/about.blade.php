@extends('layout')

@section('head')
	<style type="text/css">
		.jumbotron{
			 background-image: url('http://localhost/adventureinnovation/public/images/kayaking-1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 450px;
            color: White;
		}
		.about-page-text{
			font-weight: bold;
			color: white;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".nav-item:first").addClass("active");
		});
	</script>
@stop
	
@section('body')
	<div class="jumbotron text-center about-page-text vertical-align padding-bottom: 0px">
	  <h1>About Adventure Innovation</h1>
	</div>
	<div class="container padding-top: 0px; text-center">
		<div class="row text-center" style="padding: 2px; background-color:grey; padding: 10px">
			<div class="col-sm-12 bg-primary" style="padding: 20px">
				Log books to adventure guides and companies are like daily vitamins. They help you grow, make you stronger and become critical for you in the future.
			</div>
			
		</div>
		<div class="row container" style="border-bottom: 2px solid black">
			<div class="row text-center" style="margin-top:15px;">
				<p>
					Working as a guide in the industry for many years, I was no stranger to the joys and pains, logbooks can bring. However the truth is, the way the industry handles and facilitates them is extremely flawed. 
				</p>
			</div>
			<div class="row text-left">
				<ul style="list-style: none;">
					<li><span class="glyphicon glyphicon-remove-circle"></span> Difficulty transferring, adding, and copying content</li>
					<li><span class="glyphicon glyphicon-remove-circle"></span> Hard for employers to monitor or track guides logs</li>
					<li><span class="glyphicon glyphicon-remove-circle"></span> Tedious mentality toward completing logs and reports</li>
					<li><span class="glyphicon glyphicon-remove-circle"></span> Limits the guides and company to use and promote their content</li>
					<li><span class="glyphicon glyphicon-remove-circle"></span> Difficulty tracking and trending information</li>
				</ul>
			</div>
		</div>
		<div class="row text-center"  style="margin-top:15px;border-bottom-style: 1px solid black;">
			<p>Suffice to say this is the digital age and we need to get with the times! After personally accepting the loss of my log book twice, I knew something had to be done! Adventure innovation has built the solution and is growing fast!</p>
		</div>
		<div class="row" style="margin-top:15px; padding: 10px;">
			<div class="col-sm-6" style="">
				<div class="col-sm-12">
					<p>This is our beta platform and we appreciate any user feedback. Please leave a comment, email, or call any time as we look forward to the opportunity to improve and serve you better.</p>
				</div>
				
				<div class="col-sm-12 text-center">
					<button class="btn btn-warning"><a href="contact"> Contact us</a></button>
				</div>
			</div>
			<div class="col-sm-6 bg-primary center-block">
				subscribe to check out our blog for updates and let's build our community!
			</div>
		</div>

	</div>
@stop