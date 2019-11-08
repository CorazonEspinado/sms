<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="{{url('/home')}}">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
        </a>
    </li>
    @cannot('isManager')
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="file"></span>
            Users
        </a>
    </li>
    @endcan
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="shopping-cart"></span>
            Groups
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Roles
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="bar-chart-2"></span>
           Sms history
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span data-feather="layers"></span>
            Send sms
        </a>
    </li>
</ul>
