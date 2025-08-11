@extends('layout.admin')
@section('judul')
    Info Sekolah
@endsection
@section('konten')
<div class="card">
    <div class="card-body">
    <br>
      <h1> <center><strong style="font-family:Comic Sans MS">Info Sekolah</strong></center></h1>
    <br>
    @if($cek < 1)
      <form action="{{  url('infosekolah/'.\Auth::user()->id) }}" method="post">
        {{ csrf_field() }}

        <div class="row mb-3">
            <label for="nama_kepsek" class="col-sm-2 col-form-label">Nama Kepala Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_kepsek" name="nama_kepsek" placeholder="Masukkan Nama Kepala Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Masukkan Nama Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="npsn_sekolah" class="col-sm-2 col-form-label">NPSN Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="npsn_sekolah" name="npsn_sekolah" placeholder="Masukkan NPSN Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nsm_sekolah" class="col-sm-2 col-form-label">NSM Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nsm_sekolah" name="nsm_sekolah" placeholder="Masukkan NSM Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="akreditasi" class="col-sm-2 col-form-label">Akreditasi Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="akreditasi" name="akreditasi" placeholder="Masukkan Akreditasi Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat_sekolah" class="col-sm-2 col-form-label">Alamat Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" placeholder="Masukkan Alamat Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="email_sekolah" class="col-sm-2 col-form-label">E-Mail Sekolah</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email_sekolah" name="email_sekolah" placeholder="Masukkan E-Mail Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="telp_sekolah" class="col-sm-2 col-form-label">Telp Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telp_sekolah" name="telp_sekolah" placeholder="Masukkan Telp Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">Status Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" name="status" placeholder="Masukkan Status Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="visi" class="col-sm-2 col-form-label">Visi Sekolah</label>
            <div class="col-sm-10">
                <textarea class="form-control summernote" style="height: 100px" name="visi" id="visi" required placeholder="Masukkan Visi Sekolah"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="misi" class="col-sm-2 col-form-label">Misi Sekolah</label>
            <div class="col-sm-10">
                <textarea class="form-control" style="height: 100px" name="misi" id="misi" required placeholder="Masukkan Misi Sekolah"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="misi" class="col-sm-2 col-form-label">Tahun Ajaran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="thn_ajaran" name="thn_ajaran" placeholder="Masukkan Tahun Ajaran" required>
            </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="/info" class="btn btn-dark" style="color:white; width: 100px">Kembali</a>
        </div>
      </form>
      @else
      <form action="{{  url('infosekolah/'.\Auth::user()->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row mb-3">
            <label for="nama_kepsek" class="col-sm-2 col-form-label">Nama Kepala Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $dt->nama_kepsek }}" id="nama_kepsek" name="nama_kepsek" placeholder="Masukkan Nama Kepala Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $dt->nama_sekolah }}" id="nama_sekolah" name="nama_sekolah" placeholder="Masukkan Nama Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="npsn_sekolah" class="col-sm-2 col-form-label">NPSN Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $dt->npsn_sekolah }}" id="npsn_sekolah" name="npsn_sekolah" placeholder="Masukkan NPSN Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nsm_sekolah" class="col-sm-2 col-form-label">NSM Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nsm_sekolah" value="{{ $dt->nsm_sekolah }}" name="nsm_sekolah" placeholder="Masukkan NSM Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="akreditasi" class="col-sm-2 col-form-label">Akreditasi Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="akreditasi" value="{{ $dt->akreditasi }}" name="akreditasi" placeholder="Masukkan Akreditasi Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat_sekolah" class="col-sm-2 col-form-label">Alamat Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat_sekolah" value="{{ $dt->alamat_sekolah }}" name="alamat_sekolah" placeholder="Masukkan Alamat Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="email_sekolah" class="col-sm-2 col-form-label">E-Mail Sekolah</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email_sekolah" value="{{ $dt->email_sekolah }}" name="email_sekolah" placeholder="Masukkan E-Mail Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="telp_sekolah" class="col-sm-2 col-form-label">Telp Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telp_sekolah" value="{{ $dt->telp_sekolah }}" name="telp_sekolah" placeholder="Masukkan Telp Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">Status Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" value="{{ $dt->status }}" name="status" placeholder="Masukkan Status Sekolah" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="visi" class="col-sm-2 col-form-label">Visi Sekolah</label>
            <div class="col-sm-10">
                <textarea class="form-control summernote" style="height: 100px"name="visi" id="visi" required placeholder="Masukkan Visi Sekolah">{{ $dt->visi }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="misi" class="col-sm-2 col-form-label">Misi Sekolah</label>
            <div class="col-sm-10">
                <textarea class="form-control" style="height: 100px"name="misi" id="misi" required placeholder="Masukkan Misi Sekolah">{{ $dt->misi }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="misi" class="col-sm-2 col-form-label">Tahun Ajaran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="thn_ajaran" name="thn_ajaran" placeholder="Masukkan Tahun Ajaran" value="{{ $dt->thn_ajaran }}" required>
            </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="/dashboard" class="btn btn-dark" style="color:white; width: 100px">Kembali</a>
        </div>
      </form>
      @endif
    </div>
</div>
  @include('sweetalert::alert')

@endsection
