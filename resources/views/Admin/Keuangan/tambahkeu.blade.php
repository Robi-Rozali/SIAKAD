@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pengguna</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Tambah Data Pengguna Keuangan</div>
                  <div class="card-body">
                    <form action="/keu" method="post" enctype="multipart/form-data">
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
                         <a href="/keu" class="btn btn-danger mb-2">Kembali</a>
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