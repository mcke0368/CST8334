@extends('layout')

@section('head')
	<style type="text/css"></style>
@stop

@section('body')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6" style="padding: 20px;margin-top:15px;">
				<div class="col-sm-12" style="padding: 20px;margin-top:15px;">
                    @include('auth.register-partial')
				</div>
			</div>
			
			<div class="col-sm-12 col-md-6">
				<div class="col-sm-12 text-right" style="padding: 20px;margin-top:15px;">
					<div class="col-sm-12">
						Interested in creating a Company Account?
					</div>
					<div class="col-sm-12 text-right">
						<a href="/companyLogin" class="btn btn-primary">Inquiry Here</a>
						<!--
						<button class="btn btn-danger">Inquiry Here</button>
						-->
					</div>
				</div>
				<div class="col-sm-12 " style="padding: 20px;margin-top:15px; ">
                    @include('auth.login-partial')
				</div>
				<div class="col-sm-12 text-right" style="padding: 20px; margin-top:10px">
					<p>English</p>
					<p><a href="#" style="color: black;text-decoration: underline;">Change Language?</a></p>
				</div>
			</div>
		</div>
	</div>
@stop
