<!doctype html>
<html lang="en">

<head>
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

    <!-- Bootstrap Bundle with Popper -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <title>Yayasan Al-Mubarok</title>

    <!-- Icon -->
    <link rel="icon" href="{{ asset('Assets/yayasan1.png') }}" type="image/x-icon">
    <style>
        body {
            background: linear-gradient(to bottom, #ffffff, #e0f7fa);
        }

        .card-body {
            background-color: rgba(48, 235, 147, 0.35) !important;
        }

        /* Menghapus efek hover */
        .card-body:hover {
            background-color: rgba(48, 235, 147, 0.35) !important;
            box-shadow: none !important;
            transition: none !important;
        }
    </style>
</head>

<body>
    <section id="hero">
        <nav class="navbar navbar-expand-lg navbar-light">
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
                            <a class="nav-link active" href="{{ url('/') }}">HOME</a>
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
                </div>
            </div>
        </nav>

        <div class="content-container col-12 text-center" style="padding-top: 10px">
            <h2>Kontak</h2>
            <span class="sub-title">Hubungi Kami, Wujudkan Kepedulian Anda</span>
            <div class="container my-5">
                <div class="card-body">
                    <h2 class="text-center">Panti Asuhan Al-Mubarok</h2>
                    <p class="text-center text-muted">Jl. Kh. Mustofa No.27, RT.005/RW.003, Poris Gaga Baru,<br>
                        Kec. Batuceper, Kota Tangerang, Banten 15122, Indonesia</p>
                    <div class="my-4 text-center">
                        <!-- Peta -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63458.894351809366!2d106.60027556953122!3d-6.23987346178953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8fde38f5ce9%3A0x3b6e24bf80f55e7c!2sPanti%20Asuhan%20Al%20Mubarok!5e0!3m2!1sid!2sid!4v1733667560475!5m2!1sid!2sid"  width= "100%" height= "500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6">
                            <h5>Telepon</h5>
                            <p>(021) 51281485</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Instagram</h5>
                            <a href="https://www.instagram.com/yayasan.almubarok/">@yayasan.almubarok</a>
                        </div>
                    </div>
                    <br >
                    <h5 class="text-center">Jam Operasional</h5>
                    <ul class="list-unstyled text-center">
                        <li>Senin: 08.00 - 16.00</li>
                        <li>Selasa: 08.00 - 04.00</li>
                        <li>Rabu: 08.00 - 16.00</li>
                        <li>Kamis: 08.00 - 16.00</li>
                        <li>Jumat: 08.00 - 16.00</li>
                        <li>Sabtu: 08.00 - 13.00</li>
                        <li>Minggu: Tutup</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
