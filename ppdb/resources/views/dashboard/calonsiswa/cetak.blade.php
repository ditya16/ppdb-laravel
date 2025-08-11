<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir PPDB</title>
    <link href="{{ asset('templateadmin/') }}/assets/img/logo.svg" >
    <style class="text/css">
        .table3{
            margin-left: 40px;
        }
        .kotak p{
            display:table-cell;
            vertical-align:middle;
            text-align:center;
            color:black;
            padding-top:65px;
            font-family: Comic Sans MS;
        }
        .kotak{
            background-color:white;
            width : 3cm;
            height:4cm;
            border:1px solid #000000;
            position:absolute;
            display:table;
            margin-left:10px;
            left:50%;
            transform: translate(-50%,0%);

        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(255, 253, 253);
            margin-bottom:0px;
            padding-bottom: 0%;
        }
        .header{
            width: 100%;
            background-color:rgb(255, 253, 253);
            height: 15%;

        }
        .isi{

            color:rgb(0, 0, 0);
            text-align: center;
            line-height: 15px;
        }
        .isi2{
            font-family: Comic Sans MS;
            margin-left: 20px;
            line-height: 30px;
            margin-top: 0;
        }
        .table1{
            border-bottom: 5px solid;

        }
        .tengah{
            text-align: center;
            line-height: 10px;
            color:rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <div class="header">
        <table class="table1"width="100%">
            <tr>
                <td class="tengah" >
                    <img src="@php echo $pic  @endphp" style="float: left; padding:15px; " alt="" width="100px">
                    <h2 style="margin-left:100px; font-size:16px">PANITIA PENERIMAAN PESERTA DIDIK BARU</h2>
                    <h1 style="margin-left:100px; font-size:30px">SMK NEGERI 1 CIMAHI</h1>
                    <h3 style="margin-left:100px; font-size:16px">(Terakreditasi "A")</h3>
                    <h2 style="margin-left:100px; font-size:16px">Jl. Mahar Martanegara No.48, Utama, Kec. Cimahi Selatan, Jawa Barat 40533</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; background-color:rgb(0, 128, 128); margin-top:0">
                    <h7 style="color: white; font-size:12px">Sekretariat : Kota Cimahi, Jawa Barat 40533 Telp. (085) 748000337 Email : smkn1cimahi@gmail.com</h7>
                </td>
            </tr>
        </table>
    </div>
    <div >
        <br>
        <h1 class="isi" style="font-size:16px">FORMULIR PENDAFTARAN CALON PESERTA DIDIK BARU</h1>
        <h2 class="isi" style="font-size:16px">TAHUN AJARAN 2025/2026</h2>

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
        <table class="isi2">
            <tr style="font-family: Comic Sans MS; line-height:10px">
                <td><strong >E.</strong></td>
                <td colspan="4"><strong >Lampiran Yang Disertakan</strong></td>
            </tr>
            <tr>
                <td></td>
                <td  width="400px">1. Foto Copy Ijazah (Legalisir) 2 Lembar</td></tr>
            <tr>

                <td></td>
                <td  width="400px">2. Foto Copy SHUN (Legalisir) dan NISN 2 Lembar</td></tr>
            <tr>

                <td></td>
                <td  width="400px">3. Foto Copy Kartu Keluarga 2 Lembar</td></tr>
            <tr>

                <td></td>
                <td  width="400px">4. Foto Copy KIP, KKS, KPS, PKH (Jika Memiliki)</td></tr>
            <tr>

                <td></td>
                <td  width="400px">5. Pas Foto 3x4 (Hitam Putih) 2 Lembar</td></tr>

        </table>
    </div>
    <br>
    <br>
    <div style="font-family: Comic Sans MS;">
        <div style="float:right">
            Cimahi, {{ date('d-m-Y')}}
            <br>
            Calon Peserta Didik,
            <br>
            <br>
            <br>
            <br><br>
            ({{ Auth::user()->name }})
        </div>

        <div style="float:left">
            Panitia PPDB,
            <br>
            <br<
            <br>
            <br>
            <br><br>
            <br>
            .....................................
        </div>
    </div>

         <div class="kotak">
            <p>Pas Foto 3x4</p>
         </div>




</body>
</html>
