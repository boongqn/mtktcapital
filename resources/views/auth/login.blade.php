@extends('app')


@section('content')
    
	
	<div class="container">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-push-3" >

			{!! Form::open([ 'method' => 'POST', 'route' => 'admin.post.login', 'class' => 'login' ]) !!}

				<div class="form-group {{ $errors->has('name') ? 'has-error' : ' ' }}"
				>
					<input type="text" name="name" class="form-control" placeholder="Username"
					value="{{ old('name') }}" 
					>
					<small>
						<strong>{{ $errors->has('name') ? $errors->first('name') : ' ' }}</strong>
					</small>
				</div>

				<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">

					<input type="password" name="password" class="form-control" placeholder="Password"
						value="{{ old('password') }}" 
					>

					<small>
						<strong>{{ $errors->has('password') ? $errors->first('password') : ' ' }}</strong>
					</small>
				</div>
			
				<button type="submit" class="btn btn-primary btn-sm">Login</button>

			{!! Form::close() !!}
		</div>
	</div>

@endsection