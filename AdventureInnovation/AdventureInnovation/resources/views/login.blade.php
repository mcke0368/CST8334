@extends('layout')

@section('head')
	<style type="text/css"></style>
@stop

@section('body')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 login-pad">
				<div class="col-sm-12 login-pad">
                    @include('auth.register-partial')
				</div>
			</div>
			
			<div class="col-sm-12 col-md-6">
				<div class="col-sm-12 text-right login-pad">
					<div class="col-sm-12">
						Interested in creating a Company Account?
					</div>
					<div class="col-sm-12 text-right">
						<a href="/companyLogin" class="btn btn-primary">Inquiry Here</a>
					</div>
				</div>
				<div class="col-sm-12 login-pad">
                    @include('auth.login-partial')
				</div>
				<div class="col-sm-12 text-right">
					<p>English</p>
					<p><a href="#" class="change-language">Change Language?</a></p>
				</div>
			</div>
		</div>
	</div>
@stop
