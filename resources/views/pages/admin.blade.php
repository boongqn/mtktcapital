@extends('app')


@section('content')
	
    

	<div class="container">

		@include('partials.navbar_admin')
		
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="alert alert-info">
				<div class="panel-body">
					<center><a href="{{ route('showInfoCustomer') }}"><h3>Thông Tin Khách Hàng</h3></a></center>
				</div>
			</div>
		</div>

		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="alert alert-info">
				<div class="panel-body">
					<center><a href="{{ route('showInfoCareer') }}"><h3>Thông Tin Tuyển Dụng</h3></a></center>
				</div>
			</div>
		</div>

		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="alert alert-info">
				<div class="panel-body">
					<center><a href="{{ route('showContentEmail') }}"><h3>Mẫu thông báo Email</h3></a></center>
				</div>
			</div>
		</div>

		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="alert alert-info">
				<div class="panel-body">
					<center><a href="{{ route('showAccountAdmin') }}"><h3>Tài khoản Admin</h3></a></center>
				</div>
			</div>
		</div>
	</div>

@endsection