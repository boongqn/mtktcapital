@extends('app')


@section('content')
	
	<div class="container">
	    <h2>GIAO DỊCH GẦN ĐÂY</h2>

	    <!-- wrap tag-p -->
	    <p>
	        <p style="font-size: 14px; line-height: 24px; text-align: justify;">Dưới đây là danh sách các giao dịch gần đây của chúng tôi. Xin lưu ý là danh sách này chỉ bao gồm một vài giao dịch được lựa chọn và không đại diện cho toàn bộ danh sách các khoản vay của chúng tôi. Nếu bạn có câu hỏi về sự tham gia của chúng tôi với một ngành công nghiệp nào đó xin vui lòng liên hệ với một trong những chuyên gia tư vấn kinh doanh của chúng tôi.</p>

	        <p class="table-responsive">
	        </p>


	        <table class="table table-striped table table-bordered table-hover">
	            <thead>
	                <tr>
	                    <th>khoản vay</th>
	                    <th>Ngành công nghiệp</th>
	                    <th>Thành phố</th>
	                    <th>Tiểu bang</th>
	                </tr>
	            </thead>
	            <tbody>
	                <tr>
	                    <td>$250,000</td>
	                    <td>Chế tạo</td><td>Austin</td>
	                    <td>TX</td>
	                </tr><tr>
	                    <td>$40,000</td>
	                    <td>Dịch vụ vận tải đường bộ</td><td>Atlanta</td>
	                    <td>GA</td>
	                </tr><tr>
	                    <td>$175,000</td>
	                    <td>Xây dựng và Công trình</td><td>Phoenix</td>
	                    <td>AZ</td>
	                </tr>
	                <tr>
	                    <td>$28,000</td><td>Cửa hàng rượu</td><td>Brooklyn</td><td>NY</td></tr>
	                <tr>
	                    <td>$40,000</td><td>Nhà hàng </td><td>St. Louis </td>
	                    <td>MO</td>
	                </tr>
	                <tr>
	                    <td>$65,000</td><td>Sửa chữa ô tô</td><td>Austin</td><td>TX</td>
	                </tr><tr>
	                    <td>$20,000</td><td>Văn phòng nha khoa</td><td>Mineola</td><td>NY</td>
	                </tr><tr>
	                    <td>$100,000<br></td><td>Dịch vụ kinh doanh</td><td>Fairfax</td><td>VA</td>
	                </tr><tr>
	                    <td>$75,000</td><td>Trạm xăng</td><td>Charlotte</td><td>NC</td>
	                </tr><tr>
	                    <td>$35,000</td><td>Dịch vụ dọn dẹp</td><td>New Haven</td><td>CT</td>
	                </tr>
	            </tbody>
	        </table>    
	    </p> <!-- End tag-p -->
	</div> <!-- End container -->



@endsection