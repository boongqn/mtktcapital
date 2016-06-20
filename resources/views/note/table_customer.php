<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<div class="alert alert-info">
		<ul style="line-height: 32px;">
			<li>
				<center>{{  $customer->created_at }}</center>
			</li>
			<li>
				<strong>Name:</strong>  {{ $customer->full_name }}
			</li>
			<li>
				<strong>Email:</strong>  {{ $customer->email }}
			</li>
			<li>
				<strong>State:</strong>  {{ $customer->state }}
			</li>
			<li>
				<strong>Phone:</strong>  {{ $customer->phone }}
			</li>

			<li>
				<strong>Business:</strong>  {{ $customer->business }}
			</li>
			<li>
				<strong>Industry:</strong>  {{ $customer->industry }}
			</li>
			
			<li>
				<strong>How much money do you need?:</strong>  {{ $customer->q_money }}
			</li>
			<li>
				<strong>What is the main purpose for the funds?: </strong>  {{ $customer->q_fund }}
			</li>
			<li>
				<strong>Personal credit score range ... :</strong>  {{ $customer->q_credit }}
			</li>
			<li>
				<strong>Note :</strong>  {{ $customer->note }}
			</li>
		</ul>

		<div style="display: flex; flex-wrap: wrap;">
			
			<a href="{{ route('storeInfoCustomer', $customer->id) }}" class="btn btn-warning" style="border-radius: 0;">Edit</a>
		
			{!!
				Form::open([ 
				'route' => ['deleteCustomer', $customer->id], 
				'method'=>'DELETE' ]) 
			!!}
				<button type="submit" class="btn btn-danger" style="border-radius: 0;">Delete</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>