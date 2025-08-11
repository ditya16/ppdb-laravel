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
          <div class="card-body" >
            <h5 class="card-title" style="font-family: Comic Sans MS; color: black">Data Akun Peserta PPDB yang Terdaftar</h5>
            <p>Akun peserta PPDB Smk Negeri 1 Cimahi yang sudah terdaftar</p>
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-top"><div class="dataTable-dropdown">
                    <a href="/tambahakun" class="btn btn-success rounded-pill">Tambah Akun Peserta PPDB</a>
                </div>
            </div>
            <!-- <div class="dataTable-container">
                <table class="table datatable dataTable-table">
            <thead>
              <tr>
                  <th scope="col" data-sortable=""><a href="#">No</a></th>
                  <th scope="col" data-sortable=""><a href="#">Photo</a></th>
                  <th scope="col" data-sortable=""><a href="#">Nama</a></th>
                  <th scope="col" data-sortable=""><a href="#">E-Mail</a></th>
                  <th scope="col" data-sortable=""><a href="#">Aksi</a></th>

                </tr>
            </thead> -->
            <div class="table-responsive">
                    <table class="table datatable dataTable-table" id="example">
                <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Photo</th>
                                                <th>Nama</th>
                                                <th>E-Mail</th>

                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
            <tbody>
                <?php $i =1;?>
                @foreach ( $akun as $k)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>
                        <img src="{{asset($k->photo)}}" style="width:50px">
                    </td>
                    <td>{{  $k->name }}</td>
                    <td>{{  $k->email }}</td>
                    <td>
                        <a href="hapusakun/{{$k->id}}" class="btn btn-sm btn-danger" onclick="return confirm('yakin?');">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
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
        $(document).ready(function () {
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
