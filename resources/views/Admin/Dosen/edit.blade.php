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
                  <div class="card-header">Edit Data Dosen</div>
                  <div class="card-body">
                    <form action="/dosen/{{ $dosen->id }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')

                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">NIDN</label>
                        <div class="col-sm-9">
                          <input type="text" name="nidn" class="form-control @error('nidn') is-invalid @enderror" value="{{ $dosen->nidn }}">
                          @error('nidn') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nama Dosen</label>
                        <div class="col-sm-9">
                          <input type="text" name="namadosen" class="form-control @error('namadosen') is-invalid @enderror" value="{{ $dosen->namadosen }}">
                          @error('namadosen') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
    
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Keilmuan</label>
                        <div class="col-sm-9">
                          <input type="text" name="keilmuan" class="form-control @error('keilmuan') is-invalid @enderror" value="{{ $dosen->keilmuan }}">
                          @error('keilmuan') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tempat Lahir</label>
                        <div class="col-sm-9">
                          <input type="text" name="tempat" class="form-control @error('tempat') is-invalid @enderror" value="{{ $dosen->tempat }}">
                          @error('tempat') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tanggal Lahir</label>
                        <div class="col-sm-9">
                          <input type="date" name="tgllahir" class="form-control @error('tgllahir') is-invalid @enderror" value="{{ $dosen->tgllahir }}">
                          @error('tgllahir') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">No Handphone</label>
                        <div class="col-sm-9">
                          <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ $dosen->telp }}">
                          @error('telp') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Email</label>
                        <div class="col-sm-9">
                          <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $dosen->email }}">
                          @error('email') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Password</label>
                        <div class="col-sm-9">
                          <input type="hidden" name="pass" value="{{ $dosen->password }}">
                          <input type="password" name="password" class="form-control" value="" placeholder="Kosongkan Jika tidak dirubah">

                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Alamat</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $dosen->alamat }}">
                          @error('alamat') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Gambar</label>
                        <div class="col-sm-9">
                          <input type="hidden" name="gambardb" value="{{ $dosen->gambar }}">
                          <input type="file" name="gambar" class="form-control">
                          <small>{{ $dosen->gambar }}</small>
                        </div>
                      </div>
  
                      <hr>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                         <a href="/dosen" class="btn btn-danger mb-2">Keluar</a>
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