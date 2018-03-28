<div class="panel panel-default">

    <div class="panel-heading text-center " style="background-color: #54B2C7">
        <h3 class="panel-title">
            Base Section
        </h3>
    </div>

    <div class="panel-body">
        <div class="row top-basic-form">
            <div class="col-sm-6 ">
                {{ Form::label('base-1-logtitle', 'Log Title') }}
                {{ Form::text('base-1-logtitle', null, array('class' => 'form-control')) }}
            </div>

            <div class="col-sm-6 ">
                {{ Form::label('base-1-date','Date') }}
                {{ Form::text('base-1-date', null, array('class' => 'form-control', 'placeholder' => 'YYYY-MM-DD')) }}
            </div>
        </div>
        <div class="row top-basic-form">
            <div class="col-sm-6">
                {{ Form::label('base-1-location', 'Location') }}
                {{ Form::text('base-1-location', null, array('class' => 'form-control')) }}
            </div>

            <div class="col-sm-6">
                {{ Form::label('base-1-route', 'Route') }}
                {{ Form::text('base-1-route', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row top-basic-form">
            <div class="col-sm-6 ">
                {{ Form::label('base-1-position', 'Position') }}
                {{ Form::select('base-1-position',
                    ['0' => 'Team Leader', '1' => 'Asst. Team Leader', '2' => 'Instructor', '4' => 'Guide', '5' => 'Training', '6' => 'Personal' ],
                    null, array('class' => 'form-control'))
                }}
            </div>

            <div class="col-sm-6 ">
                {{ Form::label('base-1-company', 'Company') }}
                {{ Form::text('base-1-company', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row top-basic-form">
            <div class="col-sm-6 ">
                {{ Form::label('base-1-starttime', 'Start Time') }}
                {{ Form::text('base-1-starttime', null, array('class' => 'form-control')) }}
            </div>

            <div class="col-sm-6 ">
                {{ Form::label('base-1-endtime', 'End Time') }}
                {{ Form::text('base-1-endtime', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row top-basic-form">
            <div class="col-sm-6 ">
                {{ Form::label('base-1-duration', 'Duration') }}
                {{ Form::text('base-1-duration', null, array('class' => 'form-control')) }}
            </div>

            <div class="col-sm-6 ">
                <div>
                    {{ Form::label('base-1-incident', 'Incident') }}
                </div>
                <div>

                    {{ Form::label('base-1-incident', 'yes') }}
                    {{ Form::radio('base-1-incident', 'yes', array('class' => 'form-control')) }}
                    {{ Form::label('base-1-incident', 'no') }}
                    {{ Form::radio('base-1-incident', 'no', array('class' => 'form-control')) }}
                </div>

            </div>
        </div>
        <div class="row top-basic-form" s>
            <div class="col-sm-6 ">
                {{ Form::label('base-1-nrparticipants', '# of Participants') }}
                {{ Form::text('base-1-nrparticipants', null, array('class' => 'form-control')) }}
            </div>
            <div class="col-sm-6 ">
                {{ Form::label('base-1-grpsize', 'Group Size') }}
                {{ Form::text('base-1-grpsize', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row top-basic-form">
            <div class="col-sm-12">
                {{ Form::label('base-1-leaders', 'Other leaders') }}
                {{ Form::textarea('base-1-leaders', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="row top-basic-form">
            <div class="col-lg-4">
                {{Form::label('attachement-file', 'Attachement')}}
                {{Form::file('attachment-file')}}
            </div>
        </div>
    </div>
</div>
