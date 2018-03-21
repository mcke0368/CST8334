@extends('layout')

@section('head')
	<style type="text/css"></style>
@stop

@section('body')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 login-pad">
				<div class="col-sm-12 company-user">
					Sign Up As A Company User
				</div>
				<div class="col-sm-12 login-pad">
					<form id="signup-form">
						<div class="form-group">
					    <label for="inputfirstname">Your Name</label>
					    <input type="name" class="form-control" id="inputYourName" placeholder="Your Name">
					  </div>
					   <div class="form-group">
					    <label for="inputlastname">Your Position</label>
					    <input type="name" class="form-control" id="inputPositionName" placeholder="Your Position">
					  </div>
					   <div class="form-group">
					    <label for="emailInput">Email address</label>
					    <input type="email" class="form-control" id="emailInput" placeholder="Email">
					  </div>
					   <div class="form-group">
					    <label for="inputUsername">Company Name</label>
					    <input type="name" class="form-control" id="inputCompanyName" placeholder="Company Name">
					  </div>
					  <div class="form-group">
					    <label for="passwordInput">Number of Members</label>
					    <input type="password" class="form-control" id="inputNumberOfMember" placeholder="Number of Members">
					  </div>
					  <div class="form-group">
						  <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17"> Additional Message : </label>
						  <div id="cid_17" class="form-input-wide">
							  <textarea id="input_17" class="form-textarea" name="q17_note" cols="80" rows="4" data-component="textarea"></textarea>
						  </div>
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox">I agree to the Terms of Service and will adhere to them unconditionally. <a href="#">(Read Terms of Service)</a> 
					    </label>
					  </div>
						<div class="send-button">
							<button class="btn btn-danger" type="submit" >Send</button>
						</div>

					</form>
				</div>
			</div>
			
			<div class="col-sm-12 col-md-6">
				<div class="col-sm-12 bg-primary" style="padding: 20px;margin-top:50px; ">
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
				<div class="col-sm-12 text-right login-pad">
					<p>English</p>
					<p><a href="#" class="change-language">Change Language?</a></p>
				</div>
			</div>
		</div>
	</div>
@stop
