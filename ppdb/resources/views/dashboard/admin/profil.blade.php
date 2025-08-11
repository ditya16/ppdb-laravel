@extends('layout.admin')
@section('judul')
    Data Calon Siswa
@endsection
@section('konten')
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{ Auth::user()->photo }}" alt="Profile" class="rounded-circle" width="100px">
              <h2 style="font-family: Comic Sans MS;">{{ Auth::user()->name }}</h2>
              <h3 style="font-family: Comic Sans MS; font-size:100%">@foreach ($data as $item) {{  $item->nama_sekolah }} @endforeach</h3>

            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Ubah Profile</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah Password</button>
                  </li>
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-edit pt-2" id="profile-edit">

                  <form method="POST" enctype="multipart/form-data" action="{{  url('profil/'.\Auth::user()->id) }}">
                  {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ Auth::user()->photo }}" alt="Profile" width="100px">
                        <div class="pt-2">
                        <input type="file" class="form-control" name="photo" autocomplete="photo"  autofocus id="photo" required >
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="name" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="name" value="{{ $dt->name }}">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">E-Mail</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="email" value="{{ $dt->email }}">
                      </div>
                    </div>
                   

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Profil</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form method="POST" action="{{  url('/ubahpassword')}}">
                        {{ csrf_field() }}
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
  
                         <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password Lama</label>
  
                            <div class="col-md-6">
                                <input id="password"  type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password Baru</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password Baru</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Password
                                </button>
                            </div>
                        </div>
                    </form>

                  </div>
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
      
@endsection

