@extends('logs.layoutLogbook')

@section('headLogbook')
    
    <script>
        $( function() {
            
            $( "#datefield" ).datepicker();
            
            $( "#datefield" ).datepicker( "setDate", new Date());
						
        } );
        
        
        
    </script>
@stop

@section('bodyLogbook')

<div class="container-fulid backgroundSeaBlue">
	<h1 class="text-center log-default">
		@foreach ($log_info as $log_data)
			{{ $log_data->title }}
		@endforeach
	</h1>
</div>

<div class="container-fulid form-box text-center">
    
	@foreach ($log_info as $log_data)
		{!! $log_data->html_text !!}
	@endforeach
    
    <div class="row pull-right">
    <div class="col-sm-4">
        <a href="/logbook" class="btn btn-success">Back</a>
    </div>
    </div>
</div>

@stop
