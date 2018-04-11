<div class="panel panel-default">
    <div class="panel-heading text-center" style="background-color: #54B2C7">
        <h3 class="panel-title">
            Weather Section
        </h3>
    </div>

    <div class="panel-body">

        <div class="row">

            <div class="col-sm-1 col-sm-offset-3">
                <label for="weather_conditions_sunny class=" class="col-form-label"><i class="wi wi-day-sunny wi-size"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_sunny', 'on',
                    (isset($base_log) && strpos($base_log->weather_conditions, 'sunny') !== false),
                    array('id' => 'weather_conditions_sunny','class' => 'form-control'))
                }}
            </div>

            <div class="col-sm-1 col-sm-offset-1">
                <label for="weather_conditions_partlycloudy" class="col-form-label"><i class="wi wi-day-cloudy wi-size"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_partlycloudy', 'on',
                    (isset($base_log) && strpos($base_log->weather_conditions, 'partlycloudy') !== false),
                    array('id' => 'weather_conditions_partlycloudy','class' => 'form-control'))
                }}
            </div>

        </div>

        <div class="row">

            <div class="col-sm-1  col-sm-offset-3">
                <label for="weather_conditions_cloudy" class="col-form-label"><i class="wi wi-cloudy wi-size"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_cloudy', 'on',
                    (isset($base_log) && strpos($base_log->weather_conditions, 'cloudy') !== false),
                    array('id' => 'weather_conditions_cloudy', 'class' => 'form-control'))
                }}
            </div>

            <div class="col-sm-1 col-sm-offset-1">
                <label for="weather_conditions_snow" class="col-form-label"><i class="wi wi-snow wi-size"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_snow', 'on',
                    (isset($base_log) && strpos($base_log->weather_conditions, 'snow') !== false),
                    array('id' => 'weather_conditions_snow','class' => 'form-control'))
                }}

            </div>

        </div>

        <div class="row">

            <div class="col-sm-1  col-sm-offset-3">
                <label for="weather_conditions_lightning" class="col-form-label"><i class="wi wi-storm-showers wi-size"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_lightning', 'on',
                    (isset($base_log) && strpos($base_log->weather_conditions, 'lightning') !== false),
                    array('id' => 'weather_conditions_lightning','class' => 'form-control'))
                }}
            </div>

            <div class="col-sm-1 col-sm-offset-1">
                <label for="weather_conditions_raining" class="col-form-label"><i class="wi wi-rain wi-size"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_raining', 'on',
                    (isset($base_log) && strpos($base_log->weather_conditions, 'raining') !== false),
                    array('id' => 'weather_conditions_raining','class' => 'form-control'))
                }}

            </div>

        </div>
        <!-- temp, wind input -->

        <div class="row" style="margin-top: 1em">

            <div class="col-sm-1  col-sm-offset-3">
                <label for="weather_temp" class="col-form-label"><i
                            class="wi wi-thermometer wi-size"></i></label>
            </div>

            <div class="col-sm-2 ">
                {{ Form::number('weather_temperature',
                    isset($base_log) ? $base_log->weather_temp : null,
                    array('id' => 'weather_temp','class' => 'form-control', 'placeholder' => '&#176;C'))
                }}
            </div>
            <div class="col-sm-1  ">
                <label for="weather_wind" class="col-form-label"><i
                            class="wi wi-strong-wind wi-size"></i></label>
            </div>

            <div class="col-sm-2">
                {{ Form::select('weather_wind',
                    [ 'None' => 'None', '5-10 km/h' => '5-10 km/h', '10-20 km/h' => '10-20 km/h', '20-30 km/h' => '20-30 km/h',
                      '30-40 km/h' => '30-40 km/h', '40-50 km/h' => '40-50 km/h', '50-60 km/h' => '50-60 km/h',
                      '6' => '60-70 km/h', '6' => '70-80 km/h', '8' => 'Over 80 km/:h'],
                    isset($base_log) ? $base_log->weather_wind : 'None',
                    array('id' => 'weather_wind','class' => 'form-control'))
                }}
            </div>


        </div>

        <!-- Notes -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="form-group">
                    <label for="weather_notes" class="col-form-label">Weather Notes</label>
                    {{ Form::textarea('weather_notes',
                        isset($base_log) ? $base_log->weather_notes : 'None',
                        array('id' => 'weather_notes', 'class' => 'form-control'))
                    }}
                </div>
            </div>
        </div>

    </div>
</div>
