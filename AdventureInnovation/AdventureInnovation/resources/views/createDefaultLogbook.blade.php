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
        
    </style>
    <script>

        $( function() {
									
			$("#save-logbook-button").click(function() {
				$('.attach-input').show();
				$("#modal-save-logbook").modal('show');
			});
		
			$("#modal-button-save-log").click(function() {
				
				var logbook_title = $("#logbook-title").val();
				
				var inputs = $('.form-box .form-group');

				var values = [];
				inputs.each(function() {
					var input_value = "";
					
					
					if($(this).find( "input" ).attr('type') == "text") {
						input_value = $(this).find( "input" ).val();
					} else if ($(this).find( "input" ).attr('type') == "radio") {
						input_value = $(this).find( "input:checked" ).parent().text();
					} else if ($(this).find( "input" ).attr('type') == "checkbox") {
						var cbx_vals = [];
						$.each($(this).find("input:checked"), function(){            
							cbx_vals.push($(this).parent().text());
						});
						for (var i = 0; i < cbx_vals.length; i++) {
							if (i != cbx_vals.length - 1) {
								input_value = input_value + cbx_vals[i] + ", ";
							} else {
								input_value = input_value + cbx_vals[i];
							}
						}
					} else if ($(this).children().eq(1).is( "select" )) {
						input_value = $(this).find( "select option:selected" ).text();
					} else if ($(this).children().eq(1).is( "textarea" )) {
						input_value = $(this).children().eq(1).val();
					}
					
					input_value = "<h4>" + input_value + "</h4>";
					
					if($(this).has( "label" )) {
						var label_text = $(this).find( "label:first" ).text();
						label_text = "<h3>" + label_text + "</h3>";
						$(this).find( "label:first" ).remove();
					}
				
					
					$(this).parent().prepend( label_text );
					$(this).parent().append( input_value );
					
					$(this).not('h3, h4').remove();
				});
				
				$(".form-box").find(".pull-right").remove();
				var logbook_html = $(".form-box").html();
					
				$.ajax({
					type: "POST",
					url: '/saveLog',
					data: { logbook_title: logbook_title, logbook_html: logbook_html},
					success: function(data)
					{
						if(data == "true"){
							window.location.href = "logbook";
						}
					}, 
					error: function(response)
					{
						alert('Error');
					}
				});
				
				
			});	
			
        } );
                
    </script>
@stop

@section('bodyLogbook')

<div id="modal-save-logbook" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Logbook Title</h4>
            </div>
            <div class="modal-body">
                <p id="msl-0">Please enter your logbook title:</p>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" id="logbook-title">
					</div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="modal-button-save-log" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fulid backgroundSeaBlue"><h1 class="text-center" style="margin:0; padding:1%; color:white;">
	@foreach ($log_types as $log_type)
		{{ $log_type->title }}
	@endforeach
</h1></div>

<div class="container-fulid form-box text-center">
    
	@foreach ($log_types as $log_type)
		{!! $log_type->html_text !!}
	@endforeach
	
	<div class="row pull-right" style="padding:1%;">
		<div class="col-sm-4" style="margin-right: 10%">
			<a href="logbook" class="btn btn-success">Back</a>
		</div>
		<div class="col-sm-4" style="margin-left: 10%">
			<button id="save-logbook-button" class="btn btn-danger">Save</button>
		</div>
    </div>
	
</div>

<script type="text/javascript">
     $(function () {
        $( "#datePicker" ).datepicker();
		
		$( "#datePicker" ).datepicker( "setDate", new Date());
    });
</script>


@stop
