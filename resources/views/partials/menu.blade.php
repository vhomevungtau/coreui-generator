<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{ route('admin.index') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('images/logosite.png') }}" alt="" height="22">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('images/spa.png') }}" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{ route('admin.index') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('images/logosite.png') }}" alt="" height="22">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('images/spa.png') }}" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            {{-- Dashboard --}}
            <li class="side-nav-item">
                <a href="{{ route('admin.index') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Tổng quan </span>
                </a>
            </li>

             {{-- User manager --}}
             <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarUser" aria-expanded="false"
                    aria-controls="sidebarUser" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Quản lý người dùng </span>
                    <span class="menu-arrow"></span>
                </a>

                <div class="collapse" id="sidebarUser">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('admin.users.index') }}">Người dùng</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.roles.index') }}">Vai trò</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('admin.permissions.index') }}">Quyền hạn</a>
                        </li> --}}

                    </ul>
                </div>
            </li>

            {{-- Product manager --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProduct" aria-expanded="false"
                    aria-controls="sidebarProduct" class="side-nav-link">
                    <i class="mdi mdi-cart-variant"></i>
                    <span> Quản trị dịch vụ </span>
                    <span class="menu-arrow"></span>
                </a>

                <div class="collapse" id="sidebarProduct">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('admin.products.index') }}">Dịch vụ</a>
                            <a href="{{ route('admin.prices.index') }}">Giá dịch vụ</a>
                            <a href="{{ route('admin.orders.index') }}">Đơn hàng</a>
                            <a href="{{ route('admin.books.index') }}">Lịch hẹn</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Setting --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarSetting" aria-expanded="false"
                    aria-controls="sidebarSetting" class="side-nav-link">
                    <i class="mdi mdi-theme-light-dark"></i>
                    <span> Cài đặt </span>
                    <span class="menu-arrow"></span>
                </a>

                <div class="collapse" id="sidebarSetting">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('admin.themes.index') }}">Giao diện</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.statuses.index') }}">Trạng thái</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.servers.index') }}">Máy chủ tin nhắn</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.templates.index') }}">Mẫu tin nhắn</a>
                        </li>
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
                    <i class="mdi mdi-logout"></i>
                    <span> Đăng xuất </span>

                </a>
            </li>
        </ul>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>


