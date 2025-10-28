<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tambah User - Bina Desa</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  {{-- CSS START --}}
  <link href="{{ asset('assets-guest/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets-guest/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@400;600;700&family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">

  <link href="{{ asset('assets-guest/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-guest/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-guest/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-guest/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-guest/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-guest/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets-guest/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <!-- Header -->
  <header id="header" class="header sticky-top">

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-end">
        <a href="{{ route('home.index') }}" class="logo d-flex align-items-center me-auto">
          <h1 class="sitename">Bina Desa</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('users.index') }}" class="active">User</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <!-- Main -->
  <main class="main">

    <!-- Section Form -->
    <section id="user-form" class="section" data-aos="fade-up" data-aos-delay="100">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
              <div class="card-header bg-primary text-white text-center py-3">
                <h4 class="mb-0"><i class="bi bi-person-plus-fill me-2"></i>Tambah Pengguna Baru</h4>
              </div>
              <div class="card-body p-4">

                <form action="{{ route('users.store') }}" method="POST">
                  @csrf

                  <div class="mb-3">
                    <label class="form-label fw-semibold">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama pengguna" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label fw-semibold">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password" required>
                  </div>

                  <div class="text-end">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer id="footer" class="footer light-background">
    <div class="container text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Bina Desa</strong> <span>All Rights Reserved</span></p>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS -->
  <script src="{{ asset('assets-guest/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-guest/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets-guest/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets-guest/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets-guest/js/main.js') }}"></script>

</body>
</html>

