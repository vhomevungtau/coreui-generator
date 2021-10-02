<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('images/logo.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('images/logo_sm.png') }}" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('images/logo-dark.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('images/logo_sm_dark.png') }}" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            {{-- Dashboard --}}
            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Tổng quan </span>
                </a>
            </li>

             {{-- User manager --}}
             <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                    aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Quản lý người dùng </span>
                    <span class="menu-arrow"></span>
                </a>

                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('admin.users.index') }}">Người dùng</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.roles.index') }}">Vai trò</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.permissions.index') }}">Quyền hạn</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.tags.index') }}">Thẻ người dùng</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Setting --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                    aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil uil-server-connection"></i>
                    <span> Cài đặt </span>
                    <span class="menu-arrow"></span>
                </a>

                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('admin.colors.index') }}">Màu sắc</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('admin.roles.index') }}">Vai trò</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.permissions.index') }}">Quyền hạn</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.tags.index') }}">Thẻ người dùng</a>
                        </li> --}}
                    </ul>
                </div>
            </li>



            {{-- Logout --}}
            <li class="side-nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                <a href="{{ route('logout') }}" class="side-nav-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="uil-folder-plus"></i>
                    <span> Đăng xuất </span>

                </a>
            </li>
        </ul>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>


