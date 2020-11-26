@extends('Prodi.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kurikulum</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Tambah Data Kurikulum</div>
                  <div class="card-body">
                    <form action="/kurikulum" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('POST')

                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">Kode MK</label>
                        <div class="col-sm-9">
                          <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode') }}">
                          @error('kode') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Mata Kuliah</label>
                        <div class="col-sm-9">
                          <input type="text" name="matakuliah" class="form-control @error('matakuliah') is-invalid @enderror" value="{{ old('matakuliah') }}">
                          @error('matakuliah') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">SKS</label>
                        <div class="col-sm-9">
                          <input type="text" name="sks" class="form-control @error('sks') is-invalid @enderror" value="{{ old('sks') }}">
                          @error('sks') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Semester</label>
                        <div class="col-sm-9">
                          <input type="text" name="semester" class="form-control @error('semester') is-invalid @enderror" value="{{ old('semester') }}">
                          @error('semester') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Jurusan</label>
                        <div class="col-sm-9">
                          <select class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"  value="{{ old('jurusan') }}">
                            <option nama="#" value="">--Pilih--</option>
                            @foreach ($prodi as $p)
                            <option nama="#" value="{{$p->prodi}}">{{$p->prodi}}</option>
                            @endforeach
                          </select>
                          @error('jurusan') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tahun Akademik</label>
                        <div class="col-sm-9">
                          <input type="text" name="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}">
                          @error('tahun') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <hr>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                         <a href="/kurikulum" class="btn btn-danger mb-2">Keluar</a>
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