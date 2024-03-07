<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" height="40">
            <a class="navbar-brand" href="/">DISKOMINFO Kab.Tegal</a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ml-3">
                <li class="nav-item ms-3">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">Profil</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link {{ Request::is('announcement') ? 'active' : '' }}" href="{{ url('/announcment') }}">Pengumuman</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link {{ Request::is('registration') ? 'active' : '' }}" href="{{ url('/registration') }}">Registrasi</a>
                </li>
                <li class="nav-item ms-3">
                    <a href="{{ url('/login') }}" class="btn btn-light btn-block rounded-5">LOGIN <i class="icon-circle-right2 position-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
