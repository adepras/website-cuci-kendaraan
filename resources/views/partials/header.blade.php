<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">iWash</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cuci Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Detailing Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('price') }}">Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paket Super</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                </ul>
                <div class="d-flex nav-button">
                    <button class="btn btn-primary nav-login">Login</button>
                    <button class="btn btn-primary nav-daftar">Daftar</button>
                </div>
            </div>
        </div>
    </nav>
</header>
