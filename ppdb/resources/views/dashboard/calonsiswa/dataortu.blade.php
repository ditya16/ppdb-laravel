@extends('layout.admin')
@section('judul')
    Data Ortu
@endsection
@section('konten')
<div class="card">
    <div class="card-body">
    <br>
        <h1> <center><strong style="font-family:Comic Sans MS">FORM DATA ORANG TUA</strong></center></h1>
    <br>

        @if($cek1 < 1)
      <form action="{{  url('dataortu/'.\Auth::user()->id) }}" method="post">
        {{ csrf_field() }}
        <div class="row mb-3">
            <label for="kk" class="col-sm-2 col-form-label">Nomor KK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="kk" required name="kk" placeholder="Masukkan Nomor KK">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah" required>
            </div>
            <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ktp_ayah" class="col-sm-2 col-form-label">KTP Ayah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="ktp_ayah" name="ktp_ayah" placeholder="Masukkan KTP Ayah" required>
            </div>
            <label for="ktp_ibu" class="col-sm-2 col-form-label">KTP Ibu</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="ktp_ibu" name="ktp_ibu" placeholder="Masukkan KTP Ibu" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tmp_lahir_ayah" class="col-sm-2 col-form-label">Tempat Lahir Ayah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="tmp_lahir_ayah" name="tmp_lahir_ayah" required placeholder="Masukkan Tempat Lahir Ayah">
            </div>
            <label for="tmp_lahir_ibu" class="col-sm-2 col-form-label">Tempat Lahir Ibu</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="tmp_lahir_ibu" name="tmp_lahir_ibu" required placeholder="Masukkan Tempat Lahir Ibu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="tgl_lahir_ayah" class="col-sm-2 col-form-label">Tanggal Lahir Ayah</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="tgl_lahir_ayah" required name="tgl_lahir_ayah" placeholder="Masukkan Tanggal Lahir Ayah">
            </div>
            <label for="tgl_lahir_ibu" class="col-sm-2 col-form-label">Tanggal Lahir Ibu</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="tgl_lahir_ibu" required name="tgl_lahir_ibu" placeholder="Masukkan Tanggal Lahir Ibu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="pendidikan_ayah" class="col-sm-2 col-form-label">Pendidikan Ayah</label>
            <div class="col-sm-4">
                <select id="pendidikan_ayah" class="form-select" name="pendidikan_ayah" required>
                    <option>SD/MI</option>
                    <option>SMP/MTs</option>
                    <option>SMA/SMK/MA</option>
                    <option>Diploma</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                </select>
            </div>
            <label for="pendidikan_ibu" class="col-sm-2 col-form-label">Pendidikan Ibu</label>
            <div class="col-sm-4">
                <select id="pendidikan_ibu" class="form-select" name="pendidikan_ibu" required>
                    <option>SD/MI</option>
                    <option>SMP/MTs</option>
                    <option>SMA/SMK/MA</option>
                    <option>Diploma</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="pekerjaan_ayah" required name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah">
            </div>
            <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="pekerjaan_ibu"  required name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="agama_ayah" class="col-sm-2 col-form-label">Agama Ayah</label>
            <div class="col-sm-4">
                <select id="agama_ayah" class="form-select" name="agama_ayah" required>
                    <option>Islam</option>
                    <option>Budha</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Khonghucu</option>
                    <option>Katolik</option>
                </select>
            </div>
            <label for="agama_ibu" class="col-sm-2 col-form-label">Agama Ibu</label>
            <div class="col-sm-4">
                <select id="agama_ibu" class="form-select" required name="agama_ibu">
                    <option>Islam</option>
                    <option>Budha</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Khonghucu</option>
                    <option>Katolik</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat_ayah" class="col-sm-2 col-form-label">Alamat Ayah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="alamat_ayah" required name="alamat_ayah" placeholder="Masukkan Alamat Ayah">
            </div>
            <label for="alamat_ibu" class="col-sm-2 col-form-label">Alamat Ibu</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="alamat_ibu" required name="alamat_ibu" placeholder="Masukkan Alamat Ibu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama_wali" class="col-sm-2 col-form-label">Nama Wali</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_wali" required name="nama_wali" placeholder="Masukkan Nama Wali">
            </div>
        </div>
        <div class="row mb-3">
            <label for="tmp_lahir_wali" class="col-sm-2 col-form-label">Tempat Lahir Wali</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="tmp_lahir_wali" required name="tmp_lahir_wali" placeholder="Masukkan Tempat Lahir Wali">
            </div>
            <label for="tgl_lahir_wali" class="col-sm-2 col-form-label">Tanggal Lahir Wali</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="tgl_lahir_wali" required name="tgl_lahir_wali" placeholder="Masukkan Tanggal Lahir Wali">
            </div>
        </div>
        <div class="row mb-3">
            <label for="pekerjaan_wali" class="col-sm-2 col-form-label">Pekerjaan Wali</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pekerjaan_wali" required name="pekerjaan_wali" placeholder="Masukkan Pekerjaan Wali">
            </div>
        </div>
        <div class="row mb-3">
            <label for="agama_wali" class="col-sm-2 col-form-label">Agama Wali</label>
            <div class="col-sm-10">
                <select id="agama_wali" class="form-select" required name="agama_wali">
                    <option>Islam</option>
                    <option>Budha</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Khonghucu</option>
                    <option>Katolik</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat_wali" class="col-sm-2 col-form-label">Alamat Wali</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat_wali" required name="alamat_wali" placeholder="Masukkan Alamat Wali">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nomor_hp" required name="nomor_hp" placeholder="Masukkan Nomor HP">
            </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="/datasiswa" class="btn btn-dark" style="color:white; width: 100px">Kembali</a>
        </div>
      </form>




      @else
      <form action="{{  url('dataortu/'.\Auth::user()->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row mb-3">
            <label for="kk" class="col-sm-2 col-form-label">Nomor KK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="kk"  value="{{ $dt1->kk }}" required name="kk" placeholder="Masukkan Nomor KK">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nama_ayah" value="{{ $dt1->nama_ayah }}" name="nama_ayah" placeholder="Masukkan Nama Ayah">
            </div>
            <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nama_ibu" value="{{ $dt1->nama_ibu }}" name="nama_ibu" placeholder="Masukkan Nama Ibu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="ktp_ayah" class="col-sm-2 col-form-label">KTP Ayah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control"  value="{{ $dt1->ktp_ayah}}" id="ktp_ayah" name="ktp_ayah" placeholder="Masukkan KTP Ayah">
            </div>
            <label for="ktp_ibu" class="col-sm-2 col-form-label">KTP Ibu</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="ktp_ibu" value="{{ $dt1->ktp_ibu }}" name="ktp_ibu" placeholder="Masukkan KTP Ibu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="tmp_lahir_ayah" class="col-sm-2 col-form-label">Tempat Lahir Ayah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="tmp_lahir_ayah" value="{{ $dt1->tmp_lahir_ayah }}" name="tmp_lahir_ayah" placeholder="Masukkan Tempat Lahir Ayah">
            </div>
            <label for="tmp_lahir_ibu" class="col-sm-2 col-form-label">Tempat Lahir Ibu</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="tmp_lahir_ibu" value="{{ $dt1->tmp_lahir_ibu }}" name="tmp_lahir_ibu" placeholder="Masukkan Tempat Lahir Ibu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="tgl_lahir_ayah" class="col-sm-2 col-form-label">Tanggal Lahir Ayah</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="tgl_lahir_ayah" value="{{ $dt1->tgl_lahir_ayah }}" name="tgl_lahir_ayah" placeholder="Masukkan Tanggal Lahir Ayah">
            </div>
            <label for="tgl_lahir_ibu" class="col-sm-2 col-form-label">Tanggal Lahir Ibu</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="tgl_lahir_ibu" value="{{ $dt1->tgl_lahir_ibu }}" name="tgl_lahir_ibu" placeholder="Masukkan Tanggal Lahir Ibu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="pendidikan_ayah" class="col-sm-2 col-form-label">Pendidikan Ayah</label>
            <div class="col-sm-4">
                <select id="pendidikan_ayah" class="form-select" name="pendidikan_ayah" >
                    <option value="SD/MI"{{ $dt1->pendidikan_ayah =="SD/MI" ? 'selected' : ''}}>SD/MI</option>
                    <option value="SMP/MTs"{{ $dt1->pendidikan_ayah =="SMP/MTs" ? 'selected' : ''}}>SMP/MTs</option>
                    <option value="SMA/SMK/MA"{{ $dt1->pendidikan_ayah =="SMA/SMK/MA" ? 'selected' : ''}}>SMA/SMK/MA</option>
                    <option value="Diploma"{{ $dt1->pendidikan_ayah =="Diploma" ? 'selected' : ''}}>Diploma</option>
                    <option value="S1"{{ $dt1->pendidikan_ayah =="S1"? 'selected' : ''}}>S1</option>
                    <option value="S2"{{ $dt1->pendidikan_ayah =="S2" ? 'selected' : ''}}>S2</option>
                    <option value="S3"{{ $dt1->pendidikan_ayah =="S3" ? 'selected' : ''}}>S3</option>
                </select>
            </div>
            <label for="pendidikan_ibu" class="col-sm-2 col-form-label">Pendidikan Ibu</label>
            <div class="col-sm-4">
                <select id="pendidikan_ibu" class="form-select" name="pendidikan_ibu" >
                    <option value="SD/MI"{{ $dt1->pendidikan_ibu =="SD/MI" ? 'selected' : ''}}>SD/MI</option>
                    <option value="SMP/MTs"{{ $dt1->pendidikan_ibu =="SMP/MTs" ? 'selected' : ''}}>SMP/MTs</option>
                    <option value="SMA/SMK/MA"{{ $dt1->pendidikan_ibu =="SMA/SMK/MA" ? 'selected' : ''}}>SMA/SMK/MA</option>
                    <option value="Diploma"{{ $dt1->pendidikan_ibu =="Diploma" ? 'selected' : ''}}>Diploma</option>
                    <option value="S1"{{ $dt1->pendidikan_ibu =="S1"? 'selected' : ''}}>S1</option>
                    <option value="S2"{{ $dt1->pendidikan_ibu =="S2" ? 'selected' : ''}}>S2</option>
                    <option value="S3"{{ $dt1->pendidikan_ibu =="S3" ? 'selected' : ''}}>S3</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="pekerjaan_ayah" value="{{ $dt1->pekerjaan_ayah }}" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah">
            </div>
            <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="pekerjaan_ibu" value="{{ $dt1->pekerjaan_ibu }}" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="agama_ayah" class="col-sm-2 col-form-label">Agama Ayah</label>
            <div class="col-sm-4">
                <select id="agama_ayah" class="form-select" name="agama_ayah" value="">
                    <option value="Islam"{{ $dt1->agama_ayah =="Islam" ? 'selected' : ''}}>Islam</option>
                    <option value="Budha"{{ $dt1->agama_ayah =="Budha" ? 'selected' : ''}}>Budha</option>
                    <option value="Kristen"{{ $dt1->agama_ayah =="Kristen" ? 'selected' : ''}}>Kristen</option>
                    <option value="Hindu"{{ $dt1->agama_ayah =="Hindu"? 'selected' : ''}}>Hindu</option>
                    <option value="Khonghucu"{{ $dt1->agama_ayah =="Khonghucu" ? 'selected' : ''}}>Khonghucu</option>
                    <option value="Katolik"{{ $dt1->agama_ayah =="Katolik" ? 'selected' : ''}}>Katolik</option>
                </select>
            </div>
            <label for="agama_ibu" class="col-sm-2 col-form-label">Agama Ibu</label>
            <div class="col-sm-4">
                <select id="agama_ibu" class="form-select" name="agama_ibu" value="">
                    <option value="Islam"{{ $dt1->agama_ibu =="Islam" ? 'selected' : ''}}>Islam</option>
                    <option value="Budha"{{ $dt1->agama_ibu =="Budha" ? 'selected' : ''}}>Budha</option>
                    <option value="Kristen"{{ $dt1->agama_ibu =="Kristen" ? 'selected' : ''}}>Kristen</option>
                    <option value="Hindu"{{ $dt1->agama_ibu =="Hindu"? 'selected' : ''}}>Hindu</option>
                    <option value="Khonghucu"{{ $dt1->agama_ibu =="Khonghucu" ? 'selected' : ''}}>Khonghucu</option>
                    <option value="Katolik"{{ $dt1->agama_ibu =="Katolik" ? 'selected' : ''}}>Katolik</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat_ayah" class="col-sm-2 col-form-label">Alamat Ayah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="alamat_ayah" value="{{ $dt1->alamat_ayah }}" name="alamat_ayah" placeholder="Masukkan Alamat Ayah">
            </div>
            <label for="alamat_ibu" class="col-sm-2 col-form-label">Alamat Ibu</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="alamat_ibu" value="{{ $dt1->alamat_ibu }}" name="alamat_ibu" placeholder="Masukkan Alamat Ibu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama_wali" class="col-sm-2 col-form-label">Nama Wali</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_wali" value="{{ $dt1->nama_wali }}" name="nama_wali" placeholder="Masukkan Nama Wali">
            </div>
        </div>
        <div class="row mb-3">
            <label for="tmp_lahir_wali" class="col-sm-2 col-form-label">Tempat Lahir Wali</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="tmp_lahir_wali" value="{{ $dt1->tmp_lahir_wali }}" name="tmp_lahir_wali" placeholder="Masukkan Tempat Lahir Wali">
            </div>
            <label for="tgl_lahir_wali" class="col-sm-2 col-form-label">Tanggal Lahir Wali</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="tgl_lahir_wali" value="{{ $dt1->tgl_lahir_wali }}" name="tgl_lahir_wali" placeholder="Masukkan Tanggal Lahir Wali">
            </div>
        </div>
        <div class="row mb-3">
            <label for="pekerjaan_wali" class="col-sm-2 col-form-label">Pekerjaan Wali</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pekerjaan_wali" value="{{ $dt1->pekerjaan_wali }}" name="pekerjaan_wali" placeholder="Masukkan Pekerjaan Wali">
            </div>
        </div>
        <div class="row mb-3">
            <label for="agama_wali" class="col-sm-2 col-form-label">Agama Wali</label>
            <div class="col-sm-10">
                <select id="agama_wali" class="form-select" name="agama_wali" value="">
                    <option value="Islam"{{ $dt1->agama_wali =="Islam" ? 'selected' : ''}}>Islam</option>
                    <option value="Budha"{{ $dt1->agama_wali =="Budha" ? 'selected' : ''}}>Budha</option>
                    <option value="Kristen"{{ $dt1->agama_wali =="Kristen" ? 'selected' : ''}}>Kristen</option>
                    <option value="Hindu"{{ $dt1->agama_wali =="Hindu"? 'selected' : ''}}>Hindu</option>
                    <option value="Khonghucu"{{ $dt1->agama_wali =="Khonghucu" ? 'selected' : ''}}>Khonghucu</option>
                    <option value="Katolik"{{ $dt1->agama_wali =="Katolik" ? 'selected' : ''}}>Katolik</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat_wali" class="col-sm-2 col-form-label">Alamat Wali</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat_wali" value="{{ $dt1->alamat_wali }}" name="alamat_wali" placeholder="Masukkan Alamat Wali">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nomor_hp" value="{{ $dt1->nomor_hp }}" name="nomor_hp" placeholder="Masukkan Nomor HP">
            </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="/datasiswa" class="btn btn-dark" style="color:white; width: 100px">Kembali</a>
        </div>
      </form>
      @endif
    </div>
    @include('sweetalert::alert')
  </div>

@endsection
