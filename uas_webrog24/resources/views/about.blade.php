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
    <title>Tentang Yayasan Al-Mubarok</title>

    <!-- Icon -->
    <link rel="icon" href="{{ asset('Assets/yayasan1.png') }}" type="image/x-icon"> 
</head>

<body>
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

        <!-- About Us Section -->
    <section id="about-us" class="py-5 mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2>Struktur Organisasi Yayasan Al-Mubarok</h2>
                    <p class="sub-title">Pimpinan, Sekretaris, Bendahara, Ketua dan Bidang-Bidang</p>
                </div>
            </div>

            <div class="row mt-5">
                <!-- Kartu Sejarah Yayasan -->
                <div class="col-md-6 mb-4">
                    <div class="card-custom">
                        <h3 class="card-title">Sejarah Yayasan</h3>
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                </div>

                <!-- Kartu Visi dan Misi -->
                <div class="col-md-6 mb-4">
                    <div class="card-custom">
                        <h3 class="card-title">Visi dan Misi</h3>
                        <p class="card-text"><strong>Visi:</strong> Menjadi yayasan yang memberikan kontribusi nyata dalam meningkatkan kesejahteraan anak-anak dan masyarakat yang membutuhkan.</p>
                        <p class="card-text"><strong>Misi:</strong> Memberikan pendidikan, pelatihan keterampilan, serta bantuan sosial bagi mereka yang kurang mampu dan membutuhkan di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

                <div class="container">
                    <h2>Struktur Organisasi Yayasan Al-Mubarok</h2>
                    <p class="sub-title">Pimpinan, Sekretaris, Bendahara, Ketua dan Bidang-Bidang</p>

                    <div class="structure-container">
                        <!-- Pimpinan -->
                        <div class="structure-box">
                            <h3>Pimpinan Yayasan Al-Mubarok</h3>
                            <p>Ahmad Khoirudin, SQ</p>
                        </div>
                        
                        <!-- Garis Penghubung (Connector) -->
                        <div class="connector" style="height: 40px; top: 55%"></div>

                        <!-- Sekretaris, Bendahara, dan Ketua -->
                        <div class="child-structure">
                            <div class="structure-box">
                                <h3>Sekretaris</h3>
                                <p>Achmad Choirudin</p>
                            </div>
                            <div class="structure-box">
                                <h3>Bendahara</h3>
                                <p>M. Fauzi Ramin S</p>
                            </div>
                            <div class="structure-box">
                                <h3>Ketua</h3>
                                <p>Musbiki Ahlul Fikri, S.Pd</p>
                            </div>
                        </div>

                        <!-- Garis Penghubung -->
                        <div class="connector" style="height: 40px; top: 55%"></div>

                        <!-- Bidang-Bidang -->
                        <div class="child-structure">
                            <div class="structure-box">
                                <h3>Bidang Pendidikan & Dakwah</h3>
                                <p>Ust. Agus Mulyadi, S.Pd</p>
                            </div>
                            <div class="structure-box">
                                <h3>Bidang Humas</h3>
                                <p>Ust. Sayidina Yusu, S.Pd</p>
                            </div>
                            <div class="structure-box">
                                <h3>Bidang Seni & Budaya</h3>
                                <p>Ust. Makbullah</p>
                            </div>
                            <div class="structure-box">
                                <h3>Bidang Life Skill</h3>
                                <p>Sapardarmawan Edy Sutrisno</p>
                            </div>
                            <div class="structure-box">
                                <h3>Bidang Usaha</h3>
                                <p>Zaeny Purnama A.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
