@extends('app')


@section('content')
	
	
	@extends('app')


@section('content')
	
	@if(Auth::check())

	<div class="container fade_table">
		@include('partials.navbar_admin')
		
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
			@include('errors.flash_crud')
			
			{!! Form::open([
				'method' => 'PUT', 'route' => 'admin.update.account'
			]) !!}

				<div class="form-group {{ $errors->has('name') ? 'has-error' : ' ' }}">
					<input type="text" class="form-control" name="name" placeholder="Username"
						value="" 
					>
				</div>

				<div class="form-group {{ $errors->has('password') ? 'has-error' : ' ' }}">
					<input type="password" class="form-control" name="password" placeholder="Password"
					>
				</div>
			
				<button type="submit" class="btn btn-warning">Update Account</button>
			{!! Form::close() !!}
		</div>
	</div>
	@endif

@endsection

	


@endsection