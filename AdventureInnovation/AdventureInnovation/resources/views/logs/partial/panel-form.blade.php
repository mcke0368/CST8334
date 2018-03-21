<div class="container">


    <div class="row pull-right">
        <div class="col-sm-2">
            <a href="/logbook" class="btn btn-success">Back</a>
        </div>
        <div class="col-sm-2">
            <button id="save-logbook-type-button" class="btn btn-danger">Save</button>
        </div>
        <div class="col-sm-2">
            <button class='btn btn-danger' id="enable-dnd">Enable drag and drop</button>
        </div>
    </div>

{!! Form::open(array('url' => '#', 'files' => 'true')) !!}
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
