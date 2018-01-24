@extends('layout')

@section('head')
	<style type="text/css"></style>
@stop

@section('body')
	<div class="container-fluid">
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
			</div>
			
			<div class="col-sm-12 col-md-6">
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
			</div>
		</div>
	</div>
@stop