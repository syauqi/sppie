<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{route('admin')}}">SPPIE</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('admin')}}">SPP</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item dropdown {{ set_active(['admin']) }}">
            <a href="{{ route('admin')}}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Pengelolaan Data Siswa</li>
        <li class="nav-item dropdown {{ set_active(['data-siswa.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i>
                <span>Siswa</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('data-siswa.index') }}">Data Siswa</a></li>
                <li><a class="nav-link" href="{{ route('data-siswa.create') }}">Tambah Data Siswa</a></li>
            </ul>
        </li>
        <li class="menu-header">Pengelolaan Data Kelas</li>
        <li class="nav-item dropdown {{ set_active(['data-kelas.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i>
                <span>Kelas</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('data-kelas.index') }}">Data Kelas</a></li>
                <li><a class="nav-link" href="{{ route('data-kelas.create') }}">Tambah Data Kelas</a></li>
            </ul>
        </li>
        <li class="menu-header">Pengelolaan Data Petugas</li>
        <li class="nav-item dropdown {{ set_active(['data-petugas.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                <span>Petugas</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('data-petugas.index') }}">Data Petugas</a></li>
                <li><a class="nav-link" href="{{ route('data-petugas.create') }}">Tambah Data Petugas</a></li>
            </ul>
        </li>
        <li class="menu-header">Pengelolaan Data SPP</li>
        <li class="nav-item dropdown" {{ set_active(['data-spp.*']) }}>
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-dollar-sign"></i>
                <span>SPP</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('data-spp.index') }}">Data SPP</a></li>
                <li><a class="nav-link" href="{{ route('data-spp.index') }}">Log History SPP</a></li>
            </ul>
        </li>
    </ul>

    <div class=" mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{ route('data-spp.create') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-plus"></i> Tambah Transaksi
        </a>
    </div>
</aside>