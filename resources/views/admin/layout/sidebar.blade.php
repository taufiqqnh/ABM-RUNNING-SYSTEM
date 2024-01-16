<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item active ">
            <a href="index.html" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Components</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Accordion</a>

                </li>

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Alert</a>

                </li>

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Badge</a>

                </li>
            </ul>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-collection-fill"></i>
                <span>Extra Components</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Avatar</a>

                </li>

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Comment</a>

                </li>
            </ul>

        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Layouts</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">Default Layout</a>

                </li>

                <li class="submenu-item  ">
                    <a href="#" class="submenu-link">1 Column</a>

                </li>
            </ul>


        </li>
        <li class="sidebar-title">Menu</li>

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
            </ul