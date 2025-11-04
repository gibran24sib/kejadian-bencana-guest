<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tambah Warga - Bina Desa</title>
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

  <style>
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

    .form-section {
      padding: 60px 0;
      background-color: #f8f9fa;
    }

    .form-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      margin-bottom: 30px;
      overflow: hidden;
    }

    .form-header {
      background: #0d6efd;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .form-body {
      padding: 30px;
    }

    .form-label {
      font-weight: 500;
      margin-bottom: 8px;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">
    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home.index') }}" class="logo d-flex align-items-center me-auto">
          <i class="fas fa-house-damage fa-lg text-primary me-2"></i>
          <h1 class="sitename">Bina Desa</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="{{ route('home.index') }}">
                <i class="fas fa-home nav-icon"></i>Dashboard
              </a>
            </li>
            <li>
              <a href="{{ route('warga.index') }}">
                <i class="fas fa-users nav-icon"></i>User
              </a>
            </li>
            <li class="active">
              <a href="{{ route('pages.warga.index') }}">
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
    <!-- Form Section -->
    <section class="form-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="form-card">
              <div class="form-header">
                <h2 class="mb-0">Tambah Data Warga</h2>
                <p class="mb-0">Isi form berikut untuk menambah data warga</p>
              </div>

              <div class="form-body">
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                <form action="{{ route('warga.store') }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="no_ktp" class="form-label">No KTP *</label>
                        <input type="text" class="form-control" id="no_ktp" name="no_ktp"
                               value="{{ old('no_ktp') }}" required maxlength="16">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap *</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                               value="{{ old('nama') }}" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin *</label>
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                          <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="agama" class="form-label">Agama *</label>
                        <input type="text" class="form-control" id="agama" name="agama"
                               value="{{ old('agama') }}" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan *</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                               value="{{ old('pekerjaan') }}" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="telp" class="form-label">No Telepon *</label>
                        <input type="text" class="form-control" id="telp" name="telp"
                               value="{{ old('telp') }}" required maxlength="15">
                      </div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" name="email"
                           value="{{ old('email') }}" required>
                  </div>

                  <div class="row mt-4">
                    <div class="col-12 text-center">
                      <button type="submit" class="btn btn-primary me-2">
                        <i class="fas fa-save me-2"></i>Simpan
                      </button>
                      <a href="{{ route('pages.warga.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Kembali
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Form Section -->
  </main>

  <footer id="footer" class="footer light-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ route('home.index') }}" class="logo d-flex align-items-center">
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
            <li><a href="{{ route('home.index') }}"><i class="fas fa-chevron-right footer-icon"></i>Home</a></li>
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
            <li><a href="{{ route('pages.warga.index') }}"><i class="fas fa-chevron-right footer-icon"></i>Data Warga</a></li>
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
