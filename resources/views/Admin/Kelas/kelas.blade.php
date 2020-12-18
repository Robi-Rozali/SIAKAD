@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kelas</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Tambah Data Kelas</div>
                  <div class="card-body">
                    <form action="/kelas" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('POST')

                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">Kelas</label>
                        <div class="col-sm-9">
                          <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" value="{{ old('kelas') }}">
                          @error('kelas') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Kuota</label>
                        <div class="col-sm-9">
                          <input type="text" name="kuota" class="form-control @error('kuota') is-invalid @enderror" value="{{ old('kuota') }}">
                          @error('kuota') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
                      <hr>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                         <a href="/adm" class="btn btn-danger mb-2">Kembali</a>
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