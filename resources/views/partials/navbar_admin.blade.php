@if(Auth::check())
    <br>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('showInfoCustomer') }}">Customers</a>
        </li>
        <li>
            <a href="{{ route('showInfoCareer') }}">Careers</a>
        </li>
        <li>
            <a href="{{ route('showContentEmail') }}">Email Template</a>
        </li>
        <li>
            <a href="{{ route('showAccountAdmin') }}">Account Admin</a>
        </li>
        
        
        <li>
            <a href="{{ route('admin.logout') }}" class="pull-right">Log Out</a>
        </li>
        
    </ol>
    <br>
@endif