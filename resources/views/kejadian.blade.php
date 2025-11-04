<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Laporan Bina Desa</title>
    <meta name="description" content="Sistem Pelaporan dan Informasi Bencana Bina Desa">
    <meta name="keywords" content="bencana, laporan, posko, bina desa">

    {{-- CSS START --}}
    <link href="{{ asset('assets-guest/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets-guest/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('assets-guest/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-guest/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-guest/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-guest/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-guest/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-guest/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets-guest/css/main.css') }}" rel="stylesheet">

    <style>
        .no-data-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .disaster-article-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .disaster-article-card:hover {
            transform: translateY(-5px);
            text-decoration: none;
        }

        .disaster-article-icon {
            font-size: 2.5rem;
            color: #dc3545;
        }

        .disaster-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            transition: transform 0.3s ease;
            height: 100%;
        }

        .disaster-card:hover {
            transform: translateY(-5px);
            text-decoration: none;
        }

        .disaster-icon {
            font-size: 2rem;
            color: #007bff;
        }

        .disaster-link {
            text-decoration: none;
            color: inherit;
        }

        .disaster-link:hover {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">
        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-end">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
                    <img src="{{ asset('assets-guest/img/logo.png') }}" alt="Logo Bina Desa">
                    <h1 class="sitename">Bina Desa</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/user') }}">User</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">
        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section relative bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('img/bg_kejadian.jpeg') }}'); min-height: 100vh; padding: 2rem 0;">

            <div class="container">
                <div class="row gy-4">

                    <!-- Disaster Information Card -->
                    <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                        @if(isset($dataKejadian) && $dataKejadian)
                            <a href="#" class="disaster-link">
                                <div class="disaster-article-card d-flex flex-column flex-md-row align-items-center p-4">
                                    <div class="disaster-article-icon me-md-4 mb-3 mb-md-0">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="disaster-article-content text-center text-md-start">
                                        <h3 class="fw-bold mb-2">{{ $dataKejadian->jenis_bencana ?? 'Jenis Bencana Tidak Diketahui' }}</h3>
                                        <p class="text-muted mb-2">
                                            <i class="fas fa-calendar-alt me-1 text-primary"></i>
                                            {{ $dataKejadian->tanggal ?? 'Tanggal tidak tersedia' }}
                                            |
                                            <i class="fas fa-map-marker-alt me-1 text-danger"></i>
                                            {{ $dataKejadian->lokasi_text ?? 'Lokasi tidak tersedia' }}
                                        </p>
                                        <p class="mb-0">
                                            @if(isset($dataKejadian->dampak))
                                                {{ Str::limit($dataKejadian->dampak, 120, '...') }}
                                            @else
                                                Informasi dampak belum tersedia.
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @else
                            <div class="no-data-card">
                                <div class="disaster-article-icon mb-3">
                                    <i class="fas fa-info-circle text-warning"></i>
                                </div>
                                <h3 class="fw-bold mb-2">Tidak Ada Data Kejadian</h3>
                                <p class="text-muted">Data kejadian bencana saat ini tidak tersedia.</p>
                            </div>
                        @endif
                    </div>

                    <!-- Command Posts -->
                    @if(isset($dataPosko) && count($dataPosko) > 0)
                        @foreach ($dataPosko as $item)
                            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                                <a href="#" class="disaster-link">
                                    <div class="disaster-card text-center p-4">
                                        <div class="disaster-icon">
                                            <i class="fas fa-first-aid"></i>
                                        </div>
                                        <h5 class="mt-3">{{ $item->nama ?? 'Posko Tanpa Nama' }}</h5>
                                        <p><i class="fas fa-map-marker-alt me-1 text-primary"></i> {{ $item->alamat ?? 'Alamat tidak tersedia' }}</p>
                                        <p><i class="fas fa-user-alt me-1 text-dark"></i> {{ $item->penanggung_jawab ?? 'Penanggung jawab tidak tersedia' }}</p>
                                        <p><i class="fas fa-phone-alt me-1 text-success"></i> {{ $item->kontak ?? 'Kontak tidak tersedia' }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="no-data-card">
                                <div class="disaster-article-icon mb-3">
                                    <i class="fas fa-campground text-info"></i>
                                </div>
                                <h3 class="fw-bold mb-2">Tidak Ada Posko Tersedia</h3>
                                <p class="text-muted">Data posko penanggulangan bencana saat ini tidak tersedia.</p>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </section><!-- /Featured Services Section -->
    </main>

    <footer id="footer" class="footer light-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                        <span class="sitename">Bina Desa</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Pekanbaru</p>
                        <p>Pekanbaru, 28292</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>0877823326</span></p>
                        <p><strong>Email:</strong> <span>info@inforumbai.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Tautan Berguna</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                        <li><a href="{{ url('/services') }}">Layanan</a></li>
                        <li><a href="{{ url('/contact') }}">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="#">Pelaporan Bencana</a></li>
                        <li><a href="#">Informasi Posko</a></li>
                        <li><a href="#">Koordinasi Darurat</a></li>
                        <li><a href="#">Edukasi Bencana</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Pusat Bantuan</h4>
                    <p>Hubungi kami untuk informasi darurat:</p>
                    <div class="mt-3">
                        <p><strong>Darurat:</strong> <span class="text-danger">112</span></p>
                        <p><strong>Posko Utama:</strong> <span>(0761) 12345</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Bina Desa</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets-guest/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-guest/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets-guest/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets-guest/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets-guest/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets-guest/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets-guest/js/main.js') }}"></script>

</body>
</html>
