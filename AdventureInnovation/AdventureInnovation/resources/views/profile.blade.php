@extends('layoutGuide')

@section('headGuide')
<link rel="stylesheet" href="{{ URL::asset('slick/slick.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('slick/slick-theme.css') }}" />
<script>
        $(document).on("click", "#b2", function(){
            $('html, body').animate({
                scrollTop: $("#f1").offset().top
            }, 500);
        });
</script>

<style>
    .inline-block {
        display: inline-block;
    }

    .float-right {
        float: right;
        vertical-align: middle;
    }

    .float-left {
        float: left;
    }

    #c1 {
    }

    #work-experience-panel{
        padding:10px;
    }

    #profile-img{
       margin: 0 auto;
       max-width: 100%;
       max-height: auto;
       padding: 10px;  
       display: block; 
    }
  
    .carousel-container {
    }
    
    .carousel {
        margin: 20px;
        height: 100%;
        vertical-align: middle;
    }

    .carousel img {
        width: 100%;
        height: auto;
        display: inline-block;
        vertical-align: middle;
    }

    .employer-panel{
        margin: 15px;
    }

    .school-panel{
        margin: 15px;
    }

    .emp-his-panel{
    }

    .col-no-padding{
        padding: 0px;
    }

    .panel-no-margin{
        margin: 0px;
    }
    
    .slick-prev:before, .slick-next:before { 
    color: #d9534f;
    }

    .btn {
        background-color: #d9534f;
        color: white;
    }

    .panel-default>.panel-heading {
        background-color: #523E3A;
        color: white;
    }

    .orange-badge{
        background-color: orange;
    }

    .purple-badge{
        background-color: purple;
    }

    .red-badge{
        background-color: red;
    }
    
</style>

@stop

@section('bodyGuide')

<div id="c1" class="container-fluid">
    <div class="col-xs-4 panel panel-default col-xs-offset-1 col-no-padding">
    <div id="name-panel" class="panel panel-heading panel-no-margin">
        <h2> <?php echo $firstname;?></h2>
    </div>
    <div class="panel panel-body panel-no-margin">
        <div id="badge-block">
            <div class="activity-badge inline-block badge badge-primary purple-badge">Sea Kayaking</div>
            <div class="activity-badge inline-block badge badge-primary orange-badge">Rock Climbing</div>
            <div class="activity-badge inline-block badge badge-primary red-badge">Scuba</div>
        </div>
        <div><img id="profile-img" src="{{ asset('images/11.png') }}"></img></div>
    </div>
    <div class="panel panel-default panel-no-margin">
            <div class="panel panel-heading"><h4><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Contact Me!</h4></div>
            <div class="panel panel-body panel-no-margin">
                <div><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: <?php echo $email;?></div>
                <div><i class="fa fa-phone" aria-hidden="true"></i> Phone: 613-323-4124</div>
            </div>
        </div>
</div>
    <div class="col-xs-6">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            <h4><i class="fa fa-user" aria-hidden="true"></i> About Me</h4>
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                    <?php echo $guide[0]->about; ?>
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
                                    <a href="<?php echo 'http://localhost/pdfs/' .$cert->cert_link;?>" class="btn btn-info float-right" role="button">Download Certificate</a>
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
                                        <?php echo $guide[0]->work_experience;?>
                                    </div>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Employment History</h4></div>
                                <div class="panel-body emp-his-panel">
                                <?php echo $guide[0]->employment_history; ?>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Training/Courses</h4></div>
                                <div class="panel-body training-panel">
                                <?php echo $guide[0]->training;?>
                                </div>
                            </div>
                            <div style="margin-top: 10px; text-align: right;"><a href="{{ asset('pdfs/functionalSample.pdf') }}"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> View resume as PDF</a></div>
                    </div>
                </div>
            </div>
            <div class="carousel-container">
                <div class="carousel">
                    <div><img src="{{ asset('images/adventure_sport.jpg') }}" alt="Picture 2"></div>
                    <div><img src="{{ asset('images/1200px-Kayakersview.jpg') }}" alt="Picture 3"></div>
                    <div><img src="{{ asset('images/11.png') }}" alt="Picture 1"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-1 col-no-padding">
            <a href="{{ url('profile/edit') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
    </div>

<script type="text/javascript" src="{{ URL::asset('slick/slick.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.carousel').slick({
        arrows: true,
        autoPlay: true
    });
});
</script>
</div>



@stop
