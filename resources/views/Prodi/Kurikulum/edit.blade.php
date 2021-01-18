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
                  <div class="card-header">Edit Data Kurikulum</div>
                  <div class="card-body">
                    <form action="/kurikulum/{{ $kurikulum->id }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')

                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">Kode MK</label>
                        <div class="col-sm-9">
                          <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ $kurikulum->kode }}">
                          @error('kode') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Mata Kuliah</label>
                        <div class="col-sm-9">
                          <input type="text" name="matakuliah" class="form-control @error('matakuliah') is-invalid @enderror" value="{{ $kurikulum->matakuliah }}">
                          @error('matakuliah') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">SKS</label>
                        <div class="col-sm-9">
                          <input type="text" name="sks" class="form-control @error('sks') is-invalid @enderror" value="{{ $kurikulum->sks }}">
                          @error('sks') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Semester</label>
                        <div class="col-sm-9">
                          <input type="text" name="semester" class="form-control @error('semester') is-invalid @enderror" value="{{ $kurikulum->semester }}">
                          @error('semester') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Jurusan</label>
                        <div class="col-sm-9">
                          <select class="form-control @error('jurusan') is-invalid @enderror" name="jurusan">
                            <option value="{{ $kurikulum->jurusan }}">{{ str_replace('_', ' ', $kurikulum->jurusan) }}</option>
                            <option disabled=""></option>
                            @foreach ($prodi as $p)
                            <option value="{{$p->prodi}}">{{ str_replace('_', ' ', $p->prodi)}}</option>
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
                          <input type="text" name="Tahun" class="form-control @error('Tahun') is-invalid @enderror" value="{{ $kurikulum->Tahun }}">
                          @error('Tahun') 
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