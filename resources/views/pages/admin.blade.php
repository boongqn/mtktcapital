@extends('app')


@section('content')
	
    

	<div class="container fade_table">

		@include('partials.navbar_admin')
		
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="alert alert-info" style="height: 130px;">
				<div class="panel-body">
					<center>
					<a href="{{ route('showInfoCustomer') }}">
						<h3>Thông Tin Khách Hàng</h3>
						@if($customer > 0)
						<span class="badge" style="font-weight: normal; padding: 6px 10px; font-size: 14px;">
							hiển thị {{ $customer }} khách hàng mới
						</span>
						@endif
					</a>
					</center>
				</div>
			</div>
		</div>

		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="alert alert-info" style="height: 130px;">
				<div class="panel-body">
					<center>
					<a href="{{ route('showInfoCareer') }}">
						<h3>Thông Tin Tuyển Dụng</h3>
						@if($career > 0)
						<span class="badge" style="font-weight: normal; padding: 6px 10px; font-size: 14px;">
							hiển thị {{ $career }} tuyển dụng mới
						</span>
						@endif
					</a>
					</center>
				</div>
			</div>
		</div>

		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="alert alert-info">
				<div class="panel-body">
					<center><a href="{{ route('showContentEmail') }}"><h3>Mẫu thông báo E-Mail</h3></a></center>
				</div>
			</div>
		</div>

		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="alert alert-info">
				<div class="panel-body">
					<center><a href="{{ route('showAccountAdmin') }}"><h3>Quản lý tài khoản Admin</h3></a></center>
				</div>
			</div>
		</div>
	</div>

@endsection