<div class="panel panel-default">
    <div class="panel-body bg-primary">

    {!! Form::open(array('url' => 'foo/bar')) !!}
    <!-- conditions checkboxes -->

        <div class="container">
           <div class="row">
              <div class="col-sm-6">
                  @include('logs.partial.base-section1-partial')
              </div>
               <div class="col-sm-6">
                   @include('logs.partial.weather-partial')
               </div>
           </div>
        </div>

    {!! Form::close() !!}

    </div>
</div>