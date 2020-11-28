@extends('Keuangan.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Biaya Kuliah</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Tambah Biaya Kuliah</div>
                  <div class="card-body">
                    <form action="/biaya" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('POST')
                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">Tahun Akdemik</label>
                        <div class="col-sm-9">
                          <select class="form-control @error('tahun') is-invalid @enderror" name="tahun"  value="">
                            <option  value="">--Pilih--</option>
                            @foreach ($tahun as $t)
                            <option  value="{{$t->tahun}}">{{$t->tahun}}</option>
                            @endforeach
                          </select>
                          @error('tahun') 
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
                        <label for="" class="col-sm-3 col-form-label text-right">Pendaftaran</label>
                        <div class="col-sm-9">
                          <input type="text" name="pendaftaran" class="form-control @error('pendaftaran') is-invalid @enderror" value="{{ old('pendaftaran') }}">
                          @error('pendaftaran') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">UPP</label>
                        <div class="col-sm-9">
                          <input type="text" name="upp" class="form-control @error('upp') is-invalid @enderror" value="{{ old('upp') }}">
                          @error('upp') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">USB</label>
                        <div class="col-sm-9">
                         <input type="text" name="usb" class="form-control @error('usb') is-invalid @enderror" value="{{ old('usb') }}">
                          @error('usb') 
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
                        <label for="" class="col-sm-3 col-form-label text-right">PPSPP</label>
                        <div class="col-sm-9">
                          <input type="text" name="ppspp" class="form-control @error('ppspp') is-invalid @enderror" value="{{ old('ppspp') }}">
                          @error('ppspp') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Almamater</label>
                        <div class="col-sm-9">
                          <input type="text" name="almamater" class="form-control @error('almamater') is-invalid @enderror" value="{{ old('almamater') }}">
                          @error('almamater') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <hr>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                         <a href="/biaya" class="btn btn-danger mb-2">Keluar</a>
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