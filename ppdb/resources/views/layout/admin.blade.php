<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('judul')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ asset('templateadmin/') }}/assets/img/logo.svg" >
  <link href="{{ asset('templateadmin/') }}/https://fonts.gstatic.com" rel="preconnect">
  <link href="{{ asset('templateadmin/') }}/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('templateadmin/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('templateadmin/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('templateadmin/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('templateadmin/') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('templateadmin/') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('templateadmin/') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('templateadmin/') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="summernote/summernote.css" rel="stylesheet">
  <link href="{{ asset('templateadmin/') }}/assets/css/style.css" rel="stylesheet">
      @stack('css')


</head>

<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="" class=" d-flex align-items-center">
        <img src="{{ asset('templateadmin/') }}/assets/img/logo2.svg" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    {{--  <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>  --}}
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        {{--  <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>  --}}
        <!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ Auth::user()->photo }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item d-flex align-items-center" href="/profil">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
         </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav>
    <!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="/dashboard">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li>
        @if (auth()->user()->role == 2)

      <li class="nav-item">
        <a class="nav-link collapsed" href="/datasiswa">
          <i class="bi bi-file-person"></i>
          <span>Data Calon Siswa</span>
        </a>
      </li>
      @endif
      @if (auth()->user()->role == 1)

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Peserta PPDB</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/pendaftar">
              <i class="bi file-person"></i><span>Data Peserta PPDB</span>
            </a>
          </li>
          <li>
            <a href="/laporan">
              <i class="bi file-person"></i><span>Laporan Peserta PPDB</span>
            </a>
          </li>
          <li>
            <a href="/akun">
              <i class="bi file-person"></i><span>Akun Peserta Terdaftar</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/infosekolah">
          <i class="bi bi-info-circle"></i>
          <span>Info</span>
        </a>
      </li>

      <!-- End Pendaftar -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/profil">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
      @endif
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">


    <div class"content-wrapper">
        @yield('konten')
    </div>

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="height: 50px">
    <div class="credits">

       by<a href="{{ asset('templateadmin/') }}/https://bootstrapmade.com/"> SMKN 1 Cimahi</a> 

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
      @stack('js')

  <script src="{{ asset('templateadmin/') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/chart.js/chart.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/php-email-form/validate.js"></script>

  <script src="{{ asset('templateadmin/') }}/assets/js/main.js"></script>
  @include('sweetalert::alert')
</body>

</html>
