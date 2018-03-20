<div class="container">

    {!! Form::open(array('url' => 'foo/bar', 'files' => 'true')) !!}
    <!-- conditions checkboxes -->
        <div class="row text-center"><h1>Template Title</h1></div>

        <div class="container">

            <!--  Base template -->

            <div class="row">
                <div class="col-lg-4">
                    {{Form::label('attachement-file', 'Attachement')}}
                    {{Form::file('attachment-file')}}
                </div>

            </div>
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
