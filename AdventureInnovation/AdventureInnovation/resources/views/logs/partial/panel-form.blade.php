<div class="container">
    <div class="row">
    {!! Form::open(array('url' => '#', 'files' => 'true')) !!}

    <!-- conditions checkboxes -->
        <div class="row text-center"><h1>Template Title</h1></div>

        <div class="container">

            <!--  Base template -->


            <div class="row">
                <div class="col-sm-6">
                    @include('logs.partial.base-section1-partial')
                </div>
                <div class="col-sm-6">
                    @include('logs.partial.weather-partial')
                </div>
            </div>


            <!--  Type specific template -->
            <div class="row">
                <div class="col-sm-12">
                    @include('logs.partial.kayaking-partial')
                </div>
            </div>


            <!--  customizations -->
            <div class="row">
                <div class="col-sm-12">
                    @include('logs.partial.customization-partial')
                </div>

            </div>

        </div>

        {!! Form::close() !!}
    </div>

    <div class="row">
        <div style="margin:0 auto">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class='btn-group'>
                        <button class='btn btn-primary' id='load-template-button'>Load Template</button>
                        <button class='btn btn-primary' id='clear-template-button'>Clear Template</button>
                        <button class='btn btn-primary' id='save-template-button'>Save Template</button>
                        <button class='btn btn-primary' id='edit-template-button'>Edit Template</button>
                        <button class='btn btn-success' id='add-new-row'>Add Row</button>
                        <button class='btn btn-danger' id='save-log-button'>Save Log</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
