@extends('layout.admin')
@section('judul')
    Data Calon Siswa
@endsection
@section('konten')
<div class="row" style="height: 500px">
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">

          <h5 class="card-title" style="font-family: Comic Sans MS; color: black">Biodata Calon Peserta</h5>
          <p>Biodata Siswa</p>
          <a href="/biodata"  class="btn btn-success" style="color:white; width: 100px">Tambah</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="font-family: Comic Sans MS; color: black"> Data Orang Tua</h5>
            <p>Data Orang Tua </p>
            <a href="/dataortu"  class="btn btn-success" style="color:white; width: 100px">Tambah</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="font-family: Comic Sans MS; color: black">Data Pendukung</h5>
            <p> Data Pendukung </p>
            <a href="/datapendukung"  class="btn btn-success" style="color:white; width: 100px">Tambah</a>
          </div>
        </div>
      </div>
  </div>

@endsection
