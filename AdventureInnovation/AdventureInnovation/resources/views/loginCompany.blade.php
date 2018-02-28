@extends('layout')

@section('head')
	<style type="text/css">
		 body{
			background-color:#54B2C7;
		} 

		.login-addon{
			min-width:100px;
			text-align:left;
		}
		
		.reset-left{
			position:relative;
			left:-15px;
		}

		.form-signin{
			padding-top:5%;
			padding-bottom:3%; 
        	
        	position:relative;
        	top:-4px; 
		}

		.title-signin{
		 	padding-bottom:15px;
		 	position:relative;
		 	top:-10px;
		 } 

		.reset-register{
			color: #fff;
		}

		.reset-register:hover{
			text-decoration:none;
			color:#d9534f;
		}
		.btn-login{
			padding-top:20px;
		}

	</style>
@stop

@section('body')

	<div class="jumbotron backgroundSeaBlue form-signin">
		<div class="row">			
			<div class="col-md-6 col-md-offset-3">				
				<div class="col-sm-12 bg-primary form-signin">
					<form class="form-horizontal" id ="loginForm">
						<h3 class="form-group text-center title-signin">
							Sign in
						</h3>

						<div class="form-group">
					   		<div class="input-group input-group-lg col-md-12">	
					    		<div class="input-group-addon login-addon">
				    				<span aria-hidden="true">Email</span>
				    			</div class="col-md-6">	    
				    			<input id="exampleInputEmail1" type="email" class="form-control" placeholder="Your email">			        
					    	</div>
						</div>
						<div class="form-group">
					   		<div class="input-group input-group-lg col-md-12">	
					    		<div class="input-group-addon login-addon">
				    				<span aria-hidden="true">Password </span>
				    			</div class="col-md-6">	    
			    			<input id="exampleInputPassword1" type="password" class="form-control" placeholder="Your password">			        
					    	</div>
						</div>
						<div class="reset-left">Forgot your password? <a href="resetPassword" class="reset-register">Reset password</a>
						</div>
					  	<div class="reset-left">Don't have an account? <a href="register" class="reset-register">Register a new account</a>
						</div>
					    <div class="input-group text-center btn-login col-md-4 col-md-offset-4">
					  	<button type="submit" class="btn btn-lg btn-danger btn-block">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop