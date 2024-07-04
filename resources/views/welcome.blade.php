<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="asetlandingpage/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="asetlandingpage/css/styles.css" rel="stylesheet" />
</head>

<body class="bg-light">
    <header>
        <div class="text-center mt-2 mb-2">
            <div class="container">
                <div class="row gx-5 justify-content-center">
                    <div class="col-sm-12">
                        <img src="asetlandingpage/assets/logos/logo-pemkot.png" alt="Logo Sanki" style="height: 2rem" />
                        <img src="asetlandingpage/assets/logos/kominfo.png" alt="Logo Sanki" style="height: 2rem" />
                        <img src="asetlandingpage/assets/logos/Logo_BSSN_new.png" alt="Logo Sanki" style="height: 2rem" />
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Sanki Support</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="" id="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- App features section-->
    <section id="features">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <a href="#" style="text-decoration:none">
                                    <div class="text-center">
                                        <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt text-dark">Layanan Video Conference</h3>
                                        <p class="text-muted mb-0">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <a href="#" style="text-decoration:none">
                                    <div class="text-center">
                                        <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt text-dark">Layanan CCTV</h3>
                                        <p class="text-muted mb-0">Layanan periksa CCTV Balai Kota</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <a href="#" style="text-decoration:none">
                                    <div class="text-center">
                                        <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt text-dark">Layanan Email</h3>
                                        <p class="text-muted mb-0">Layanan Pengajuan Prubahan Penghapusan Email kedirikota</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <a href="#" style="text-decoration:none">
                                    <div class="text-center">
                                        <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt text-dark">Layanan TTE</h3>
                                        <p class="text-muted mb-0">Layanan Pengajuan Pembaruan TTE</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                        <source src="asetlandingpage/assets/img/demo-screen-2.mp4" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-dark text-center py-2">
        <div class="container">
            <div class="text-white small">
                <div class="">&copy; Sanki Support 2024 All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
                <span class="mx-1"></span>
                <a href="#!">@if (Route::has('login'))
                    <nav class="">
                        @auth
                        <a href="{{ url('/home') }}" class="">
                            Dashboard
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="">
                            Log in
                        </a>
                        @endauth
                    </nav>
                    @endif
                </a>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="asetlandingpage/js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>