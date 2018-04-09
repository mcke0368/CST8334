<div class="panel panel-default">

    <div class="panel-heading" style="text-align: center; background-color: #54B2C7">
        <h3 class="panel-title">
            Base Section
        </h3>
    </div>

    <div class="panel-body">
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-6 ">
                {{ Form::label('base-logtitle', 'Log Title') }}
                {{ Form::text('base-logtitle',
                    isset($base_log) ? $base_log->title : null,
                    array('required', 'class' => 'form-control'))
                }}
            </div>

            <div class="col-sm-6 ">
                {{ Form::label('base-date','Date') }}
                {{ Form::date('base-date',
                    isset($base_log) ? date('Y-m-d',strtotime($base_log->start_time )) : \Carbon\Carbon::now(),
                    array('class' => 'form-control'))
                }}
            </div>
        </div>
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-6 ">
                {{ Form::label('base-location', 'Location') }}
                {{ Form::text('base-location',
                    isset($base_log) ? $base_log->location : null,
                    array('class' => 'form-control'))
                 }}
            </div>

            <div class="col-sm-6 ">
                {{ Form::label('base-route', 'Route') }}
                {{ Form::text('base-route',
                    isset($base_log) ? $base_log->route : null,
                    array('class' => 'form-control'))
                }}
            </div>
        </div>
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-6 ">
                {{ Form::label('base-position', 'Position') }}
                {{ Form::select('base-position',
                    ['Team Leader' => 'Team Leader', 'Asst. Team Leader' => 'Asst. Team Leader',
                     'Instructor' => 'Instructor', 'Guide' => 'Guide', 'Training' => 'Training',
                     'Personal' => 'Personal' ],
                    isset($base_log) ? $base_log->position : null,
                    array('class' => 'form-control'))
                }}
            </div>

            <div class="col-sm-6 ">
                {{ Form::label('base-company', 'Company') }}
                {{ Form::text('base-company',
                    isset($base_log) ? $base_log->company : null,
                    array('class' => 'form-control'))
                }}
            </div>
        </div>
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-6 ">
                {{ Form::label('base-start_time', 'Start Time') }}
                {{Form::time('base-start_time',
                    isset($base_log) ? date('H:i', strtotime($base_log->start_time)) : null,
                    array('required', 'class' => 'form-control'))
                }}
            </div>

            <div class="col-sm-6 ">
                {{ Form::label('base-end_time', 'End Time') }}
                {{Form::time('base-end_time',
                    isset($base_log) ? date('H:i', strtotime($base_log->end_time)) : null,
                    array('required', 'class' => 'form-control'))
                }}
            </div>
        </div>
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-6 ">
                {{ Form::label('base-duration', 'Duration') }}
                {{ Form::text('base-duration',
                    isset($base_log) ? $base_log->duration : null,
                    array('class' => 'form-control'))
                }}
            </div>

            <div class="col-sm-6 ">
                <div>
                    {{ Form::label('base-incident', 'Incident') }}
                    {{ Form::select('base-incident',
                        ['0' => 'no', '1' => 'yes'],
                        isset($base_log) ? $base_log->incident : null,
                        array('class' => 'form-control'))
                    }}
                </div>

            </div>
        </div>
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-6 ">
                {{ Form::label('base-number_participants', '# of Participants') }}
                {{ Form::number('base-number_participants',
                    isset($base_log) ? $base_log->number_participants : null,
                    array('min' => 0, 'class' => 'form-control'))
                }}
            </div>
            <div class="col-sm-6 ">
                {{ Form::label('base-group_size', 'Group Size') }}
                {{ Form::number('base-group_size',
                    isset($base_log) ? $base_log->group_size: null,
                    array('min' => 0, 'class' => 'form-control'))
                }}
            </div>
        </div>
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-12">
                {{ Form::label('base-other_leaders', 'Other leaders') }}
                {{ Form::textarea('base-other_leaders',
                    isset($base_log) ? $base_log->other_leaders : null,
                    array('class' => 'form-control'))
                }}
            </div>
        </div>
        <div class="row" style="margin-top: 1em">
            <div class="col-lg-12">
                {{Form::label('attachement-files', 'Attachement')}}
                <input type="file" id="attachments" name="attachement-files[]" multiple/>
                @if (isset($attach))
                    @foreach($attach as $file)
                        <div><a href="{{ route('logbook-download-attachment', ['attach_id'=>$file->id]) }}">{{$file->original_name}}</a></div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
