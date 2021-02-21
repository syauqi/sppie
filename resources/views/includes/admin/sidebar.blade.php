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
        </li>
        <li class="menu-header">Pengelolaan Data Siswa</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i>
                <span>Siswa</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('data-siswa.index') }}">Data Siswa</a></li>
                <li><a class="nav-link" href="bootstrap-badge.html">Tambah Data Siswa</a></li>
            </ul>
        </li>
        <li class="menu-header">Pengelolaan Data Kelas</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i>
                <span>Kelas</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="bootstrap-alert.html">Data Kelas</a></li>
                <li><a class="nav-link" href="bootstrap-badge.html">Tambah Data Kelas</a></li>
            </ul>
        </li>
        <li class="menu-header">Pengelolaan Data Petugas</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                <span>Petugas</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="bootstrap-alert.html">Data Petugas</a></li>
                <li><a class="nav-link" href="bootstrap-badge.html">Tambah Data Petugas</a></li>
            </ul>
        </li>
        <li class="menu-header">Pengelolaan Data SPP</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-dollar-sign"></i>
                <span>SPP</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="bootstrap-alert.html">Data SPP</a></li>
            </ul>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-plus"></i> Tambah Transaksi
        </a>
    </div>
</aside>