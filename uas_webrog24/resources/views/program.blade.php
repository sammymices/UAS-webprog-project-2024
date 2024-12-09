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
    <style>
        body {
            background: linear-gradient(to bottom, #ffffff, #e0f7fa);
        }
    </style>
</head>

<body>
    <section id="hero">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar"
            style="background-image: inherit; background-color: inherit;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('Assets/yayasan1.png') }}" alt="" width="34"
                        class="d-inline-block align-text-top me-3">
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
                                    <a href="{{ route('dashboard') }}"
                                        class="bg-blue-500 text-white px-4 py-2 rounded">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Masuk</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="bg-blue-500 text-white px-4 py-2 rounded">Daftar</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        <div class="content-container col-12 text-center" style="padding-top: 10px">
            <h2>Program</h2>
            <span class="sub-title">Kegiatan dan Program Tahunan Yayasan Al-Mubarok</span>
            <div class="mb-8">
                <div class="container mx-auto p-5">
                    <div class="relative">
                        @foreach ($programs as $index => $program)
                            <div class="program-item" id="program-{{ $index }}"
                                style="display: {{ $index === 0 ? 'block' : 'none' }}">
                                <h4 class="text-2xl font-bold">{{ $program->title }}</h4>
                                <img src="{{ asset($program->image) }}" alt="{{ $program->title }}" class="my-4">
                                <p class="text-gray-700">{{ $program->description }}</p>
                            </div>
                        @endforeach

                        <button id="prev"
                            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-green-500 text-white p-2 rounded">Kembali</button>
                        <button id="next"
                            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-green-500 text-white p-2 rounded">Selanjutnya</button>
                    </div>
                </div>
            </div>

            <script>
                let currentIndex = 0;
                const programs = document.querySelectorAll('.program-item');
                const totalPrograms = programs.length;

                // Fungsi untuk menampilkan program yang sesuai dengan indeks saat ini
                function showProgram(index) {
                    programs.forEach((program, idx) => {
                        program.style.display = (idx === index) ? 'block' : 'none'; // Tampilkan program yang sesuai, sembunyikan yang lain
                    });
                }

                // Tampilkan program pertama
                showProgram(currentIndex);

                // Tombol Next untuk melihat program berikutnya
                document.getElementById('next').addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % totalPrograms; // Arahkan ke program berikutnya
                    showProgram(currentIndex);
                });

                // Tombol Prev untuk melihat program sebelumnya
                document.getElementById('prev').addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + totalPrograms) % totalPrograms; // Arahkan ke program sebelumnya
                    showProgram(currentIndex);
                });
            </script>


</body>