@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dosen</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Tambah Data Admin</div>
                  <div class="card-body">
                    <form action="/adminn" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('POST')

                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                          @error('nama') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tempat Lahir</label>
                        <div class="col-sm-9">
                          <input type="text" name="tempat" class="form-control @error('tempat') is-invalid @enderror" value="{{ old('tempat') }}">
                          @error('tempat') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
    
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tanggal Lahir</label>
                        <div class="col-sm-9">
                          <input type="date" name="tgllahir" class="form-control @error('tgllahir') is-invalid @enderror" value="{{ old('tgllahir') }}">
                          @error('tgllahir') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">No Handphone</label>
                        <div class="col-sm-9">
                          <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ old('telp') }}">
                          @error('telp') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Alamat</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                          @error('alamat') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Username</label>
                        <div class="col-sm-9">
                          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
                          @error('username') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                          @error('password') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Gambar</label>
                        <div class="col-sm-9">
                          <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                          @error('gambar') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <hr>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                         <a href="/adminn" class="btn btn-danger mb-2">Keluar</a>
                      </div>
  
                    </form>
                  </div>
                </div>  
              </div>
              <div class="col-md-2"></div>
            </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection