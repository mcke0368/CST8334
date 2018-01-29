@extends('layoutGuide')

@section('headGuide')
    <style>
        
        #logbook-cards, #report-cards {
            margin-top: 5%;
        }
        
        #logbook-cards .card, #report-cards .card {
            background-color: #E3E3E3; 
            border-style: solid;
            border-color: #C8C8C8;
            padding-top: 1%;
            padding-bottom: 4%;
            padding-right: 3%;
            padding-left: 3%;
            border-radius: 10px;
            margin: 5%;
        }
        
        #logbook-history-container, #report-history-container {
            background-color: #E3E3E3; 
            border-style: solid;
            border-color: #C8C8C8;
            padding: 3%;
        }
        
        #logbook-history-container .pre-scrollable, #report-history-container .pre-scrollable {
            background-color: #EEEAEA; 
            border-style: solid;
            border-color: #C8C8C8;
        }
        
        .pre-scrollable .card {
            border-style: solid;
            border-color: #C8C8C8;
            padding-top: 3%;
            padding-left: 3%;
        }
        
    </style>
    <script>
		$( function() {
			$(".log-type-card a.btn-create-log").click(function() {
				var type_id = $(this).attr('id') ;
				$.ajax({
					type: "POST",
					url: '/setLogType',
					data: { type_id: type_id },
					success: function(data)
					{
						if(data == "true"){
							window.location.href = "createDefaultLogbook";
						}
					}, 
					error: function(response)
					{
						alert('Error');
					}
				});
		   
			});	
			
			$(".log-ref").click(function() {
				var log_id = $(this).attr('id') ;
				$.ajax({
					type: "POST",
					url: '/setLog',
					data: { log_id: log_id },
					success: function(data)
					{
						if(data == "true"){
							window.location.href = "defaultLog";
						}
					}, 
					error: function(response)
					{
						alert('Error');
					}
				});
		   
			});	
			
			$(".delete-log-type-btn").click(function() {
				var logbook_type_id = $(this).attr("id").substr(2);
				var logbook_type_title = $(this).attr("name");
				$('#modal-delete-logtype').find("p#pid-log-type").attr("name", logbook_type_id);
				$('#modal-delete-logtype').find("p#pid-log-type").text(logbook_type_title);
				$('#modal-delete-logtype').modal('show');
			});
			
			$("#modal-button-delete-log-type").click(function() {
				var logbook_type_id = $("#modal-delete-logtype #pid-log-type").attr("name");
				
				$.ajax({
					type: "POST",
					url: '/deleteLogType',
					data: { logbook_type_id: logbook_type_id },
					success: function(data)
					{
						if(data == "true"){
							
						}
						
						location.reload();
					}, 
					error: function(response)
					{
						location.reload();
					}
				});
				
			});
			
			$(".log-ref .delete-log-icon").click(function(e) {
				e.stopPropagation();
			});
			
			$(".delete-log-icon").click(function() {
				var logbook_id = $(this).attr("id").substr(2);
				var logbook_title = $(this).attr("name");
				$('#modal-delete-log').find("p#pid-log").attr("name", logbook_id);
				$('#modal-delete-log').find("p#pid-log").text(logbook_title);
				$('#modal-delete-log').modal('show');
			});
			
			$("#modal-button-delete-log").click(function() {
				var logbook_id = $("#modal-delete-log #pid-log").attr("name");
				
				$.ajax({
					type: "POST",
					url: '/deleteLog',
					data: { logbook_id: logbook_id },
					success: function(data)
					{
						if(data == "true"){
							
						}
						
						location.reload();
					}, 
					error: function(response)
					{
						location.reload();
					}
				});
				
			});
			
		});
    </script>
@stop

@section('bodyGuide')
<div id="modal-delete-logtype" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p style="display:inline">Do you want to delete the logbook type </p>
				<p id="pid-log-type" name="" style="display:inline"></p>
				<p style="display:inline">?</p>
				<p>All logbooks associated with this logbook type will also be deleted.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="modal-button-delete-log-type" type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>

<div id="modal-delete-log" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p style="display:inline">Do you want to delete the logbook </p>
				<p id="pid-log" name="" style="display:inline"></p>
				<p style="display:inline">?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="modal-button-delete-log" type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>


<div class="container-fulid backgroundSeaBlue"><h1 class="text-center" style="margin:0; padding:1%; color:white;">LOGBOOK</h1></div>

<div class="container-fluid" style="padding:2%;">

<div id="logbook-cards" class="col-sm-8">    
	
	@foreach ($logbook_types as $logbook_type)
	<div class="col-sm-6">
		<div class="card text-center log-type-card">
			<h3 class="card-title">{{ $logbook_type->title }}</h3>
			<a id="lt{{ $logbook_type->id }}" class="btn btn-primary btn-create-log">Create</a>
			<a id="dl{{ $logbook_type->id }}" name="{{ $logbook_type->title }}" class="btn btn-danger delete-log-type-btn">Delete</a>
		</div>
	</div>
	@endforeach
	
	<div class="col-sm-6">
        <div class="card text-center" style="background-color: #FFA458; color: #FF4747; border-style: solid; border-color: #DD7800;">
            <div class="card-block">
                <h3 class="card-title">Create New Type</h3> 
                <a href="createLogType" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>
	
</div>
    
<div id="logbook-history" class="col-sm-4">
<div class="container-fulid">
    <h2 class="text-center" style="margin:0; margin-bottom:1%; padding:3%; color:#54B2C7;">Log History</h2>
    
<div id="logbook-history-container" class="container-fulid">    
    
<p class="" style="">Logbook Count: {{ sizeof($logs) }}</p>       
    
    <div class="pre-scrollable">
   
		@foreach ($logs as $log)
		<div id="lg{{ $log->id }}" class="card log-ref">
			<div class="card-block log-card" style="padding-right:1%;">
				<p class="card-title" style="display:inline">Log Title: {{ $log->title }}</p>
				<i id="dl{{ $log->id }}" name="{{ $log->title }}" class='fa fa-times pull-right delete-log-icon' aria-hidden='true'></i>
				<p class="card-text">Log Type: {{ $log->type_title }}</p>
			</div>
		</div> 
		@endforeach


    </div>
    
</div>
    
</div>
</div>     
    
</div>
@stop
