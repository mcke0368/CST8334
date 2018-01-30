@extends('layoutGuide')

@section('headGuide')
    <style>
     #manageAccount_div {
            color: black;
            padding: 2%;
            padding-left: 15%;
            padding-right: 15%
        }   
       
    </style>
    <script>
    </script>
@stop

@section('bodyGuide')


<div id = "manageAccount_div" class="container-fluid">
    <div class="container-fluid">
        <h1 class="text-center" style="margin-bottom:6%;"> Manage Account</h1>
	</div>
	
    <form id = "dashBoard_form">			
    <div class="form-row" >	
	
	    <div class="form-group col-md-6">			    
			<label for="emailInput">Current E-Mail</label>
		    <input type="email" class="form-control" style="margin-bottom:5%"id="emailInput" placeholder="coolestpersonever@gmail.com">			
			<label for="passwordInput">Change Password</label>
			<input type="password" class="form-control" id="passwordInput" placeholder="Password">
		</div>
	
	    <div class="form-group col-md-6">		
			<label for="emailInput">Change E-Mail</label>
		    <input type="email" class="form-control" style="margin-bottom:5%"id="emailInput">			
			<label for="passwordInput">Re-type Password</label>
			<input type="password" class="form-control" id="passwordInput">		
		</div>	
         
		
    </div>
    </form>
    	
    <div class="text-center" style="margin-top:18%; margin-bottom:20%">
		<button type="submit" class="btn btn-danger">Save Changes</button> 
	</div>  
</div>

@stop