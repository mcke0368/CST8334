<div class="panel panel-default">
    <div class="panel-heading" style="text-align: center; background-color: #54B2C7">
        <h3 class="panel-title">
            {{ $activity_name }} Section
        </h3>
    </div>

    <div class="panel-body">
        <div class="row" style="margin-top: 1em">
            <div class="col-sm-2 ">
                {{ Form::label('climbing-type_class', 'Type of Climbings') }}
                {{ Form::select('climbing-type_class',
                    [ 'Top Rope' => "Top Rope", 'Sport Lead' => "Sport Lead", 'Trad Lead' => "Trad Lead", 'Via Feratta' => "Via Feratta" ],
                    isset($activity_log) ? $activity_log->takeout_site : null,
                    ['id' => 'climbing-type_class','class' => 'form-control'])
                }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('climbing-hight_class', 'Height') }}
                {{ Form::text('climbing-hight_class', null, array('id' => 'climbing-hight_class','class' => 'form-control')) }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('climbing-rating-difficulty_class', 'Rating Difficulty') }}
                {{ Form::select('climbing-rating-difficulty_class',
                    [ '5.7 and below' => "5.7 and below", '5.8' => "5.8", '5.9' => "5.9", '5.10' => "5.10", '5.11' => "5.11", '5.12' => "5.12", '5.13' => "5.13", '5.14' => "5.14"],
                    isset($activity_log) ? $activity_log->takeout_site : null,
                    ['id' => 'climbing-rating-difficulty_class','class' => 'form-control'])
                }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('climbing-rating-difficulty_class', 'Level') }}
                {{ Form::select('climbing-rating-difficulty_class',
                    [ 'A' => "A", 'B' =>'B', 'C' => "C", 'D' => "D" ],
                    isset($activity_log) ? $activity_log->takeout_site : null,
                    ['id' => 'climbing-rating-difficulty_class','class' => 'form-control'])
                }}
            </div>
            <div class="col-sm-2 ">
                {{ Form::label('climbing-multi-pitch_class', 'Multi Pitch') }}
                {{ Form::select('climbing-multi-pitch_classs',
                    [ 'yes' => "Yes", 'no' =>'No'],
                    isset($activity_log) ? $activity_log->takeout_site : null,
                    ['id' => 'climbing-multi-pitch_class','class' => 'form-control'])
                }}
            </div>

        </div>

        <!-- Notes -->
        <div class="row"  style="margin-top: 1em">
            <div class="col-sm-12 ">
                {{ Form::label(' climbing-conidtion_class', 'Climbing Condition') }}
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_Granit" class="col-form-label">Granit</label>
                        </div>
                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_Granit', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'Granit') !== false),
                                array('id' => 'climbing_conditions_Granit','class' => 'form-control'))
                            }}
                        </div>
                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_Limestone" class="col-form-label">Limestone</label>
                        </div>
                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_Limestone', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'Limestone') !== false),
                                array('id' => 'climbing_conditions_Limestone','class' => 'form-control'))
                            }}
                        </div>

                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_Sandstone" class="col-form-label">Sandstone</label>
                        </div>
                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_Sandstone', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'Sandstone') !== false),
                                array('id' => 'climbing_conditions_Sandstone','class' => 'form-control'))
                            }}
                        </div>

                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_Ice" class="col-form-label">Ice</label>
                        </div>
                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_Ice', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'Ice') !== false),
                                array('id' => 'climbing_conditions_Ice','class' => 'form-control'))
                            }}
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_Solid" class="col-form-label">Solid</label>
                        </div>
                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_Solid', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'Solid') !== false),
                                array('id' => 'climbing_conditions_Solid','class' => 'form-control'))
                            }}
                        </div>

                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_Loose" class="col-form-label">Loose</label>
                        </div>
                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_Loose', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'Loose') !== false),
                                array('id' => 'climbing_conditions_Loose','class' => 'form-control'))
                            }}
                        </div>

                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_Wet" class="col-form-label">Wet</label>
                        </div>
                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_Wet', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'Wet') !== false),
                                array('id' => 'climbing_conditions_Wet','class' => 'form-control'))
                            }}
                        </div>

                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_Dry" class="col-form-label">Dry</label>
                        </div>

                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_Dry', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'Dry') !== false),
                                array('id' => 'climbing_conditions_Dryt','class' => 'form-control'))
                            }}
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_NewBolts" class="col-form-label">New Bolts</label>
                        </div>
                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_NewBolts', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'New Bolts') !== false),
                                array('id' => 'climbing_conditions_NewBolts','class' => 'form-control'))
                            }}
                        </div>

                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_OldBolts" class="col-form-label">Old Bolts</label>
                        </div>
                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_OldBolts', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'Old Bolts') !== false),
                                array('id' => 'climbing_conditions_OldBolts','class' => 'form-control'))
                            }}
                        </div>

                        <div class="col-sm-1 col-sm-offset-1">
                            <label for="climbing_conditions_NoBolts" class="col-form-label">No Bolts</label>
                        </div>
                        <div class="col-sm-1 ">
                            {{ Form::checkbox('climbing_conditions_NoBolts', 'on',
                                (isset($activity_log) && strpos($activity_log->climbing_conditions, 'No Bolts') !== false),
                                array('id' => 'climbing_conditions_NodBolts','class' => 'form-control'))
                            }}
                        </div>

                    </div>

            </div>
            <div class="col-sm-12 ">
                <div class="form-group">
                    <label for="climbing-notes_class class="col-form-label">Additional Notes</label>
                    {{ Form::textarea('climbing-notes_classs', null, array('id' => 'climbing-notes_class','class' => 'form-control')) }}
                </div>
            </div>
        </div>
    </div>
</div>