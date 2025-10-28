<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Daftar User - Bina Desa</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  {{-- CSS --}}
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

    <section class="section" data-aos="fade-up" data-aos-delay="100">
      <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-bold text-primary mb-0"><i class="bi bi-people-fill me-2"></i>Daftar Pengguna</h3>
          <a href="{{ route('users.create') }}" class="btn btn-primary">
            <i class="bi bi-person-plus-fill me-1"></i> Tambah User
          </a>
        </div>
{{-- Flash Messages --}}
@if (session('success') || session('error') || $errors->any())
    <div class="mt-3">
        {{-- Pesan sukses --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm border-0" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Pesan error umum --}}
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show shadow-sm border-0" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Pesan error dari validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show shadow-sm border-0" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
@endif

        <div class="table-responsive bg-white rounded-4 shadow-sm p-4">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Dibuat</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($dataUser as $data)
              <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->created_at->format('d M Y H:i') }}</td>
                <td class="text-center">
                  <a href="{{ route('users.edit', $data->id) }}" class="btn btn-sm btn-outline-primary me-1">
                    <i class="bi bi-pencil-square"></i> Edit
                  </a>
                  <form action="{{ route('users.destroy', $data->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger"
                      onclick="return confirm('Yakin ingin menghapus user ini?')">
                      <i class="bi bi-trash"></i> Hapus
                    </button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="text-center text-muted py-4">
                  <i class="bi bi-exclamation-circle"></i> Belum ada data pengguna.
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
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

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- JS -->
  <script src="{{ asset('assets-guest/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-guest/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets-guest/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets-guest/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets-guest/js/main.js') }}"></script>

</body>
</html>
