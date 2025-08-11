<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ asset('templateadmin/') }}/assets/img/logo.svg">
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
  <link href="{{ asset('templateadmin/') }}/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">

                <a href="index.html" class=" d-flex align-items-center w-auto">
                  <img src="{{ asset('templateadmin/') }}/assets/img/logo2.svg" alt="">
                </a>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="alert alert-success m-3">
                     Login untuk <b>Admin</b> silahkan <a href="{{ url('login') }}" class="text-primary" style="text-decoration:none;">Klik Disini</a>
                  </div>
                  <div class="pt-0 pb-2">
                    <div class=" d-flex justify-content-center py-4">
                          <img src="{{ asset('templateadmin/') }}/assets/img/loginsiswa.svg" alt="">
                      </div>
                      <p class="text-center small">Masukkan Email dan Nisn
                    </p>
                  </div>

                  <form class="row g-3 needs-validation" action="{{ route('login') }}" method="POST" novalidate>
                    {{ csrf_field() }}
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="email">@</span>
                        <input type="email" name="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">NISN</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    {{--  <div class="col-12">
                      <label for="nisn" class="form-label">NISN</label>
                      <input type="password" name="nisn" class="form-control" id="nisn" required>
                      <div class="invalid-feedback">Please enter your nisn!</div>
                    </div>  --}}

                    <div class="col-12">
                      <button class="btn btn-primary w-45" type="submit">Login</button>
                      <a href="/" class="btn btn-danger w-45" style="color:white;">Kembali</a>

                    </div>
                    <div class="col-12">

                    </div>
                    
                  </form>

                </div>
              </div>

              <div class="credits">

                 By<a href=""> SIJA SMK NEGERI 1 CIMAHI</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('templateadmin/') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/chart.js/chart.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('templateadmin/') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('templateadmin/') }}/assets/js/main.js"></script>

</body>

</html>

