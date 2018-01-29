@extends('layoutGuide')

@section('headGuide')
<link rel="stylesheet" href="{{ URL::asset('slick/slick.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('slick/slick-theme.css') }}" />
<script>tinymce.init({ selector:'textarea',
                            plugins: "lists" });</script>
<script>
        $(document).on("click", "#b2", function(){
            $('html, body').animate({
                scrollTop: $("#f1").offset().top
            }, 500);
        });
</script>

<script> 
    $(function(){
      $("#bio-modal").load("{{ asset('../resources/modals/edit-bio-modal.html') }}");
      $("#cert-modal").load("{{ asset('../resources/modals/edit-cert-modal.html') }}");
      $("#work-modal").load("{{ asset('../resources/modals/edit-work-modal.html') }}");
      $("#emp-modal").load("{{ asset('../resources/modals/edit-emp-modal.html') }}");
      $("#edu-modal").load("{{ asset('../resources/modals/edit-edu-modal.html') }}");
      $("#training-modal").load("{{ asset('../resources/modals/edit-training-modal.html') }}");
      $("#refer-modal").load("{{ asset('../resources/modals/edit-refer-modal.html') }}");
      $("#contact-modal").load("{{ asset('../resources/modals/edit-contact-modal.html') }}");
      $("#profile-pic-modal").load("{{ asset('../resources/modals/edit-profile-pic-modal.html') }}");
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

    .edit-btn{
        background-color: #337ab7;
        color: white;
    }

    .edit-pencil{
        float: right;
        font-size: 20px;
        vertical-align: middle;
        margin: 10px;
    }

    .float-right{
        float: right;
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

    .modal-header{
        background-color: #d9534f;
        color: white;
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
        <a data-toggle="modal" href="#edit-profile-pic-modal"><i class="fa fa-pencil-square-o edit-pencil" aria-hidden="true"></i></a>
        <!-- Add in the edit-bio-modal -->
        <div id="profile-pic-modal"></div>
        <div><img id="profile-img" src="{{ asset('images/11.png') }}"></div>
    </div>
    <div class="panel panel-default panel-no-margin">
            <div class="panel panel-heading"><h4><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Contact Me!</h4></div>
            <div class="panel panel-body panel-no-margin">
                <a data-toggle="modal" href="#edit-contact-modal"><i class="fa fa-pencil-square-o edit-pencil" aria-hidden="true"></i></a>
                <!-- Add in the edit-bio-modal -->
                <div id="contact-modal"></div>
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
                            <h4><i class="fa fa-user" aria-hidden="true"></i> About Me </h4>
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <!-- Trigger the modal with an href -->
                    <a data-toggle="modal" href="#edit-bio-modal"><i class="fa fa-pencil-square-o edit-pencil" aria-hidden="true"></i></a>
                    <!-- Add in the edit-bio-modal -->
                    <div id="bio-modal"></div>

                    <div class="panel-body">
                        <textarea id="tiny-about">
                        <?php echo $guide[0]->about; ?>
                        </textarea>
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
                    <div class="panel-body" id="edit-cert">    
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
                        <button class="btn float-left edit-btn edit-btn" data-toggle="modal" data-target="#edit-cert-modal">
                        <i class="fa fa-plus" aria-hidden="true"></i>  Add new certificate!</button>
                        <!-- Add in the edit-bio-modal -->
                        <div id="cert-modal"></div>
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
                                    <textarea id="tiny-work">
                                    <?php echo $guide[0]->work_experience;?> 
                                    </textarea>   
                                    </div> 
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Employment History</h4></div>
                                <textarea id="tiny-employment">
                                <?php echo $guide[0]->employment_history; ?>
                                </textarea>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Training/Courses</h4></div>
                                <div class="panel-body training-panel">
                                    <!-- Add in the edit-training-modal -->
                                    <div id="training-modal"></div>
                                    <textarea id="tiny-training">
                                    <?php echo $guide[0]->training;?>
                                    </textarea>
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
        <a href="{{ url('profile') }}"><i class="fa fa-check" aria-hidden="true"></i> Finished Editing</a>
    </div>
    <button type="button" class="btn btn-primary" id="send-all-data">Update</button>
    <!-- Modal -->
    <div id="edit-cert-modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" 
                       data-dismiss="modal">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Edit Certification</h4>
                </div>
                
                <!-- Modal Body -->
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="cert-name">Certification: </label>
                            <input type="text" class="form-control" id="cert-name" value="Swiftwater Safety Awareness"></input>
                        </div>
                        <div class="form-group">
                            <label for="cert-exp-date">Expiry Date: </label>
                            <input type="date" class="form-control" id="cert-exp-date"></input>
                        </div>
                        <div class="form-group">
                            <label for="cert-pdf">Upload Cerificate PDF</label>
                            <input type="file" name="cert-pdf" id="cert-pdf">
                        </div>
                    </form>     
                </div>
                
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">
                                Close
                    </button>
                    <button type="button" class="btn btn-primary" id="cert-button">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
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
