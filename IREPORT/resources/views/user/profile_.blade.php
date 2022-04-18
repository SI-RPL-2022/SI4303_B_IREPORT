@extends('layouts.master')
@section('konten')
{{-- cobain --}}

    <div class="container-fluid" style="padding-bottom: 166px">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                {{-- profile-user-img img-fluid --}}
                <img class="profile-user-img img-fluid img-circle"
                     src="{{ asset('image/'.$editProfile->foto) }}"
                     alt="Profile Picture" style="width: 150px; height: 150px; object-fit:cover">
              </div>

              <h3 class="profile-username text-center">
                @guest
                    User
                @endguest

                @auth
                  {{ $editProfile->nama }}
                @endauth
              </h3>
              <h6 class="text-center">{{ Auth::user()->email }}</h6>
              {{-- <p class="text-muted text-center">Software Engineer</p> --}}

              {{-- <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Followers</b> <a class="float-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="float-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="float-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="margin-bottom: 1px">
              <strong><i class="fas fa-calendar mr-1"></i> Tempat, Tanggal Lahir</strong>
              <p class="text-muted">{{ $editProfile->tempatLahir }}, {{ $editProfile->tanggalLahir }}</p>
              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat Rumah </strong>
              <p class="text-muted">
                {{ $editProfile->alamat }}
              </p>
              <hr>

              

              {{-- <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

              <p class="text-muted">
                <span class="tag tag-danger">UI Design</span>
                <span class="tag tag-success">Coding</span>
                <span class="tag tag-info">Javascript</span>
                <span class="tag tag-warning">PHP</span>
                <span class="tag tag-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> --}}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                {{-- <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> --}}
                {{-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Profile</a></li> --}}
                <li class="nav-item"><a class="nav-link disabled">Update Profile</a></li>
              </ul>
            </div><!-- /.card-header -->

            <div class="card-body" style="margin-bottom: 106px">
              <form action="/profile/{{ $editProfile->id }}" method="POST" style="" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('put')
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" value="{{ $editProfile->nama }}" class="form-control" placeholder="Masukkan Nickname Anda">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea name="alamat" value="{{ $editProfile->alamat}}" placeholder="Update alamat rumah anda" cols="30" rows="1" class="form-control">{{ $editProfile->alamat}}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $editProfile->tempatLahir }}" name="tempatLahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputName2" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" value="{{ $editProfile->tanggalLahir }}"name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir Anda">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Foto Profil</label>
                  <div class="col-sm-10">
                    <input type="file" value="{{ $editProfile->foto }}" name="foto" class="form-control" placeholder="Masukkan foto profile anda">
                  </div>
                </div>
                {{-- <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                </div> --}}
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>

              {{-- <div class="tab-content">
                <div class="tab-pane" id="settings">
                  <form action="/profile/{{ $editProfile->id }}" method="POST" style="" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama" value="{{ $editProfile->nama }}" class="form-control" placeholder="Masukkan Nickname Anda">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                        <textarea name="alamat" value="{{ $editProfile->alamat}}" placeholder="Update alamat rumah anda" cols="30" rows="1" class="form-control">{{ $editProfile->alamat}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $editProfile->tempatLahir }}" name="tempatLahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <input type="date" value="{{ $editProfile->tanggalLahir }}"name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir Anda">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Foto Profil</label>
                      <div class="col-sm-10">
                        <input type="file" value="{{ $editProfile->foto }}" name="foto" class="form-control" placeholder="Masukkan foto profile anda">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div> --}}
              <!-- /.tab-content -->
              
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->

@endsection