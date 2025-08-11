@extends('layout.admin')
@section('judul')
    Lihat Data Pendaftar
@endsection
@section('konten')
<section class="section" style="height: 500px">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="font-family: Comic Sans MS; color: black" >Lihat Pendaftar PPDB</h5>
            <p> PPDB MA Ma'arif Miftahul Ulum Melirang Bungah Gresik</p>
            <table class="isi2">

                @foreach ( $data as $k)
                <tr style="font-family: Comic Sans MS; line-height:10px">
                    <td><strong >A. </strong></td>
                    <td colspan="4"><strong >Siswa</strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td width="250px">Nomor Pendaftaran</td>
                    <td colspan="3">: {{  $k->id_registrasi }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td width="250px">NISN</td>
                    <td colspan="3">: {{  $k->nisn }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td width="250px">Nama Lengkap</td>
                    <td colspan="3">: {{  $k->name }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>4.</td>
                    <td width="250px">Nama Panggilan</td>
                    <td colspan="3">: {{  $k->nama_panggilan }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>5.</td>
                    <td width="250px">Tempat dan Tanggal Lahir</td>
                    <td colspan="3">: {{  $k->tmp_lahir }} , {{ $k->tgl_lahir }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>6.</td>
                    <td width="250px">Jenis Kelamin</td>
                    <td colspan="3">: {{  $k->jns_kelamin }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>7.</td>
                    <td width="250px">Anak Ke-</td>
                    <td colspan="3">:  {{  $k->anak_ke }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>8.</td>
                    <td width="250px">Jumlah Saudara Kandung</td>
                    <td colspan="3">: {{  $k->jml_sdr_kandung }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>9</td>
                    <td width="250px">Jumlah Saudara Tiri</td>
                    <td colspan="3">: {{  $k->jml_sdr_tiri }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>10.</td>
                    <td width="250px">Alamat</td>
                    <td colspan="3">: {{  $k->alamat }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>11.</td>
                    <td width="250px">Nomor KK</td>
                    <td colspan="3">: {{  $k->kk }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>12.</td>
                    <td width="250px">Nomor HP</td>
                    <td colspan="3">: {{  $k->nomor_hp }}</td>
                </tr>
            </table>
            <table class="isi2">
                <tr style="font-family: Comic Sans MS; line-height:10px">
                    <td><strong >B. </strong></td>
                    <td colspan="4"><strong >Data Orang Tua</strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td width="250px">Identitas Ayah</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">a. Nama</td><td>: {{  $k->nama_ayah }}</td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">b. Nomor KTP</td>
                    <td colspan="3">: {{  $k->ktp_ayah }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">c. Tempat Tanggal Lahir</td>
                    <td colspan="3">: {{  $k->tmp_lahir_ayah }} , {{ $k->tgl_lahir_ayah }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">d. Pendidikan</td>
                    <td colspan="3">: {{  $k->pendidikan_ayah }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">e. Pekerjaan</td>
                    <td colspan="3">: {{  $k->pekerjaan_ayah }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">f. Agama </td>
                    <td colspan="3">: {{  $k->agama_ayah }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">g. Alamat</td>
                    <td colspan="3">: {{  $k->alamat_ayah }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2.</td>
                    <td width="250px">Identitas Ibu</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">a. Nama</td>
                    <td colspan="3">: {{  $k->nama_ibu }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">b. Nomor KTP</td>
                    <td colspan="3">: {{  $k->ktp_ibu }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">c. Tempat Tanggal Lahir</td>
                    <td colspan="3">: {{  $k->tmp_lahir_ibu }} , {{ $k->tgl_lahir_ibu }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">d. Pendidikan</td>
                    <td colspan="3">: {{  $k->pendidikan_ibu }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">e. Pekerjaan</td>
                    <td colspan="3">: {{  $k->pekerjaan_ibu }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">f. Agama </td>
                    <td colspan="3">: {{  $k->agama_ibu }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">g. Alamat</td>
                    <td colspan="3">: {{  $k->alamat_ibu }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3.</td>
                    <td width="250px">Identitas Wali</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">a. Nama</td>
                    <td colspan="3">: {{  $k->nama_wali }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">b. Tempat Tanggal Lahir</td>
                    <td colspan="3">: {{  $k->tmp_lahir_wali }} , {{ $k->tgl_lahir_wali }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">c. Pekerjaan</td>
                    <td colspan="3">: {{  $k->pekerjaan_wali }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">d. Agama </td>
                    <td colspan="3">: {{  $k->agama_wali }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="250px">e. Alamat</td>
                    <td colspan="3">: {{  $k->alamat_wali}}</td>
                </tr>
            </table>
            <table class="isi2">

                <tr style="font-family: Comic Sans MS; line-height:10px">
                    <td><strong >C. </strong></td>
                    <td colspan="4"><strong >Identitas Sekolah Asal</strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td width="275px">1. Asal Sekolah</td>
                    <td colspan="3">: {{  $k->asal_sekolah }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td width="275px">2. Alamat Sekolah</td>
                    <td colspan="3">: {{  $k->alamat_sekolah }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td width="275px">3. NPSN</td>
                    <td colspan="3">: {{  $k->npsn_sekolah }}</td>
                </tr>
            </table>
            <table class="isi2">
                <tr style="font-family: Comic Sans MS; line-height:10px">
                    <td><strong >D. </strong></td>
                    <td colspan="5"><strong >Identitas Kartu (Jika Memiliki)</strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td width="275px">1. Nomor KIP</td>
                    <td colspan="3">: {{  $k->kip }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td width="275px">2. Nomor KPS</td>
                    <td colspan="3">: {{  $k->kps }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td width="275px">3. Nomor KKS</td>
                    <td colspan="3">: {{  $k->kks }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td width="275px">4. Nomor PKH</td>
                    <td colspan="3">: {{  $k->pkh }} </td>
                </tr>
            </table>
            @endforeach
            <div class="dataTable-top"><div class="dataTable-dropdown">

                <a href="/pendaftar" class="btn btn-sm btn-success">Kembali</a>
            </div>

            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
</section>
@endsection
