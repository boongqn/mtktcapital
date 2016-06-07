@extends('app')


@section('content')
	

	
	<div class="row">
	    <div class="span12">
	        <div class="container">
	    		<div id="carousel-example-generic" class="carousel slide under-carousel" data-ride="carousel">
			        <div id="carousel_1" class="carousel slide">
			            <!-- Carousel items -->
			            <div class="apply-now-slider">
			                <div class="col-xs-12 col-md-6">

			                </div>
			                <div class="col-md-6">
			                    <div class="">
			                        <ol class="carousel-indicators">
			                            <li class="active" data-target="#carousel-example-generic" data-slide-to="2"></li>
			                            <li class="" data-target="#carousel-example-generic" data-slide-to="2"></li>
			                        </ol>
			                    </div>
			                    <div class="img-button-apply-slider">
			                        <a class="btn btn-lg btn-primary" href="{{ route('apply.index') }}" role="button">ÁP DỤNG<img src="stuff/img/img-button-apply.png" alt="icon"></a>
			                    </div>
			                </div>
			            </div>
			            <div class="carousel-inner">
			                
			                    <div class="active item">
			                        <img class="col-xs-12 col-md-6" alt="First slide" src="{{ URL::asset('uploads/6568657360343391dffb4424a470fbd6.png')}}">
			                        <div class="carousel-caption col-md-6">
			                            <h2>CHÚNG TÔI NÓI VÂNG !</h2>
			                            <p>Tài chính doanh nghiệp nhỏ. Chương trình cho vay đặc biệt. Phù hợp với doanh nghiệp vừa và nhỏ.</p>                            <p>
			                                    <!--<a role="button" href="#" class="btn btn-lg btn-primary">APPLY NOW<img alt="icon" src="img/img-button-apply.png"></a>-->
			                            </p>
			                        </div>
			                    </div>

			                                            <!--			<div class="active item">
			                    <img src="http://mtktcapital.com/uploads/6568657360343391dffb4424a470fbd6.png" />


			                                                            </div>-->
			                    
			                    <div class="item">
			                        <img class="col-xs-12 col-md-6" alt="First slide" src="{{ URL::asset('uploads/800ebf1c6054932221459164bf807c8b.png')}}">
			                        <div class="carousel-caption col-md-6">
			                            <h2>CHO VAY DOANH NGHIỆP</h2>
			                            <p>Dù là tín dụng tuyệt vời hay tín dụng nghèo chúng tôi đều có những khoản vay với cách thanh toán và điều khoản rất tốt cho bạn.</p>                            <p>
			                                    <!--<a role="button" href="#" class="btn btn-lg btn-primary">APPLY NOW<img alt="icon" src="img/img-button-apply.png"></a>-->
			                            </p>
			                        </div>
			                    </div>

			                                            <!--			<div class="item">
			                    <img src="http://mtktcapital.com/uploads/800ebf1c6054932221459164bf807c8b.png" /></div>-->
			               </div>

			                            <!-- Carousel nav -->
			                <a class="carousel-control left" href="#carousel_1" data-slide="prev">&lsaquo;</a>
			                <a class="carousel-control right" href="#carousel_1" data-slide="next">&rsaquo;</a>
			                    </div>
			    </div>
			</div>  <!-- End container -->

			<script type="text/javascript">
			    $('#carousel_1').carousel({
			        interval: 5000
			    });
			</script>
	    </div>
	</div> <!-- End row -->


	<div class="container marketing">
	    <!-- Three columns of text below the carousel -->
	    
	    <div class="row">
	        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	            
	            <div class="center">
	                <img src="{{ URL::asset('uploads/109d15524820d86468f24abcb810c9c8.jpg')}}" class="img-circle img-border')}}" />
	            </div>
	            <h3>ĐÁNH GIÁ DOANH NGHIỆP CỦA BẠN MỘT CÁCH KHÁC BIỆT</h3>
	           	<p>
	           		Dù thế nào, chúng tôi quyết định cho vay dựa trên hiệu quả kinh doanh thực tế của bạn chứ không dựa vào những con số của dữ liệu cũ. Những cách thức cho vay hiện nay là quá phức tạp, kém khách quan và gây nhầm lẫn.    
	           	</p>                 
	        </div><!-- /.col-lg-4 -->

	<!--	<div class="span4">
			<img class="responsiveImage" src="http://mtktcapital.com/uploads/109d15524820d86468f24abcb810c9c8.jpg" />	</div>-->
		        
	        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	            
	            <div class="center">
	                <img src="{{ URL::asset('uploads/e25140e9ab18b189ac8bf4c6b66970e5.jpg')}}" class="img-circle img-border" />
	            </div>
	            <h3>TẠM ỨNG CHO DOANH NGHIỆP</h3>
	            <p>
	            	Một lợi thế lớn để sử dụng nguồn tài chính doanh nghiệp của chúng tôi là cách thanh toán dựa trên chỉ số bán hàng và hoạt động tài chính. Ngoài ra, chúng tôi cơ cấu các khoản thanh toán chi phí nhỏ hàng ngày (chỉ những ngày kinh doanh) thay vì các khoản thanh toán lớn tổng kết hàng tháng. Chúng tôi cũng có thể đảm bảo rằng mọi thứ là tự động hóa. Điều này giúp cho việc thực hiện thanh toán của bạn dễ quản lý hơn và dễ dàng để duy trì, cho phép bạn tập trung vào việc kinh doanh của bạn. Có rất nhiều lợi thế để tạm ứng tiền kinh doanh nên chỉ cần gọi cho chúng tôi hoặc nộp đơn trực tuyến sau đó một trong những chuyên gia tài chính của chúng tôi sẽ đưa bạn vào trong tất cả những lợi ích tốt nhất mà chương trình tài trợ độc đáo này cung cấp.
	            </p>                        
	        </div><!-- /.col-lg-4 -->
	        
	<!--	<div class="span4">
			<img class="responsiveImage" src="http://mtktcapital.com/uploads/e25140e9ab18b189ac8bf4c6b66970e5.jpg" />	</div>-->
		        
	        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	            
	            <div class="center">
	                <img src="{{ URL::asset('uploads/abd6bab6c348ca6950d33a295bee9032.jpg')}}" class="img-circle img-border" />
	            </div>
	            <h3>TĂNG DOANH THU</h3>
	            <p>
	            	Chúng tôi cung cấp một quá trình thay đổi nghành công nghiệp được gọi là công nghệ thúc đẩy để cung cấp nguồn vốn kịp thời ngay khi bạn cần để phát triển doanh nghiệp của bạn. Mỗi doanh nghiệp đều cần tiền để giúp hỗ trợ các dự án phát triển của nó. Chúng tôi sẽ xử lý các tập tin của bạn và bạn sẽ nhận được tiền vào tài khoản trong vòng 5 ngày.
	            </p>                        
	        </div><!-- /.col-lg-4 -->
	        
	        
	<!--	<div class="span4">
			<img class="responsiveImage" src="http://mtktcapital.com/uploads/abd6bab6c348ca6950d33a295bee9032.jpg" />	</div>-->
	    </div><!-- /.row -->

	</div><!-- /.container marketing -->
	
@endsection

