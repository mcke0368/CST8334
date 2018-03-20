<div class="container">

    <div class="row" style="margin-top: 1em">

        <div class="col-sm-1  col-sm-offset-3">
            <label for="weather-temperature" class="col-form-label"><i
                        class="wi wi-thermometer" style="font-size: x-large"></i></label>
        </div>

        <div class="col-sm-2 ">
            {{ Form::text('weather-temperature', null, array('class' => 'form-control')) }}
        </div>
        <div class="col-sm-1  ">
            <label for="weather-wind" class="col-form-label"><i
                        class="wi wi-strong-wind" style="font-size: x-large"></i></label>
        </div>

        <div class="col-sm-2">
            {{ Form::select('weather-wind', ['0' => 'No Wind', '1' => 'Light', '2' => 'Strong'], '0', array('class' => 'form-control')) }}
        </div>


    </div>

    <!-- Notes -->
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="form-group">
                <label for="weather-notes" class="col-form-label">Notes</label>
                {{ Form::textarea('weather-notes', null, array('class' => 'form-control')) }}
            </div>
        </div>
    </div>

</div>
