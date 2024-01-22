<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item active ">
            <a href="{{route('admin.dashboard.index')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item ">
            <a href="{{route('home.index')}}" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="sidebar-item ">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-person-fill"></i>
                <span>About</span>
            </a>
        </li>
        <li class="sidebar-item ">
            <a href="{{route('activity.index')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Activity</span>
            </a>
        </li>
        <li class="sidebar-item ">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-people-fill"></i>
                <span>Team</span>
            </a>
        </li>
        <li class="sidebar-item ">
            <a href="{{route('contactus.index')}}" class='sidebar-link'>
                <i class="bi bi-person-lines-fill"></i>
                <span>Contack Us</span>
            </a>
        </li>
       
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-calendar2-event-fill"></i>
                <span>Event</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Kategori</a>

                </li>

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Nama Event</a>

                </li>
            </ul>

        </li>

        <li class="sidebar-title">Menu Profile</li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-collection-fill"></i>
                <span>Profile</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Edit Profile</a>

                </li>

                <li class="submenu-item  ">
                    <a href="{{ route('logout') }}" class="submenu-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
       {{ __('Logout') }}</a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

                </li>
            </ul>

        </li>
    </ul>
</div>