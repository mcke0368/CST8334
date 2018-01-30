@extends('layoutLogbook')

@section('headLogbook')
    <style>
        
        .form-box {
            background: #E3E3E3;
            margin: 7%; 
            padding: 5%;
        }
        
        .form-box div {
            padding: 0.5%;
            padding-right: 2%;
            padding-left: 2%;
        }
        
        .datetime-local {
            color: aliceblue;
        }
        
        div h3, div h4 {
            display: inline-block;
        }
        
    </style>
    <script>
        $( function() {
            
            $( "#datefield" ).datepicker();
            
            $( "#datefield" ).datepicker( "setDate", new Date());
						
        } );
        
        
        
    </script>
@stop

@section('bodyLogbook')

<div class="container-fulid backgroundSeaBlue"><h1 class="text-center" style="margin:0; padding:1%; color:white;">
	@foreach ($log_info as $log_data)
		{{ $log_data->title }}
	@endforeach
</h1></div>

<div class="container-fulid form-box text-center">
    
	@foreach ($log_info as $log_data)
		{!! $log_data->html_text !!}
	@endforeach
    
    <div class="row pull-right">
    <div class="col-sm-4">
        <a href="logbook" class="btn btn-success">Back</a>
    </div>
    </div>
</div>

@stop