@extends('layout.admin')
@section('judul')
    Data Pendaftar PPDB
@endsection
@section('konten')
<section class="section" style="height: 500px">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="font-family: Comic Sans MS; color: black">Laporan Peserta PPDB</h5>
            <p>Buat laporan PPDB siswa, semua data peserta PPDB siswa/siswi Smk Negeri 1 Cimahi akan di rekap dan di buat laporannya.</p>
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-top"><div class="dataTable-dropdown">
                    <a href="/excel" class="btn btn-primary rounded-pill">Export To Excel</a>
                </div>

                </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>
@endsection
{{--  @push('js')
<script src="{{ asset('templateadmin/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

@endpush  --}}

