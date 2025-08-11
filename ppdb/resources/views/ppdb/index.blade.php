@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PPDB Online</title>
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
                  <div class="pt-4 pb-2">
                    <div class=" d-flex justify-content-center py-4">
                          <img src="{{ asset('templateadmin/') }}/assets/img/register.svg" alt="">
                      </div>
                    <p class="text-center small">Silakan Daftar Terlebih Dahulu</p>
                  </div>



                  <form class="row g-3 needs-validation" action="{{ route('ppdb.store')}}" method="POST" novalidate enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-12">
                        <label for="nama" class="form-label">Nama Lengkap peserta</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap Peserta">
                    </div>
                      <div class="col-12">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control " name="nisn"  id="nisn" placeholder="Masukkan NISN">

                      </div>
                    <div class="col-12">
                      <label for="email" class="form-label">E-Mail</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="email">@</span>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan E-Mail">

                      </div>
                    </div>
                    <div class="col-12">
                        <label for="photo" class="form-label">Foto peserta</label>
                        <input type="file" class="form-control" name="photo" autocomplete="photo" autofocus id="photo" required>

                      </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-45" type="submit">Daftar</button>
                      <a href="/" class="btn btn-danger w-45" style="color:white;">Kembali</a>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">

                 By<a href=""> SMK NEGERI 1 CIMAHI</a>
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
  <script src="{{ asset('templateadmin/') }}/assets/js/main.js"></script>


</body>

</html>






