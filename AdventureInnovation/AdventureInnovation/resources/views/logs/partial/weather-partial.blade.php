<div class="panel panel-default">
    <div class="panel-heading text-center" style="background-color: #54B2C7">
        <h3 class="panel-title">
            Weather Section
        </h3>
    </div>

    <div class="panel-body">

        <div class="row">

            <div class="col-sm-1 col-sm-offset-3">
                <label for="weather-sunny class=" class="col-form-label"><i class="wi wi-day-sunny wi-size"
                                                                            ></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather-sunny', 'on', array('class' => 'form-control')) }}
            </div>

            <div class="col-sm-1 col-sm-offset-1">
                <label for="weather-partlycloudy" class="col-form-label"><i class="wi wi-day-cloudy wi-size">
                                                                            </i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather-partlycloudy', 'on', array('class' => 'form-control')) }}

            </div>

        </div>

        <div class="row">

            <div class="col-sm-1  col-sm-offset-3">
                <label for="weather-cloudy" class="col-form-label"><i class="wi wi-cloudy wi-size"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather-cloudy', 'on', array('class' => 'form-control')) }}
            </div>

            <div class="col-sm-1 col-sm-offset-1">
                <label for="weather-snow" class="col-form-label"><i class="wi wi-snow wi-size"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather-snow', 'on', array('class' => 'form-control')) }}

            </div>

        </div>

        <div class="row">

            <div class="col-sm-1  col-sm-offset-3">
                <label for="weather-lightning" class="col-form-label"><i class="wi wi-storm-showers wi-size"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather-lightning', 'on', array('class' => 'form-control')) }}
            </div>

            <div class="col-sm-1 col-sm-offset-1">
                <label for="weather-raining" class="col-form-label"><i class="wi wi-rain wi-size"></i></label>
            </div>
            <div class="col-sm-1 ">
                {{ Form::checkbox('weather-raining', 'on', array('class' => 'form-control')) }}

            </div>

        </div>
        <!-- temp, wind input -->

        <div class="row" style="margin-top: 1em">

            <div class="col-sm-1  col-sm-offset-3">
                <label for="weather-temperature" class="col-form-label">
                    <i class="wi wi-thermometer wi-size"></i></label>
            </div>

            <div class="col-sm-2 ">
                {{ Form::text('weather-temperature', null, array('class' => 'form-control', 'placeholder' => '&#176;C')) }}
            </div>
            <div class="col-sm-1  ">
                <label for="weather-wind" class="col-form-label"><i
                            class="wi wi-strong-wind wi-size"></i></label>
            </div>

            <div class="col-sm-2">
                {{ Form::select('weather-wind', ['0' => 'Calm', '1' => 'Light', '2' => 'Strong'], '0', array('class' => 'form-control')) }}
            </div>


        </div>

        <!-- Notes -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="form-group">
                    <label for="weather-notes" class="col-form-label">Weather Notes</label>
                    {{ Form::textarea('weather-notes', null, array('class' => 'form-control')) }}
                </div>
            </div>
        </div>

    </div>
</div>