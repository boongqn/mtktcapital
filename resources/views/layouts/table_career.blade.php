@extends('app')


@section('content')
	
<style type="text/css">
	tr td { font-size: 13px; }
	tr th { font-size: 15px; font-weight: bold; }
</style>


	<div class="container fade_table">
	
		@include('partials.navbar_admin')
		

		@include('errors.flash_crud')


		
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>File</th>
						<th><i class="icon-calendar"></i></th>
						<th><i class="icon-layers"></i></th>
						<th><i class="icon-pencil"></i></th>
						<th><i class="icon-trash"></i></th>
					</tr>
				</thead>
				<tbody>
				@forelse ($customers as $customer)
					<tr class="{{ ($customer->active == 1) ? 'mark_read' : ''  }}">
						<td>{{ $customer->full_name }} name</td>
						<td>{{ $customer->email }}</td>
						<td>{{ $customer->substrFile(trim($customer->file)) }}</td>
						<td>{{ $customer->created_at }}</td>
						<td>
							{!!
								Form::open([ 
								'route' => 'export.file', 
								'method'=>'POST' ]) 
							!!}
								<input type="hidden" class="form-control" name="template" value="{{$customer->file}}" />
								<button type="submit" class="btn btn-default btn-sm" style="background: white; border-radius: 0;">Export File</button>
							{!! Form::close() !!}
						</td>
						<td>
							<a href="{{ route('storeCareer', $customer->id) }}" class="btn btn-sm btn-success icon-pencil elEdCus"
								style="border-radius: 100%;" 
							>
							</a>
						</td>
						<td>
							{!!
								Form::open([ 
								'route' => ['deleteCustomer', $customer->id], 
								'method'=>'DELETE' ]) 
							!!}
								<button type="submit" class="btn btn-danger icon-trash" style="border-radius: 100%;"></button>
							{!! Form::close() !!}
						</td>
					</tr>
				@empty

				   <tr>
				    	<td>
				    		<h4>Empty ... </h4>
				    	</td>
				    </tr>

				@endforelse
				</tbody>
			</table>
			
		<!-- Paginate  -->
		@include('partials.paginate')
	
	</div>

@endsection