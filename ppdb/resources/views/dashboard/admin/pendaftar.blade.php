@extends('layout.admin')
@section('judul')
    Data Pendaftar PPDB
@endsection
@push('css')
    <link href="{{ asset('templateadmin/') }}/datatable/aseet/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('templateadmin/') }}/datatable/aseet/datatable/DataTables-1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endpush
@section('konten')
<section class="section" style="height: 500px">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="font-family: Comic Sans MS; color: black">Data Pendaftar PPDB</h5>
            <p>Data Pendaftar PPDB Smk Negeri 1 Cimahi</p>
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-top"><div class="dataTable-dropdown">
                     {{-- Pendaftaran <a href="/excel" class="btn btn-sm btn-primary">Dibuka</a>
                    <a href="/excel" class="btn btn-sm btn-primary">Export To Excel</a>
                    <a href="" class="btn btn-sm btn-success">Tambah Calon Peserta</a> --}}
                </div>
                    {{--  <div class="dataTable-search">
                        <form class="search-form d-flex" method="POST" action="/search">
                            {{ csrf_field() }}
                            <input type="text" name="query" placeholder="Search Pendaftar PPDB" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                          </form>
                    </div>  --}}
                </div>
                                <div class="table-responsive">
                <!-- <div class="dataTable-container"> -->
                    <table class="table datatable dataTable-table" id="example">
                <!-- <thead>
                  <tr>
                      <th scope="col" data-sortable=""><a href="#">No</a></th>
                      <th scope="col" data-sortable=""><a href="#">Photo</a></th>
                      <th scope="col" data-sortable=""><a href="#">ID Pendaftaran</a></th>
                      <th scope="col" data-sortable=""><a href="#">NISN</a></th>
                      <th scope="col" data-sortable=""><a href="#">Nama Lengkap</a></th>
                      <th scope="col" data-sortable=""><a href="#">Tempat, Tanggal Lahir</a></th>
                      <th scope="col" data-sortable=""><a href="#">Alamat</a></th>
                      <th scope="col" data-sortable=""><a href="#">Asal Sekolah</a></th>
                      <th scope="col" data-sortable=""><a href="#">Aksi</a></th>

                    </tr>
                </thead>   -->
                               <!--  <div class="table-responsive">
                                   <table  id="example"  class="table table-striped table-bordered zero-configuration"> -->
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Photo</th>
                                                <th>ID Pendaftaran</th>
                                                <th>NISN</th>
                                                <th>Nama Lengkap</th>
                                                <th>Tempat, Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Asal Sekolah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                <tbody>
                    <?php $i =1;?>
                    @foreach ( $data as $k)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>
                            <img src="{{asset($k->photo)}}" style="width:50px">
                        </td>
                        <td>{{  $k->id_registrasi }}</td>
                        <td>{{  $k->nisn }}</td>
                        <td>{{  $k->name }}</td>
                        <td>{{  $k->tmp_lahir }}, {{ $k->tgl_lahir }}</td>
                        <td>{{  $k->alamat}}</td>
                        <td>{{  $k->asal_sekolah}}</td>
                       <td>
                            <a href="lihat/{{$k->users}}" class="btn btn-sm btn-warning">Lihat</a>


                      </div>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
</section>
@endsection
@push('js')
<script src="{{ asset('templateadmin/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('templateadmin/') }}/datatable/aseet/js/jquery.js"></script>
    <script src="{{ asset('templateadmin/') }}/datatable/aseet/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('templateadmin/') }}/datatable/aseet/datatable/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('templateadmin/') }}/datatable/aseet/datatable/DataTables-1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var flash = "{{ Session::has('sukses') }}";
            if(flash){
                var pesan = "{{ Session::get('sukses') }}";
                alert(pesan);
            }
            var gagal = "{{ Session::has('gagal') }}";
            if(gagal){
                var pesan = "{{ Session::get('gagal') }}";
                alert(pesan);

            }

        });
    </script>
@endpush
