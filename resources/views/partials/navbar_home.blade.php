 <ul class="nav navbar-nav">
    <li class="active" ><a href="{{ url('/') }}">TRANG CHỦ</a></li>
    <li  class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SẢN PHẨM TÀI CHÍNH<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('overview') }}">Tổng Quan</a></li>
            <li><a href="{{ route('product') }}">Sản Phẩm Tài Chính</a></li>
            <li><a href="{{ route('program') }}">Các Loại Chương Trình</a></li>
            <li><a href="{{ route('faq') }}">Hỏi Đáp </a></li>
        </ul>
    </li>
    <li  class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">KHÁCH HÀNG<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('you') }}">Chúng Tôi Dành Cho Bạn ?</a></li>
            <li><a href="{{ route('transaction') }}">Giao Dịch Gần Đây</a></li>
            <li><a href="{{ route('privacy') }}">Chính Sách Riêng Tư</a></li>
        </ul>
    </li>
    <li  class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">GIỚI THIỆU<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('about') }}">Tổng Quan</a></li>
            <li><a href="{{ route('career') }}">Tuyển Dụng</a></li>
        </ul>
    </li>
    <li  ><a href="{{ route('contact') }}">LIÊN HỆ</a></li>
    <li  ><a href="{{ route('apply.index') }}">ÁP DỤNG<span class="apply-img float"></span></a></li>
</ul>  