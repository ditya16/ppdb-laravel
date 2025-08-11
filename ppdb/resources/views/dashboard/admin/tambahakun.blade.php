@extends('layout.admin')
@section('judul')
    Tambah Akun
@endsection
@section('konten')
<div class="card">
    <div class="card-body">
    <br>
      <h1> <center><strong style="font-family:Comic Sans MS">Tambah Akun Peserta PPDB</strong></center></h1>
    <br>
    <form class="row g-3 needs-validation" action="{{ route('pendaftar.store')}}" method="POST" novalidate enctype="multipart/form-data">
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
          <a href="/akun" class="btn btn-danger w-45" style="color:white;">Kembali</a>
        </div>
      </form>
    </div>
</div>
  @include('sweetalert::alert')

@endsection
