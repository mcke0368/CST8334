<div class="panel panel-default">
    <div class="panel-heading" style="text-align: center; background-color: #54B2C7">
        <h3 class="panel-title">
           Kayaking Section
        </h3>
    </div>

    <div class="panel-body">
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-rapid_class', 'Rapid Class') }}
                {{ Form::select('kayaking-rapid_class',
                    [ 'Class I' => "Class I", 'Class II' => "Class II", 'Class III' => "Class III", 'Class IV' => "Class IV", 'Class V' => "Class V", 'Class VI' => "Class VI" ],
                    'Class I', ['id' => 'kayaking-rapid_class','class' => 'form-control'])
                }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-flow_level', 'Flow Level') }}
                {{ Form::text('kayaking-flow_level', null, array('id' => 'kayaking-flow_level','class' => 'form-control')) }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-launch_site', 'Launch Site') }}
                {{ Form::text('kayaking-launch_site', null, array('id' => 'kayaking-launch_site','class' => 'form-control')) }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('rafting-takeout_site', 'Takeout Site') }}
                {{ Form::text('rafting-takeout_site', null, array('id' => 'kayaking-takeout_site','class' => 'form-control')) }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-distance', 'Distance') }}
                {{ Form::text('kayaking-distance', null, array('id' => 'kayaking-distance','class' => 'form-control'))
                }}
            </div>            <div class="col-sm-2 ">
                {{ Form::label('kayaking-boat_used', 'Boat Used') }}
                {{ Form::text('kayaking-boat_used', null, array('id' => 'kayaking-notes','class' => 'form-control')) }}
            </div>
        </div>

             <!-- Notes -->
        <div class="row"  style="margin-top: 1em">
            <div class="col-sm-12 ">
                <div class="form-group">
                    <label for="kayaking-notes" class="col-form-label">Additional Notes</label>
                    {{ Form::textarea('kayaking-notes', null, array('id' => 'kayaking-notes','class' => 'form-control')) }}
                </div>
            </div>
        </div>
    </div>
</div>