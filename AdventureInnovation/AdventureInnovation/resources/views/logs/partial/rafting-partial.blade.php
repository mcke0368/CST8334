<div class="panel panel-default">
    <div class="panel-heading" style="text-align: center; background-color: #54B2C7">
        <h3 class="panel-title">
            {{ $activity_name }} Section
        </h3>
    </div>

    <div class="panel-body">
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-2 ">
                {{ Form::label('rafting-rapid_class', 'Rapid Class') }}
                {{ Form::select('rafting-rapid_class',
                    [ 'Class I' => "Class I", 'Class II' => "Class II", 'Class III' => "Class III", 'Class IV' => "Class IV", 'Class V' => "Class V", 'Class VI' => "Class VI" ],
                    'Class i', ['id' => 'rafting-rapid_class','class' => 'form-control'])
                }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('rafting-flow_level', 'Flow Level') }}
                {{ Form::text('rafting-flow_level', null, array('id' => 'rafting-flow_level','class' => 'form-control')) }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('rafting-launch_site', 'Launch Site') }}
                {{ Form::text('rafting-launch_site', null, array('id' => 'rafting-launch_site','class' => 'form-control')) }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('rafting-takeout_site', 'Takeout Site') }}
                {{ Form::text('rafting-takeout_site', null, array('id' => 'rafting-takeout_site','class' => 'form-control')) }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('rafting-trip_type', 'Trip Type') }}
                {{ Form::select('rafting-trip_type',
                    [ 'Family' => "Family", 'Sport' => "Sport", 'Raft' => "Raft", 'Expeditin' => "Expedition" ],
                    'Family', array('id' => 'rafting-trip_type','class' => 'form-control'))
                }}
            </div>            <div class="col-sm-2 ">
                {{ Form::label('rafting-trip_number', 'Trip #') }}
                {{ Form::text('rafting-trip_number', null, array('id' => 'rafting-trip_number','class' => 'form-control')) }}
            </div>
        </div>

             <!-- Notes -->
        <div class="row"  style="margin-top: 1em">
            <div class="col-sm-12 ">
                <div class="form-group">
                    <label for="rafting-notes" class="col-form-label">Additional Notes</label>
                    {{ Form::textarea('rafting-notes', null, array('id' => 'rafting-notes','class' => 'form-control')) }}
                </div>
            </div>
        </div>
    </div>
</div>