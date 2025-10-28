<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - Bina Desa</title>
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
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-end">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <!-- <img src="assets-guest/img/logo.png" alt=""> -->
          <!-- Uncomment the line below if you also wish to use a text logo -->
          <h1 class="sitename">Bina Desa</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('users.index') }}">User</a></li>
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
    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

<section class="starter-section">
  <div class="container">
    <div class="row gy-4">
      @foreach ($dataKejadian as $item)
        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ route('kejadian.index', $item->kejadian_id) }}" class="disaster-link">
            <div class="disaster-card text-center p-5">
              <div class="disaster-icon">
                <i class="fas fa-exclamation-triangle"></i>
              </div>
              <h5 class="mt-3">{{ $item->jenis_bencana }}</h5>
              <p><i class="fas fa-calendar-alt me-1 text-primary"></i> {{ $item->tanggal }}</p>
              <p><i class="fas fa-map-marker-alt me-1 text-danger"></i> {{ $item->lokasi_text }}</p>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>

 </section><!-- /Featured Services Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Bina Desa</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Pekanbaru</p>
            <p>Pekanbaru, 28292</p>
            <p class="mt-3"><strong>Phone:</strong> <span>0877823326</span></p>
            <p><strong>Email:</strong> <span>info@inforumbai.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Bina Desa</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
