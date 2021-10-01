<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon fa fa-users"></i>
        <span>Quản trị người dùng</span>
    </a>

    <ul class="nav-dropdown-items">
        <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
            <a class="nav-link" href="{!! route('users.index') !!}">
                <i class="nav-icon"></i>
                <span>Người dùng</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('roles.index') }}">
                <i class="nav-icon"></i>
                <span>Vai trò</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('permissions*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('permissions.index') }}">
                <i class="nav-icon"></i>
                <span>Quyền hạn</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('tags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tags.index') }}">
        <i class="nav-icon fa fa-tags"></i>
        <span>Thẻ người dùng</span>
    </a>
</li>
