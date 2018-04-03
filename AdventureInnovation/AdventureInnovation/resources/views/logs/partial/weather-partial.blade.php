<div class="panel panel-default">
    <div class="panel-heading" style="text-align: center; background-color: #54B2C7">
        <h3 class="panel-title">
            Weather Section
        </h3>
    </div>

    <div class="panel-body">

        <div class="row">

            <div class="col-sm-1 col-sm-offset-3">
                <label for="weather_conditions_sunny class=" class="col-form-label"><i class="wi wi-day-sunny"
                                                                            style="font-size: x-large"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_sunny', 'on', false, array('id' => 'weather_conditions_sunny','class' => 'form-control')) }}
            </div>

            <div class="col-sm-1 col-sm-offset-1">
                <label for="weather_conditions_partlycloudy" class="col-form-label"><i class="wi wi-day-cloudy"
                                                                            style="font-size: x-large"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_partlycloudy', 'on', false, array('id' => 'weather_conditions_partlycloudy','class' => 'form-control')) }}

            </div>

        </div>

        <div class="row">

            <div class="col-sm-1  col-sm-offset-3">
                <label for="weather_conditions_cloudy" class="col-form-label"><i class="wi wi-cloudy"
                                                                      style="font-size: x-large"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_cloudy', 'on', false, array('id' => 'weather_conditions_cloudy', 'class' => 'form-control')) }}
            </div>

            <div class="col-sm-1 col-sm-offset-1">
                <label for="weather_conditions_snow" class="col-form-label"><i class="wi wi-snow"
                                                                    style="font-size: x-large"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_snow', 'on', false, array('id' => 'weather_conditions_snow','class' => 'form-control')) }}

            </div>

        </div>

        <div class="row">

            <div class="col-sm-1  col-sm-offset-3">
                <label for="weather_conditions_lightning" class="col-form-label"><i class="wi wi-storm-showers"
                                                                         style="font-size: x-large"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_lightning', 'on', false, array('id' => 'weather_conditions_lightning','class' => 'form-control')) }}
            </div>

            <div class="col-sm-1 col-sm-offset-1">
                <label for="weather_conditions_raining" class="col-form-label"><i class="wi wi-rain"
                                                                       style="font-size: x-large"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather_conditions_raining', 'on', false, array('id' => 'weather_conditions_raining','class' => 'form-control')) }}

            </div>

        </div>
        <!-- temp, wind input -->

        <div class="row" style="margin-top: 1em">

            <div class="col-sm-1  col-sm-offset-3">
                <label for="weather_temperature" class="col-form-label"><i
                            class="wi wi-thermometer" style="font-size: x-large"></i></label>
            </div>

            <div class="col-sm-2 ">
                {{ Form::number('weather_temperature', null, array('id' => 'weather_temperature','class' => 'form-control', 'placeholder' => '&#176;C')) }}
            </div>
            <div class="col-sm-1  ">
                <label for="weather_wind" class="col-form-label"><i
                            class="wi wi-strong-wind" style="font-size: x-large"></i></label>
            </div>

            <div class="col-sm-2">
                {{ Form::select('weather_wind',
                    [ 'None' => 'None', '5-10 km/h' => '5-10 km/h', '10-20 km/h' => '10-20 km/h', '20-30 km/h' => '20-30 km/h',
                      '30-40 km/h' => '30-40 km/h', '40-50 km/h' => '40-50 km/h', '50-60 km/h' => '50-60 km/h',
                      '6' => '60-70 km/h', '6' => '70-80 km/h', '8' => 'Over 80 km/:h'],
                    'None', array('id' => 'weather_wind','class' => 'form-control'))
                }}
            </div>


        </div>

        <!-- Notes -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="form-group">
                    <label for="weather_notes" class="col-form-label">Weather Notes</label>
                    {{ Form::textarea('weather_notes', null, array('id' => 'weather_notes', 'class' => 'form-control')) }}
                </div>
            </div>
        </div>

    </div>
</div>