<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    <a href="{{ route('teacher.index') }}" class="nav-link {{ Request::is('teacher') ? 'active' : '' }}">
        <i class="fa fa-address-card"></i>
        <p>Administrar Docentes</p>
    </a>
</li>
