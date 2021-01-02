@extends('Prodi.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Nilai</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="modal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="/nilai/{{ $nilai->id }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">Kode Mata Kuliah</label>
                        <div class="col-sm-9">
                          <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ $nilai->kode }}" readonly>
                          @error('kode') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Mata Kuliah</label>
                        <div class="col-sm-9">
                          <input type="text" name="matakuliah" class="form-control @error('matakuliah') is-invalid @enderror" value="{{ $nilai->matakuliah }}" readonly>
                          @error('matakuliah') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">SKS</label>
                        <div class="col-sm-9">
                          <input type="text" name="sks" class="form-control @error('sks') is-invalid @enderror" value="{{ $nilai->sks }}" readonly>
                          @error('sks') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Kehadiran</label>
                        <div class="col-sm-9">
                          <input type="text" name="kehadiran" class="form-control @error('kehadiran') is-invalid @enderror" value="{{ $nilai->kehadiran }}" readonly>
                          @error('kehadiran') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tugas</label>
                        <div class="col-sm-9">
                          <input type="text" name="tugas" class="form-control @error('tugas') is-invalid @enderror" value="{{ $nilai->tugas }}" readonly>
                          @error('tugas') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">UTS</label>
                        <div class="col-sm-9">
                          <input type="text" name="uts" class="form-control @error('uts') is-invalid @enderror" value="{{ $nilai->uts }}" readonly>
                          @error('uts') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">UAS</label>
                        <div class="col-sm-9">
                          <input type="text" name="uas" class="form-control @error('uas') is-invalid @enderror" value="{{ $nilai->uas }}" readonly>
                          @error('uas') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Jumlah</label>
                        <div class="col-sm-9">
                          <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ $nilai->jumlah }}" readonly>
                          @error('jumlah') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Grade</label>
                        <div class="col-sm-9">
                          <input type="text" name="grade" class="form-control @error('grade') is-invalid @enderror" value="{{ $nilai->grade }}" readonly>
                          @error('grade') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
                      <hr> 
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                         <a href="/nilai" class="btn btn-danger mb-2">Keluar</a>
                  </div>
                </div>
              </div>
            </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection