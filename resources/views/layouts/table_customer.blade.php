@extends('app')


@section('content')

<style type="text/css">
	tr td { font-size: 13px; }
	tr th { font-size: 15px; font-weight: bold; }
</style>

	@include('partials.modal_customer_edit')

	<div class="container fade_table">
		
		@include('partials.navbar_admin')
		@include('errors.flash_crud')

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Business</th>
						<th>Industry</th>
						<th>Telephone</th>
						<th>Email</th>
						<th>State</th>
						<th><i class="icon-calendar"></i></th>
						<th><i class="icon-pencil"></i></th>
						<th><i class="icon-trash"></i></th>
					</tr>
				</thead>
				<tbody>
				@forelse ($customers as $key => $customer)	
					<tr class="{{ ($customer->active == 1) ? 'mark_read' : ''  }}">
						<td>{{ $customer->full_name }} name</td>
						<td>{{ $customer->business }}</td>
						<td>{{ $customer->industry }}</td>
						<td>{{ $customer->phone }}</td>
						<td>{{ $customer->email }}</td>
						<td>{{ $customer->state }}</td>
						<td>{{ $customer->created_at }}</td>
						<td>
							<a href="{{ route('storeInfoCustomer', $customer->id) }}" class="btn btn-sm btn-success icon-pencil elEdCus"
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