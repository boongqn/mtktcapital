<ul class="nav navbar-nav">
    <li class="active">
        <a href="{{ url('/') }}">Back Home</a>
    </li>

     <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Customers <b class="caret"></b></a>
        </a> 
        <ul class="dropdown-menu">
            <li><a href="{{  route('admin.customer.mail') }}">Manager Mail</a></li>
        </ul>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{ strtoupper(Auth::user()->name) }} <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="{{  route('admin.logout') }}">Logout</a></li>
        </ul>
    </li>
</ul>