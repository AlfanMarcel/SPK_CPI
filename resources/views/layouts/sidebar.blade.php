<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="{{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="/"><i class="fas fa-fire"></i>
            <span>Dashboard</span></a></li>
    <li class="menu-header">Data</li>
    {{-- <li class="{{ Request::is('admin') ? 'active' : '' }}"><a class="nav-link" href="/admin"><i class="fas fa-user"></i>
            <span>Admin</span></a></li> --}}
    <li class="nav-item dropdown {{ Request::is('alternatifs') || Request::is('criteria') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
            <span>Alternatif</span></a>
        <ul class="dropdown-menu">
            <li class="{{ Request::is('alternatifs') ? 'active' : '' }}"><a class="nav-link" href="/alternatifs">
                    Alternatif</a></li>
            <li class="{{ Request::is('avalue') ? 'active' : '' }}"><a class="nav-link" href="/avalue">
                    Nilai Alternatif</a></li>
        </ul>
    </li>
    <li class="{{ Request::is('criterias') ? 'active' : '' }}"><a class="nav-link" href="/criterias"><i
                class="fas fa-th-large"></i>
            <span>Kriteria</span></a></li>
    <li class="{{ Request::is('/calculate') ? 'active' : '' }}"><a class="nav-link" href="/calculate"><i
                class="fas fa-calculator"></i>
            <span>Perhitungan</span></a></li>
</ul>
