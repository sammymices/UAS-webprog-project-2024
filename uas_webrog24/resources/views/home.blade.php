<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Responsive.css') }}">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Yayasan Al-Mubarok</title>

    <!-- Icon -->
    <link rel="icon" href="{{ asset('Assets/yayasan1.png') }}" type="image/x-icon">
</head>

<body>

    <!-- Hero Section -->
    <section id="hero">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-fixed w-100">
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

        <!-- Tagline -->
        <div class="container h-100 d-flex align-items-center justify-content-end">
    <div class="row h-100">
        <div class="col-lg-6 col-sm-12 hero-tagline my-auto">
            <h1>Mewujudkan Penerus yang berperilaku sesuai dengan nilai-nilai islam</h1>
            <p>
                <span class="fw-bold">Bersama Al Mubarok, </span>kita menanam nilai-nilai Islam. Bersama-sama, kita wujudkan masa depan yang gemilang
            </p>
            <button class="button-lg-secondary me-4">Donasi</button>
            <a href="#rekomendasi">
                <img src="{{ asset('Assets/Right Arrow.png') }}" alt="">
            </a>
        </div>
    </div>
    <img src="{{ asset('Assets/yayasan2.png') }}" class="position-absolute end-0 me-5" style="padding-right: 90px; padding-top: 27px" width="auto" height="450" alt="">
    <img src="{{ asset('Assets/Accsent 1.png') }}" alt="" class="h-100 position-absolute top-0 start-0 accsent-img">
</div>
    </section>
    <!-- End navbar -->

</body>

</html>