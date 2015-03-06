@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/register">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@include('form_elements.textfield', ['name' => 'username', 'value' => null,'label' => 'Username:'])
						@include('form_elements.textfield', ['name' => 'email', 'value' => null, 'label' => 'Email Address:'])
						@include('form_elements.password', ['name' => 'password', 'label' => 'Password:'])
						@include('form_elements.password', ['name' => 'password_confirmation', 'label' => 'Confirm Password:'])

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-user"></span> Register</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
