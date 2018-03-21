<div class="panel panel-default">
    <div class="panel-heading" style="text-align: center; background-color: #54B2C7">
        <h3 class="panel-title">
           Kayaking Section
        </h3>
    </div>

    <div class="panel-body">
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-rapidclass', 'Rapid Class') }}
                {{ Form::select('kayaking-rapidclass',
                    [ '1' => "Class I", '2' => "Class II", '3' => "Class III", '4' => "Class IV", '5' => "Class V", '6' => "Class VI" ],
                    null, ['class' => 'form-control'])
                }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-company', 'Flow Level') }}
                {{ Form::text('kayaking-company', null, array('class' => 'form-control')) }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-company', 'Company') }}
                {{ Form::text('kayaking-company', null, array('class' => 'form-control')) }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-company', 'Company') }}
                {{ Form::text('kayaking-company', null, array('class' => 'form-control')) }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('kayaking-triptype', 'Trip Type') }}
                {{ Form::select('kayaking-triptype',
                    [ '1' => "Family", '2' => "Sport", '3' => "Raft", '4' => "Expedition" ],
                    null, array('class' => 'form-control'))
                }}
            </div>            <div class="col-sm-2 ">
                {{ Form::label('kayaking-tripnr', 'Trip #') }}
                {{ Form::text('kayaking-tripnr', null, array('class' => 'form-control')) }}
            </div>
        </div>

             <!-- Notes -->
        <div class="row"  style="margin-top: 1em">
            <div class="col-sm-12 ">
                <div class="form-group">
                    <label for="kayaking-notes" class="col-form-label">Additional Notes</label>
                    {{ Form::textarea('kayaking-notes', null, array('class' => 'form-control')) }}
                </div>
            </div>
        </div>
    </div>
</div>