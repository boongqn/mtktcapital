@extends('app')


@section('content')
	
	<div class="container fade_table">

		@include('partials.navbar_admin')
		
		@include('errors.flash_crud')

		<div class="row ">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{{ Form::open([ 'method' => 'PUT', 'route' => 'updateTemplateEmail' ]) }}
				<textarea class="form-control summernote" rows="3" name="template">
					{{ $email_confirm }}
				</textarea>
				<button type="submit" class="btn btn-warning">Update</button>
				{{ Form::close() }}
			</div>
		</div>
	</div>


@endsection