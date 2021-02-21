<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image"
                    src="https://ui-avatars.com/api/?background=fff&color=0D8ABC&name={{ Auth::user()->name }}"
                    class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hello, {{ Auth::user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">INFORMASI USER</div>
                <form action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger text-small">
                        <i class="fas fa-sign-out-alt"></i> &nbsp; Keluar
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>