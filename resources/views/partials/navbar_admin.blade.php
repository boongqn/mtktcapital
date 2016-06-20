@if(Auth::check())
    <br>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin') }}">Admin</a>
        </li>
        <li>
            <a href="{{ route('showInfoCustomer') }}">Thông tin khách hàng</a>
        </li>
        <li>
            <a href="{{ route('showInfoCareer') }}">Thông tin tuyển dụng</a>
        </li>
        <li>
            <a href="{{ route('showContentEmail') }}">Mẫu thông báo E-Mail</a>
        </li>
        <li>
            <a href="{{ route('showAccountAdmin') }}">Quản lý tài khoản Admin</a>
        </li>
        
        
        <li>
            <a href="{{ route('admin.logout') }}" class="pull-right">Log out</a>
        </li>
        
    </ol>
    <br>
@endif