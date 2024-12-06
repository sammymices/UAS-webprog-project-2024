<nav class="navbar navbar-expand-lg navbar-light bg-transparent position-fixed w-100" style="background-color: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('Assets/yayasan1.png') }}" alt="" width="34" class="d-inline-block align-text-top me-3">
            Yayasan Al-Mubarok
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('/about') }}">ABOUT US</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('/program') }}">PROGRAM</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('/donasi') }}">DONASI</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('/kontak') }}">KONTAK</a>
                </li>
            </ul>
            <div>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ route('dashboard') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Masuk</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Daftar</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
