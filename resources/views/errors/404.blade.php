@extends('app')


@section('content')
	
    
    <div class="container">

    	<br><br><br>

     	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    	 	<center>
    	 		<h2>Error 404</h2>
	            <h4>Trang tìm kiếm không tồn tại !</h4> <br>
	            <a href="{{ url('/') }}" class="btn btn-default" style="background: white;">Quay lại trang chủ</a>
    	 	</center>
    	 </div>

		<br><br><br><br><br><br>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<img class="float" style="margin-top: 15px;" src="{{ asset('stuff/img/map-icon.jpg') }}" alt="map-icon">
            <address class="float">
                MTKT Capital, Inc. <br/>
                1904 Harbor Blvd, Suite 135<br/>
                Costa Mesa, CA 92627<br/>
                714-729-3528 - Phone <br/>
                714-509-1765 - Fax <br/>
                funding(at)mtktcapital.com <br/>
            </address>
		</div>
    </div>
    

@endsection