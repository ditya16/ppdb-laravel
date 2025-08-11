@extends('layout.admin')
@section('judul')
    Biodata
@endsection
@section('konten')
<div class="card">
    <div class="card-body">
    <br>
      <h1> <center><strong style="font-family:Comic Sans MS">FORM DATA SISWA</strong></center></h1>
    <br>
        @if($cek < 1)
      <form action="{{  url('biodata/'.\Auth::user()->id) }}" method="post">
        {{ csrf_field() }}
        <div class="row mb-3">
          <label for="nama_panggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" placeholder="Masukkan Nama Panggilan" required>
          </div>
        </div>
        <div class="row mb-3">
            <label for="tmp_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" required>
            </div>
            <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="jns_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-4">
                <select id="" class="form-select" name="jns_kelamin" required>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <label for="anak_ke" class="col-sm-3 col-form-label">Anak-Ke</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" id="anak_ke" name="anak_ke" placeholder="Masukkan Anak-Ke" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="jml_sdr_tiri" class="col-sm-2 col-form-label">Jumlah Saudara Tiri</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="jml_sdr_tiri" name="jml_sdr_tiri" placeholder="Masukkan Jumlah Saudara Tiri" required>
            </div>
            <label for="jml_sdr_kandung" class="col-sm-3 col-form-label">Jumlah Saudara Kandung</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" id="jml_sdr_kandung" name="jml_sdr_kandung" placeholder="Masukkan Jumlah Saudara Kandung" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
            </div>
          </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="/datasiswa" class="btn btn-dark" style="color:white; width: 100px">Kembali</a>
        </div>
      </form><!-- End Horizontal Form -->
      @else
      <form action="{{  url('biodata/'.\Auth::user()->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row mb-3">
          <label for="nama_panggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" value="{{ $dt->nama_panggilan }}">
          </div>
        </div>
        <div class="row mb-3">
            <label for="tmp_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $dt->tmp_lahir }}">
            </div>
            <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $dt->tgl_lahir }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="jns_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-4">
                <select id="" class="form-select" name="jns_kelamin" >

                    <option value="Laki-laki"{{ $dt->jns_kelamin =="Laki-laki" ? 'selected' : ''}}>Laki-Laki</option>
                    <option value="Perempuan"{{ $dt->jns_kelamin =="Perempuan" ? 'selected' : ''}}>Perempuan</option>
                </select>
            </div>
            <label for="anak_ke" class="col-sm-3 col-form-label">Anak-Ke</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" id="anak_ke" name="anak_ke" value="{{ $dt->anak_ke }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="jml_sdr_tiri" class="col-sm-2 col-form-label">Jumlah Saudara Tiri</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="jml_sdr_tiri" name="jml_sdr_tiri" value="{{ $dt->jml_sdr_tiri }}">
            </div>
            <label for="jml_sdr_kandung" class="col-sm-3 col-form-label">Jumlah Saudara Kandung</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" id="jml_sdr_kandung" name="jml_sdr_kandung" value="{{ $dt->jml_sdr_kandung }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dt->alamat }}">
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
