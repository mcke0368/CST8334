@extends('layoutGuide')

@section('headGuide')
    <link rel="stylesheet" href="{{ URL::asset('slick/slick.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('slick/slick-theme.css') }}"/>
    <script>tinymce.init({
            selector: 'textarea',
            plugins: "lists"
        });</script>
    <script>
        $(document).on("click", "#b2", function () {
            $('html, body').animate({
                scrollTop: $("#f1").offset().top
            }, 500);
        });
    </script>

    <script type="text/javascript" src="{{ URL::asset('slick/slick.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(function () {
                $("#bio-modal").load("{{ asset('../resources/modals/edit-bio-modal.html') }}",
                    function (response, status, xhr) {
                        if (status == "error") {
                            var msg = "Sorry but there was an error: ";
                            $("#error").html(msg + xhr.status + " " + xhr.statusText);
                        }
                    });
                $("#cert-modal").load("{{ asset('../resources/modals/edit-cert-modal.html') }}");
                $("#work-modal").load("{{ asset('../resources/modals/edit-work-modal.html') }}");
                $("#emp-modal").load("{{ asset('../resources/modals/edit-emp-modal.html') }}");
                $("#edu-modal").load("{{ asset('../resources/modals/edit-edu-modal.html') }}");
                $("#training-modal").load("{{ asset('../resources/modals/edit-training-modal.html') }}");
                $("#refer-modal").load("{{ asset('../resources/modals/edit-refer-modal.html') }}");
                $("#contact-modal").load("{{ asset('../resources/modals/edit-contact-modal.html') }}");
                $("#profile-pic-modal").load("{{ asset('../resources/modals/edit-profile-pic-modal.html') }}");
            });
        });
    </script>

@stop

@section('bodyGuide')

    <div id="c1" class="container-fluid">
        <div class="col-xs-4 panel panel-default col-xs-offset-1 col-no-padding">
            <div id="name-panel" class="panel-heading">
                <h4>{{$firstname}}</h4>
            </div>
            <div class="panel-body">
                <div id="badge-block">
                    <a href="#" class="inline-block badge purple-badge">Sea Kayaking</a>
                    <a class="inline-block badge orange-badge">Rock Climbing</a>
                    <a class="inline-block badge red-badge">Scuba</a>
                </div>
                <a data-toggle="modal" href="#edit-profile-pic-modal"><i class="fa fa-pencil-square-o edit-pencil pencil-activity"></i></a>
                                                                        
                <!-- Add in the edit-bio-modal -->
                <div id="profile-pic-modal"></div>
                <div><img class="img-thumbnail" id="profile-img" src="{{ asset('images/11.png') }}"></div>
            </div>
            
                <div class="panel-heading"><h4><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Contact Me!
                    </h4>
                </div>
                <div class="panel-body">
                    <a data-toggle="modal" data-target="#emp-modal" href="#emp-modal"><i
                                class="fa fa-pencil-square-o edit-pencil" aria-hidden="true"></i></a>

                    <!-- Add in the edit-bio-modal -->
                    <div id="contact-modal"></div>
                    <div><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: {{$email}}</div>
                    <div>
                        {!! Form::open(array('route' => 'videos.store')) !!}
                        {{Form::label('PhoneL','phone :')}}
                        {{Form::text('phoneNr', empty($user) ? null : $user->phone, array('class' => 'form-control', 'required' => 'required'))}}
                        {{Form::label('YoutubeL','YouTube URL :')}}
                        {{Form::text('Youtube_URL', empty($video) ? null : $video->Youtube_URL, array('class' => 'form-control', 'required' => 'required'))}}
                        {{Form::label('Facebook','Facebook Link:')}}
                        {{Form::text('Facebook_URL', empty($video) ? null : $social_media->Facebook_URL, array('class' => 'form-control','required' => 'required'))}}
                        {{Form::label('Twitter','Twitter Link:')}}
                        {{Form::text('Twitter_URL',empty($video) ? null : $social_media->Twitter_URL,array('class' => 'form-control','required' => 'required'))}}
                        {{Form::label('Instagram','Instagram Link:')}}
                        {{Form::text('Instagram_URL', empty($social_media) ? null : $social_media->Instagram_URL, array('class' => 'form-control','required' => 'required'))}}
                        {!! Form::close() !!}
                    </div>
                </div>                  
                
                
                <div class="panel-heading">
                    <h4><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Social Media
                    </h4>
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
                        <a data-toggle="modal" href="#edit-bio-modal"><i class="fa fa-pencil-square-o edit-pencil"
                aria-hidden="true"></i></a>
                        <!-- Add in the edit-bio-modal -->
                        <div id="bio-modal"></div>

                        <div class="panel-body">
                        <textarea id="tiny-about">
                        <?php echo $guide->about; ?>
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
                            <button class="btn float-left edit-btn edit-btn" data-toggle="modal"
                                    data-target="#edit-cert-modal">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add new certificate!
                            </button>
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
                                    <?php echo $guide->work_experience;?>
                                    </textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Employment History</h4></div>
                                <textarea id="tiny-employment">
                                <?php echo $guide->employment_history; ?>
                                </textarea>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Training/Courses</h4></div>
                                <div class="panel-body training-panel">
                                    <!-- Add in the edit-training-modal -->
                                    <div id="training-modal"></div>
                                    <textarea id="tiny-training">
                                    <?php echo $guide->training;?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="pdf-link">
                                <a href="{{ asset('pdfs/functionalSample.pdf') }}" target="_blank">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i> View
                                    resume as PDF</a>
                            </div>
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
                                <input type="text" class="form-control" id="cert-name"
                                       value="Swiftwater Safety Awareness"></input>
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
    </div>

@stop
