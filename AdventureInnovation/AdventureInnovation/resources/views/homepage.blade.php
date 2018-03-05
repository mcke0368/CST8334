@extends('layout')

@section('head')

    <style>
        
        div {
            color: White;
        }
        
       #c1 {
            background-image: url({{ URL::asset('/images/s3.amazonaws.com_upload.uxpin_files_272217_618567_feet-morning-adventure-camping-2.jpg')}});
            background-repeat: no-repeat;
            background-size: cover;
            padding: 10%;
        }
        
        #c1 h1, #c1 h3, #c1 button {
            margin-top: 5%;
        }
        
        h1{
            font-size: 350%;
        } 
        
        #c2, #c3 {
            padding-top: 5%;
            padding-right: 10%;
            padding-left: 10%;
        }
               
        #f1 { 
            width: 100%; 
            overflow: hidden; 
            margin: 0;
        }
        
        #f1 ul { 
            list-style: none; 
            position: relative; 
            float: left; 
            display: block; 
            left: 50%; 
        }
            
        #f1 ul li { 
            position: relative; 
            float: left; 
            display: block; 
            right: 50%;
        }
        
        .nav-tabs {
            border-bottom-color: transparent;
        }
        
        .nav-tabs > li > a {
            margin-left: 10px;
            margin-right: 10px;
        }
        
        #b1 {
            border: none;
            padding-top: 1%;
            padding-bottom: 1%;
            padding-right: 3%;
            padding-left: 3%;            
            margin-top:5%;
        }
        
        #b2 {
            padding: 0;
            border: none;
            background: none;
        }
        
        .list-group li, row li {
            background-color: #e6e6e6;
            border: none;
            text-align: left;
            color: black;
        }

        .login-button{
            margin-bottom:10px;
        }
        
    </style>
    <script>
        $(document).on("click", "#b2", function(){
            $('html, body').animate({
                scrollTop: $("#f1").offset().top
            }, 500);
        });

    </script>


@stop

@section('body')
<!-- First Container -->
<div id="c1" class="container-fluid text-center">
    <h1>Easy, Organized, and Secure</h1>
    <h3 style="margin-top: 1%;">~ Log books for any adventure ~</h3>
    <a href="register" id="b1" class="btn btn-danger btn-lg " role="button" aria-pressed="true">Get Yours Started</a>
    
</div>

<!-- Second Container -->
<div id="c2" class="container-fluid text-center backgroundSeaBlue">
    <h3>Our new on-line platform lets guides complete all their daily logs and reports from their smartphone in the field or from their computer once back from a trip. Guides content is then forwarded to operational managers or promoted to other potential employers. With a host of benefits and features be the first to upgrade and join the new adventure network. </h3>
    
    <button id="b2" type="button" class="btn" style="margin-top:2%; margin-bottom:8%; color:white;"><h4><strong>&#9661;&nbsp;&nbsp;&nbsp;To learn more check which account is for you below&nbsp;&nbsp;&nbsp;&#9661;</strong></h4></button>
    
    <div id="f1">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#t1"><h2>Guide Features</h2></a></li>
        <li><a data-toggle="tab" href="#t2"><h2>Company Features</h2></a></li>
    </ul>
    </div>
</div>

<!-- Third Container -->
<div id="c3" class="container-fluid text-center" style="background-color: #e6e6e6;">
    <div class="tab-content col-md-8 col-md-offset-2">
        <div id="t1" class="tab-pane fade in active">
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

        <div class="btn-group dropup">           
            <button class="dropdown-toggle btn btn-danger btn-lg login-button" data-toggle="dropdown" id="login-menu-home" type="button" aria-haspopup="true" aria-expanded="false">Login your account</button>
            <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="login-menu-home" id="login-item-home">
                <li class="dropdown-item">
                    <div class="btn btn-default btn-xs" type="button">
                        <a href="login" class="login-page">Login as a guide</a>
                    </div> 
                </li>
                <li class="dropdown-item">
                    <div class="btn btn-default btn-xs" type="button">
                        <a href="login" class="login-page">Login as a company</a>
                    </div>
                </li>
            </ul>
            
        </div>

    </div>
</div>

@stop

@section ('script')
<script>
       
    $("#login-menu-home").mouseover(function(){
        $("#login-item-home").show();
        });
    $("#login-menu-home").mouseout(function(){
        $("#login-item-home").hide();
        });
    $("#login-item-home").mouseover(function(){
        $(this).show();
        }); 
    $("#login-item-home").mouseout(function(){
        $(this).hide();
        });
 
   </script>
@endsection
