@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-8">
              <div class="card shadow">
                <div class="card-header">Profil</div>
                <div class="card-body">
                  <form action="/mahasiswa/{{ Auth::guard('mahasiswa')->user()->id }}"method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">NIM</label>
                      <div class="col-sm-8">
                        <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ $mhs->nim }}">
                        @error('nim') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $mhs->nama }}">
                        @error('nama') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                    </div>

                     <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                          <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"  value="{{ $mhs->jenis_kelamin }}">
                            <option value="{{ $mhs->jenis_kelamin }}">{{$mhs->jenis_kelamin}}</option>
                            <option nama="#" value="Laki-laki">Laki-laki</option>
                            <option nama="#" value="Perempuan">Perempuan</option>
                          </select>
                          @error('jenis_kelamin') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" name="tempat" class="form-control @error('tempat') is-invalid @enderror" value="{{ $mhs->tempat }}">
                        @error('tempat') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="date" name="tgllahir" class="form-control @error('tgllahir') is-invalid @enderror"value="{{ $mhs->tgllahir }}">
                        @error('tgllahir') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Jurusan</label>
                        <div class="col-sm-8">
                            <select class="form-control @error('jurusan') is-invalid @enderror" name="jurusan">
                            <option value="{{ $mhs->jurusan }}">{{$mhs->jurusan}}</option>
                            @foreach ($prodi as $p)
                            <option value="{{$p->prodi}}">{{$p->prodi}}</option>
                            @endforeach
                          </select>
                          @error('jurusan') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">No Handphone</label>
                      <div class="col-sm-8">
                        <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ $mhs->telp }}">
                        @error('telp') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $mhs->email }}">
                        @error('email') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Username</label>
                        <div class="col-sm-8">
                          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ $mhs->username }}">
                          @error('username') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                          <input type="hidden" name="pass" value="{{ $mhs->password }}">
                          <input type="password" name="password" class="form-control" value="" placeholder="Kosongkan Jika tidak dirubah">
                        </div>
                      </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $mhs->alamat }}">
                        @error('alamat') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                    </div>

                   <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label ">Gambar</label>
                        <div class="col-sm-8">
                          <input type="hidden" name="gambardb" value="{{ $mhs->gambar }}">
                          <input type="file" name="gambar" class="form-control">
                          <small>{{ $mhs->gambar }}</small>
                        </div>
                      </div>

                    <hr class="sidebar-divider">
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                       <a href="/mhs" class="btn btn-danger mb-2">Keluar</a>
                    </div>

                  </form>
                </div>
              </div>  
            </div>
          </div>
        </div>
           
      <!-- End of Main Content -->
@endsection