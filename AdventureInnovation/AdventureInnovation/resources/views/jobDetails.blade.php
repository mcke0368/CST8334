@extends('layout')

@section('head')
    <style>
     #Job_div {
            color: black;
            padding: 0%;
            padding-left: 25%;
            padding-right: 15%
        }   
       
    </style>
    <script>
    </script>
@stop

@section('body')

<div class="container" >
  <nav class="nav navbar-nav navbar-right">
    <a class="navbar-brand" href="#" style = "color: black">JOB SEARCH</a>
	<a class="navbar-brand" href="#"style = "color: black">LOGBOOK</a>
	<a class="navbar-brand" href="#"style = "color: black">PROFILE</a>
	<a class="navbar-brand" href="#"style = "color: black">MAILBOX</a>
  </nav>
</div>
<div id="Job_div" class="container-fluid">


    <h1 class="text-center" style="margin-bottom:6%;"> Post New Job <br> Entry </h1>
		
	<div class="container-fluid">
	           
	    <a href="basic_info.html" class="btn btn-info" role="button" style = "background-color: #696969; font-size:20px; margin-left:100px;">Basic Information</a>
         
	    <a href="job_detail.html" class="btn btn-info" role="button" style = "background-color: #B22222; font-size:20px; padding-left: 40px; padding-right: 40px;margin-left: 60px; margin-right: 60px">Job Details</a>
		
	    <a href="finish.html" class="btn btn-info" role="button" style = "background-color: #696969; font-size:20px; padding-left: 50px; padding-right: 50px; margin-right:100px">Finish</a><br><br>
	</div>
	
       
    <form id = "job_detail"; name = "job_detail">
	
	    <div >
			<h4 class = "text-center"> Job Details </h4>
			<p class = "text-center"> Enter details about the job below. Be as descriptive as possible so that the <br> potential candidates can find your job lising easily<br><br>__________________________ </p>
		</div>
        <div class="form-row">
		    <div class="form-group col-md-6">
                <label for="job_title" class="col-form-label">Job Title</label>
			    <input type="text" class="form-control" id="job_title" name = "job_title" > 	
		    </div>
			
            <div class="form-group col-md-6">
		        <label for="start_date" class="col-form-label">Start Date</label>		 
            	<input type="text" class="form-control" id="start_date" name = "start_date">
            </div>
        </div>
		
        <div class="form-row">
		    <div class="form-group col-md-6">
                <label for = "job_type" class="col-form-label"> Job Type</label>
				<select class="form-control" id="job_type" name = "job_type" >
                    <option>Seasonal</option>
                    <option>All year</option>
                    <option>Other</option>
                </select>
            </div>	
						
			<div class="form-group col-md-4">
		         <label for="job_category" class="col-form-label">Job Category</label>
				 <select class="form-control" id="job_category" name = "job_category" >
                    <option>Administration</option>
                    <option>Sales</option>
                    <option>Other</option>
                 </select>
		     </div>
		    
			<div class="form-group col-md-2">
		        <label for="Expiration" class="col-form-label">Expiration</label>		
                <select class="form-control" id="Expiration" name = "Expiration" >
                    <option>anytime</option>
                    <option>notime</option>
                    <option>Other</option>
                </select>
			</div>
        </div>
        
          
        <div class="form-group col-md-12"  >
             <label for="description">Description</label><br>
             <textarea class="form-control" rows = "8" name = "description" id="description"></textarea> <br> <br>
        </div>
                        
    </form>
    	
    <a href="previous.html" class="btn btn-danger" role="button" style = "background-color: #B22222; font-size:15px; margin-left:10px;">previous</a>
    <a href="preview.html" class="btn btn-info" role="button" style = "background-color: #B22222; font-size:15px; margin-left:700px;">preview</a><br><br><br>
    
</div>

@stop