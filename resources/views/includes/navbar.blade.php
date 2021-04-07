<nav class="navbar navbar-expand-lg navbar-light sticky-top p-2 p-md-4">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{ url('stisla/assets/img/stisla-fill.svg')}}" width="40" height="40"
                class="d-inline-block align-top" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
            aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item me-2">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page"
                        href="{{url('/')}}">Beranda</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link {{ (request()->is('tentang-kami')) ? 'active' : '' }}"
                        href="{{url('tentang-kami')}}">Tentang</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link {{ (request()->is('faq')) ? 'active' : '' }}" href="{{url('faq')}}">FAQ</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link {{ (request()->is('kontak')) ? 'active' : '' }}"
                        href="{{url('kontak')}}">Kontak</a>
                </li>
            </ul>
            <a href=" {{ url('/auth')}}" class="btn btn-primary px-4 py-2">Masuk</a>
        </div>
    </div>
</nav>