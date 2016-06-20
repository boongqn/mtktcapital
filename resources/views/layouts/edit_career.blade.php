@extends('app')


@section('content')
	
	<div class="container fade_table">
		
		@include('partials.navbar_admin')
		
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-push-3">


			@include('errors.flash_crud')


			{!!
				Form::open([ 'method' => 'PUT', 'files' => true, 'route' => ['editInfoCustomer', $customer->id] ])
			!!}

				<div class="form-group">
					<input type="text" class="form-control" name="full_name" 
						value="{{ $customer->full_name }}"
					>
				</div>

				<div class="form-group">
					<input type="email" class="form-control" name="email" 
						value="{{ $customer->email }}"
					>
				</div>

				<div class="form-group">
					<input type="file" class="form-control" name="file" >
				</div>

				<button type="submit" class="btn btn-warning">Update</button>
			</form>
		</div>

	</div>

@endsection