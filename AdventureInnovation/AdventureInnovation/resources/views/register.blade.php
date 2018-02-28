@extends('layout')

@section('head')
	<style>
	 body{
		background-color: #54B2C7;
	} 
	.label-addon{
		min-width:115px;
		text-align:left;
	}
	h2{
		color:#fff;
		text-shadow: 2px 2px #000;
		font-size: 250%;
	}
	
	 .term-login {
		color: #fff;
	} 
	.term-login:hover{
		text-decoration:none;
		color:#d9534f;
	}
	.register-padding{
		padding-top:5%;
        padding-bottom:3%;       
    }

	</style>
@stop

@section('body')

<div class="jumbotron register-padding backgroundSeaBlue">
	<div class="row text-center">
	  	<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 bg-primary">
	    
			<h2>Register</h2>
			<h4>Here for the first time</h4>
			<form id="signup-form" class="form-group-lg">
  				<div class="form-group">
			    	<div class="input-group input-group-lg col-md-10 col-md-offset-1">	
			    		<div class="input-group-addon label-addon">
		    				<span aria-hidden="true">First name</span>
		    			</div>	    
		    			<input id="inputfirstname" type="text" class="form-control" placeholder="Your first name"> 
			    	</div>
				</div>
				<div class="form-group">
			    	<div class="input-group input-group-lg col-md-10 col-md-offset-1">	
			    		<div class="input-group-addon label-addon">
		    				<span aria-hidden="true">Last name</span>
		    			</div>	    
		    			<input id="inputlastname" type="text" class="form-control" placeholder="Your last name"> 
			    	</div>
				</div>
				<div class="form-group">
			   		<div class="input-group input-group-lg col-md-10 col-md-offset-1">	
			    		<div class="input-group-addon label-addon">
		    				<span aria-hidden="true">Email</span>
		    			</div class="col-md-6">	    
		    			<input id="emailInput" type="email" class="form-control" placeholder="Your email">			        
			    	</div>
				</div>
				<div class="form-group">
			   		<div class="input-group input-group-lg col-md-10 col-md-offset-1">	
			    		<div class="input-group-addon label-addon">
		    				<span aria-hidden="true">Username</span>
		    			</div class="col-md-6">	    
		    			<input id="inputUsername" type="email" class="form-control" placeholder="Your username">			        
			    	</div>
				</div>
				<div class="form-group">
			   		<div class="input-group input-group-lg col-md-10 col-md-offset-1">	
			    		<div class="input-group-addon label-addon">
		    				<span aria-hidden="true">Password </span>
		    			</div class="col-md-6">	    
	    			<input id="passwordInput" type="password" class="form-control" placeholder="Your password">			        
			    	</div>
				</div>		
				<div class="form-group">
			   		<div class="input-group input-group-lg col-md-10 col-md-offset-1">	
			    		<div class="input-group-addon label-addon">
		    				<span aria-hidden="true">Confirm</span>
		    			</div class="col-md-6">	    
		    			<input id="confirmPasswordInput" type="password" class="form-control" placeholder="Confirm your password">	
		    		</div>
				</div>
				<div class="checkbox">					    		
		      		<input type="checkbox">I agree to the Terms of Service and will adhere to them unconditionally. <a href="#" class="term-login">(Read Terms of Service)</a> 
		  		</div>								  
				<div class="form-group">
					<div class="input-group input-group-lg col-md-4 col-md-offset-4">
						<button type="submit" class="btn btn-danger btn-block btn-lg">Sign Up</button>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="form-group">
						<h4>Already have an account? Go to <a href="login" class="term-login">Login</a></h4>										
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="form-group">
						<h4>Don't want to create an account? Go back <a href="homepage" class="term-login">Home page</a></h4>		
					</div>
				</div>					
	    	</div>
	  	</div>
	</div>
</div>
		
@stop


	<!-- <div class="container-fluid">
		<div class="row">
			<div class="col-sm-6" style="padding: 20px;margin-top:15px;">
				<div class="col-sm-12">
					Here for the first time?
	
				</div>
				<div class="col-sm-12" style="padding: 20px;margin-top:15px;">
					<form id="signup-form">
						<div class="form-group">
					    <label for="inputfirstname">First Name</label>
					    <input type="name" class="form-control" id="inputfirstname" placeholder="firstname">
					  </div>
					   <div class="form-group">
					    <label for="inputlastname">Last Name</label>
					    <input type="name" class="form-control" id="inputlastname" placeholder="lastname">
					  </div>
					   <div class="form-group">
					    <label for="emailInput">Email address</label>
					    <input type="email" class="form-control" id="emailInput" placeholder="Email">
					  </div>
					   <div class="form-group">
					    <label for="inputUsername">Username</label>
					    <input type="name" class="form-control" id="inputUsername" placeholder="username">
					  </div>
					  <div class="form-group">
					    <label for="passwordInput">Password</label>
					    <input type="password" class="form-control" id="passwordInput" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="confirmPasswordInput">Confirm Password</label>
					    <input type="password" class="form-control" id="confirmPasswordInput" placeholder="Confirm Password">
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox">I agree to the Terms of Service and will adhere to them unconditionally. <a href="#">(Read Terms of Service)</a> 
					    </label>
					  </div>
					  <button class="btn btn-danger" type="submit">Register</a></button>
					</form>
				</div>
			</div> -->
			
			<!-- <div class="col-sm-12 col-md-6">
				<div class="col-sm-12 text-right" style="padding: 20px;margin-top:15px;">
					<div class="col-sm-12">
						Interested in creating a Company Account?
					</div>
					<div class="col-sm-12 text-right">
						<button class="btn btn-danger">Inquiry Here</button>
					</div>
				</div>
				<div class="col-sm-12 bg-primary" style="padding: 20px;margin-top:15px; ">
					<form class="form-horizontal" id ="loginForm">
						<div class="form-group text-center">
							Login
						</div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">email</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
						  <div class="form-group text-right">
						    Forgot your password?
						  </div>
						  <div class="form-group text-center">
						  	<button type="submit" class="btn btn-danger">Login</button>
						  </div>
					</form>
				</div>
				<div class="col-sm-12 text-right" style="padding: 20px; margin-top:10px">
					<p>English</p>
					<p><a href="#" style="color: black;text-decoration: underline;">Change Language?</a></p>
				</div>
			</div> -->
