<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard - Bina Desa</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  {{-- CSS START --}}

<link href="{{ asset('assets-guest/img/favicon.png') }}" rel="icon">
<link href="{{ asset('assets-guest/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link href="{{ asset('assets-guest/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets-guest/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets-guest/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets-guest/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets-guest/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets-guest/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets-guest/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    /* Font styles only */
    .nav-icon {
      margin-right: 8px;
      width: 20px;
      text-align: center;
    }

    .footer-icon {
      margin-right: 8px;
    }

    .btn-icon {
      margin-right: 5px;
    }

    .action-btn {
      display: inline-flex;
      align-items: center;
      margin: 2px;
    }

    .header-actions {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .action-icon {
      font-size: 1.2rem;
      color: #6c757d;
      transition: color 0.3s ease;
    }

    .action-icon:hover {
      color: #0d6efd;
    }

    .user-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }

    .social-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: rgba(0, 0, 0, 0.1);
      margin-right: 10px;
      transition: all 0.3s ease;
    }

    .social-icon:hover {
      background: #0d6efd;
      transform: translateY(-3px);
    }

    .about-section {
      padding: 80px 0;
      background-color: #f8f9fa;
    }

    .module-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      margin-bottom: 30px;
      overflow: hidden;
    }

    .module-card:hover {
      transform: translateY(-10px);
    }

    .module-img {
      height: 200px;
      overflow: hidden;
    }

    .module-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .module-card:hover .module-img img {
      transform: scale(1.1);
    }

    .module-content {
      padding: 25px;
    }

    .module-icon {
      font-size: 2.5rem;
      color: #0d6efd;
      margin-bottom: 15px;
    }

    .process-flow {
      position: relative;
      padding: 50px 0;
    }

    .process-step {
      text-align: center;
      position: relative;
      z-index: 1;
    }

    .step-number {
      width: 60px;
      height: 60px;
      background: #0d6efd;
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 1.5rem;
      font-weight: bold;
    }

    .process-connector {
      position: absolute;
      top: 30px;
      left: 50%;
      width: 100%;
      height: 2px;
      background: #0d6efd;
      z-index: 0;
    }

    @media (max-width: 768px) {
      .process-connector {
        display: none;
      }
    }

    .disaster-link {
      text-decoration: none;
      color: inherit;
    }

    .disaster-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      height: 100%;
    }

    .disaster-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .disaster-icon {
      font-size: 3rem;
      color: #dc3545;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">
    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <i class="fas fa-house-damage fa-lg text-primary me-2"></i>
          <h1 class="sitename">Bina Desa</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="">
                <i class="fas fa-home nav-icon"></i>Dashboard
              </a>
            </li>
            <li>
              <a href="">
                <i class="fas fa-users nav-icon"></i>User
              </a>
            </li>
            <li>
              <a href="">
                <i class="fas fa-users nav-icon"></i>Warga
              </a>
            </li>
            <li>
              <a href="#about">
                <i class="fas fa-info-circle nav-icon"></i>Tentang
              </a>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active">
          <img src="assets-guest/img/bg_home.jpeg" alt="">
          <div class="container">
            <h2>Laporan Bencana</h2>
          </div>
        </div><!-- End Carousel Item -->
      </div>
    </section><!-- /Hero Section -->

    <section id="featured-services" class="featured-services section">
      <section class="starter-section">
        <div class="container">

          <div class="row gy-4">
            @foreach ($dataKejadian as $item)
              <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="disaster-card text-center p-4 position-relative">

                  <a href="{{ route('kejadian.index', $item->kejadian_id) }}" class="disaster-link">
                    <div class="disaster-icon">
                      <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h5 class="mt-3">{{ $item->jenis_bencana }}</h5>
                    <p><i class="fas fa-calendar-alt me-1 text-primary"></i> {{ $item->tanggal }}</p>
                    <p><i class="fas fa-map-marker-alt me-1 text-danger"></i> {{ $item->lokasi_text }}</p>
                  </a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="section-title">Tentang Sistem Bina Desa</h2>
            <p class="lead">Platform manajemen bencana terintegrasi untuk membantu masyarakat dan pemerintah daerah</p>
          </div>
        </div>

        <!-- Modules Section -->
        <div class="row mb-5">
          <div class="col-12 text-center mb-4">
            <h3 class="mb-3">Modul Sistem</h3>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="module-card">
              <div class="module-img">
                <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Modul Pelaporan Bencana">
              </div>
              <div class="module-content">
                <div class="module-icon">
                  <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h4>Pelaporan Bencana</h4>
                <p>Modul ini memungkinkan masyarakat untuk melaporkan kejadian bencana secara real-time dengan informasi lokasi, jenis bencana, dan tingkat kerusakan.</p>
                <p><strong>Tujuan:</strong> Mempercepat respons terhadap bencana dengan informasi yang akurat dan tepat waktu.</p>
                <!-- Tombol Aksi Modul -->
                <div class="mt-3">
                  <a href="#" class="btn btn-sm btn-outline-primary action-btn">
                    <i class="fas fa-play btn-icon"></i>Jalankan
                  </a>
                  <a href="#" class="btn btn-sm btn-outline-info action-btn">
                    <i class="fas fa-info-circle btn-icon"></i>Detail
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="module-card">
              <div class="module-img">
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Modul Manajemen Pengguna">
              </div>
              <div class="module-content">
                <div class="module-icon">
                  <i class="fas fa-users-cog"></i>
                </div>
                <h4>Manajemen Pengguna</h4>
                <p>Modul untuk mengelola akses dan peran pengguna dalam sistem, termasuk administrator, petugas lapangan, dan relawan.</p>
                <p><strong>Tujuan:</strong> Menjamin keamanan data dan mengatur hak akses sesuai dengan peran masing-masing pengguna.</p>
                <!-- Tombol Aksi Modul -->
                <div class="mt-3">
                  <a href="#" class="btn btn-sm btn-outline-primary action-btn">
                    <i class="fas fa-play btn-icon"></i>Jalankan
                  </a>
                  <a href="#" class="btn btn-sm btn-outline-info action-btn">
                    <i class="fas fa-info-circle btn-icon"></i>Detail
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="module-card">
              <div class="module-img">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Modul Pemantauan">
              </div>
              <div class="module-content">
                <div class="module-icon">
                  <i class="fas fa-chart-line"></i>
                </div>
                <h4>Pemantauan & Analisis</h4>
                <p>Modul untuk memantau perkembangan penanganan bencana dan menganalisis data untuk perencanaan mitigasi di masa depan.</p>
                <p><strong>Tujuan:</strong> Meningkatkan efektivitas penanganan bencana dan perencanaan pencegahan.</p>
                <!-- Tombol Aksi Modul -->
                <div class="mt-3">
                  <a href="#" class="btn btn-sm btn-outline-primary action-btn">
                    <i class="fas fa-play btn-icon"></i>Jalankan
                  </a>
                  <a href="#" class="btn btn-sm btn-outline-info action-btn">
                    <i class="fas fa-info-circle btn-icon"></i>Detail
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Process Flow Section -->
        <div class="row">
          <div class="col-12 text-center mb-4">
            <h3 class="mb-3">Alur Sistem</h3>
          </div>

          <div class="col-12">
            <div class="process-flow">
              <div class="process-connector"></div>

              <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                  <div class="process-step">
                    <div class="step-number">1</div>
                    <i class="fas fa-edit fa-2x text-primary mb-2"></i>
                    <h5>Pelaporan</h5>
                    <p>Masyarakat melaporkan kejadian bencana melalui aplikasi dengan informasi lengkap</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="process-step">
                    <div class="step-number">2</div>
                    <i class="fas fa-check-circle fa-2x text-success mb-2"></i>
                    <h5>Verifikasi</h5>
                    <p>Petugas memverifikasi laporan dan menilai tingkat urgensi penanganan</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="process-step">
                    <div class="step-number">3</div>
                    <i class="fas fa-tools fa-2x text-warning mb-2"></i>
                    <h5>Penanganan</h5>
                    <p>Tim penanganan bencana dikerahkan ke lokasi sesuai dengan kebutuhan</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="process-step">
                    <div class="step-number">4</div>
                    <i class="fas fa-chart-line fa-2x text-info mb-2"></i>
                    <h5>Pemantauan</h5>
                    <p>Perkembangan penanganan dipantau dan dievaluasi untuk perbaikan sistem</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <i class="fas fa-house-damage fa-lg text-primary me-2"></i>
            <span class="sitename">Bina Desa</span>
          </a>
          <div class="footer-contact pt-3">
            <p><i class="fas fa-map-marker-alt footer-icon"></i>Pekanbaru, 28292</p>
            <p class="mt-3">
              <i class="fas fa-phone footer-icon"></i>
              <strong>Phone:</strong> <span>0877823326</span>
            </p>
            <p>
              <i class="fas fa-envelope footer-icon"></i>
              <strong>Email:</strong> <span>info@inforumbai.com</span>
            </p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://wa.me/0895385268157" class="social-icon"><i class="fab fa-whatsapp"></i></a>
            <a href="" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ route('home') }}"><i class="fas fa-chevron-right footer-icon"></i>Home</a></li>
            <li><a href="#about"><i class="fas fa-chevron-right footer-icon"></i>Tentang</a></li>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>Services</a></li>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>Terms of service</a></li>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Modul Sistem</h4>
          <ul>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>Pelaporan Bencana</a></li>
            <li><a href="{{ route('pages.users.index') }}"><i class="fas fa-chevron-right footer-icon"></i>Manajemen Pengguna</a></li>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>Pemantauan & Analisis</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Bantuan</h4>
          <ul>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>Panduan Penggunaan</a></li>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>FAQ</a></li>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>Kontak Darurat</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Informasi</h4>
          <ul>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>Berita Bencana</a></li>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>Statistik</a></li>
            <li><a href="#"><i class="fas fa-chevron-right footer-icon"></i>Mitigasi Bencana</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Bina Desa</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/"><i class="fas fa-external-link-alt footer-icon"></i>BootstrapMade</a>
        Distributed by <a href="https://themewagon.com"><i class="fas fa-external-link-alt footer-icon"></i>ThemeWagon</a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="fas fa-arrow-up"></i>
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
