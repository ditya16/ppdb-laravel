@extends('layout.admin')
@section('judul')
    Data Pendukung
@endsection
@section('konten')
<div class="card">
    <div class="card-body">
    <br>
      <h1> <center><strong style="font-family:Comic Sans MS">FORM DATA PENDUKUNG</strong></center></h1>
    <br>
        @if($cek3 < 1)
      <form action="{{  url('datapendukung/'.\Auth::user()->id) }}" method="post">
        {{ csrf_field() }}
        <div class="row mb-3">
          <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" required id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan Asal Sekolah">
          </div>
        </div>
        <div class="row mb-3">
            <label for="alamat_sekolah" class="col-sm-2 col-form-label">Alamat Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="alamat_sekolah" name="alamat_sekolah" placeholder="Masukkan Alamat Sekolah">
            </div>
        </div>
        <div class="row mb-3">
            <label for="npsn_sekolah" class="col-sm-2 col-form-label">NPSN Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="npsn_sekolah" name="npsn_sekolah" placeholder="Masukkan NPSN Sekolah">
            </div>
        </div>
        <div class="row mb-3">
            <label for="kip" class="col-sm-2 col-form-label">KIP</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="kip" name="kip" placeholder="Masukkan KIP Jika Memiliki">
            </div>
            <label for="kks" class="col-sm-2 col-form-label">KKS</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="kks" name="kks" placeholder="Masukkan KKS Jika Memiliki">
            </div>
        </div>
        <div class="row mb-3">
            <label for="kps" class="col-sm-2 col-form-label">KPS</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="kps" name="kps" placeholder="Masukkan KPS Jika Memiliki">
            </div>
            <label for="pkh" class="col-sm-2 col-form-label">PKH</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="pkh" name="pkh" placeholder="Masukkan PKH Jika Memiliki">
            </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="/datasiswa" class="btn btn-dark" style="color:white; width: 100px">Kembali</a>
        </div>
      </form><!-- End Horizontal Form -->




      @else
      <form action="{{  url('datapendukung/'.\Auth::user()->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row mb-3">
            <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan Asal Sekolah" value="{{ $dt3->asal_sekolah }}">
            </div>
          </div>
          <div class="row mb-3">
              <label for="alamat_sekolah" class="col-sm-2 col-form-label">Alamat Sekolah</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" required id="alamat_sekolah" name="alamat_sekolah" placeholder="Masukkan Alamat Sekolah" value="{{ $dt3->alamat_sekolah }}">
              </div>
          </div>
          <div class="row mb-3">
              <label for="npsn_sekolah" class="col-sm-2 col-form-label">NPSN Sekolah</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" required id="npsn_sekolah" name="npsn_sekolah" placeholder="Masukkan NPSN Sekolah" value="{{ $dt3->npsn_sekolah }}">
              </div>
          </div>
          <div class="row mb-3">
              <label for="kip" class="col-sm-2 col-form-label">KIP</label>
              <div class="col-sm-4">
                  <input type="number" class="form-control" id="kip" name="kip" placeholder="Masukkan KIP Jika Memiliki" value="{{ $dt3->kip }}">
              </div>
              <label for="kks" class="col-sm-2 col-form-label">KKS</label>
              <div class="col-sm-4">
                  <input type="number" class="form-control" id="kks" name="kks" placeholder="Masukkan KKS Jika Memiliki" value="{{ $dt3->kks }}">
              </div>
          </div>
          <div class="row mb-3">
              <label for="kps" class="col-sm-2 col-form-label">KPS</label>
              <div class="col-sm-4">
                  <input type="number" class="form-control" id="kps" name="kps" placeholder="Masukkan KPS Jika Memiliki" value="{{ $dt3->kps }}">
              </div>
              <label for="pkh" class="col-sm-2 col-form-label">PKH</label>
              <div class="col-sm-4">
                  <input type="number" class="form-control" id="pkh" name="pkh" placeholder="Masukkan PKH Jika Memiliki" value="{{ $dt3->pkh }}">
              </div>
          </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="/datasiswa" class="btn btn-dark" style="color:white; width: 100px">Kembali</a>
        </div>
      </form>
      @endif
    </div>
  </div>
  @include('sweetalert::alert')
@endsection
