@extends('layout')

@section('head')

    <style>
        
        
       #c1 {
            background-image: url({{ URL::asset('/images/s3.amazonaws.com_upload.uxpin_files_272217_618567_feet-morning-adventure-camping-2.jpg')}});
            background-repeat: no-repeat;
            background-size: cover;
            padding: 10%;
        }
        
    </style>
    <script>
        $(document).on("click", "#b2", function(){
            $('html, body').animate({
                scrollTop: $("#f1").offset().top
            }, 500);
        });
//		$(document).ready(function(){ 
//			$("#guide").on("click", function(){
//			$("#btlog").text("Login as a guide")
//			});
//		
//			$("#company").on("click", function(){
//			$("#btlog").text("Login as a company")
//			});
//		}); 
		
    </script>
@stop

@section('body')
<!-- First Container -->
<div id="c1" class="container-fluid text-center white">
    <h1 class="white">Easy, Organized, and Secure</h1>
    <h4 class="log-book">~ Log books for any adventure ~</h4>
	 <a href="/login" id="b1" class="btn btn-danger " role="button" aria-pressed="true">Get Yours Started</a>

</div>

<!-- Second Container -->
<div id="c2" class="container-fluid text-center backgroundSeaBlue">
    <h3>Our new on-line platform lets guides complete all their daily logs and reports from their smartphone in the field or from their computer once back from a trip. Guides content is then forwarded to operational managers or promoted to other potential employers. With a host of benefits and features be the first to upgrade and join the new adventure network. </h3>
    
    <a id="b2" role="button" class="btn check-account"><h4><strong>&#9661;&nbsp;&nbsp;&nbsp;To learn more check which account is for you below&nbsp;&nbsp;&nbsp;&#9661;</strong></h4></a>
    
    <div id="f1">
    <ul class="nav nav-tabs col-md-10">
        <li id ="guide" class="col-md-6 active"><a data-toggle="tab" href="#t1"><h2>Guide Features</h2></a></li>
        <li id = "company" class="col-md-6"><a data-toggle="tab" href="#t2"><h2>Company Features</h2></a></li>
    </ul>
    </div>
</div>

<!-- Third Container -->
<div id="c3" class="container-fluid text-center" style="background-color: #e6e6e6;">
    <div class="tab-content col-md-8 col-md-offset-2">
        <div id="t1" class="tab-pane fade in active">
            <div style="text-align: center;  margin: 20px auto;">
                <a href="/login" class="btn btn-primary" id ="btlog">Login as a guide</a>
            </div>
            <ul class="list-group row">
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Access anywhere around the world</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-desktop" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Fast and easy to use</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Add pictures, videos or documents</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Customizable log templates</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Pre-built log and report templates</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Information protection</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Liability protection</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Build your own guide portfolio</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-search" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Apply for jobs</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Acces the Adventure Community</h4></li>
            </ul>
        </div>
        <div id="t2" class="tab-pane fade">
            <div style="text-align: center; margin: 20px">
                <a href="/companyLogin" class="btn btn-primary">Login as a company</a>
            </div>
            <ul class="list-group row">
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;All guides granted log books</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-desktop" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Track completed logs</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-bell" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Instantly report notifications</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Ability to save and trend specific data</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Information protection</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Liability protection</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Build your company profile</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Post job applications</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-magic" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Scheduling and auto update</h4></li>
                <li class="list-group-item col-xs-6"><h4><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Access to the Adventure Community</h4></li>
            </ul>
        </div>
    </div>
</div>

@stop
