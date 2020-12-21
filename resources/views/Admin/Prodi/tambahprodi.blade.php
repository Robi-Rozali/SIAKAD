@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">PRODI</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Tambah Data Prodi</div>
                  <div class="card-body">
                    <form action="/prodi" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('POST')
  
                      {{-- <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nama Prodi</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                          @error('nama') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div> --}}
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Prodi</label>
                        <div class="col-sm-9">
                          <input type="text" name="prodi" class="form-control @error('prodi') is-invalid @enderror" value="{{ old('prodi') }}">
                          @error('prodi') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Ketua Prodi</label>
                        <div class="col-sm-9">
                          <input type="text" name="ketua" class="form-control @error('ketua') is-invalid @enderror" value="{{ old('ketua') }}">
                          @error('ketua') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">NIDN</label>
                        <div class="col-sm-9">
                          <input type="text" name="nidn" class="form-control @error('nidn') is-invalid @enderror" value="{{ old('nidn') }}">
                          @error('nidn') 
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
  
                      <hr>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                         <a href="/prodii" class="btn btn-danger mb-2">Keluar</a>
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