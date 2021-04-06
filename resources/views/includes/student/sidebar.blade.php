<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">SPPIE</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item dropdown active">
            <a href="{{ route('admin')}}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <li class="menu-header">History Data SPP</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-dollar-sign"></i>
                <span>SPP</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('data-log-spp.index') }}">Data SPP Kamu</a></li>
            </ul>
        </li>
    </ul>
</aside>