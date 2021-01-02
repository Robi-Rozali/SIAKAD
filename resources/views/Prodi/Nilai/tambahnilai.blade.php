@extends('Prodi.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nilai</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Tambah Nilai Mahasiswa</div>
                  <div class="card-body">
                    <form action="/nilai" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('POST')
                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">NIM</label>
                        <div class="col-sm-9">
                          <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}">
                          @error('nim') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
                      {{-- <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">NIM</label>
                        <div class="col-sm-7">
                            <div class="input-group">
                                 <input type="text" class="form-control" id="inputmhs" placeholder="Cari Mahasiswa" value="" name="nim">

                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="tambahmhs" onclick="Tambahmhs()"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                      </div> --}}
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                          @error('nama') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Jurusan</label>
                        <div class="col-sm-9">
                          <input type="text" id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan') }}">
                          @error('jurusan') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Semester</label>
                        <div class="col-sm-9">
                          <input type="text" id="semester" name="semester" class="form-control @error('semester') is-invalid @enderror" value="{{ old('semester') }}">
                          @error('semester') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tahun Akademik</label>
                        <div class="col-sm-9">
                          <input type="text" id="tahun" name="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}">
                          @error('tahun') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Kode Mata Kuliah</label>
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
                        <label for="" class="col-sm-3 col-form-label text-right">Kehadiran</label>
                        <div class="col-sm-9">
                          <input type="text" name="kehadiran" class="form-control @error('kehadiran') is-invalid @enderror" value="{{ old('kehadiran') }}">
                          @error('kehadiran') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tugas</label>
                        <div class="col-sm-9">
                          <input type="text" name="tugas" class="form-control @error('tugas') is-invalid @enderror" value="{{ old('tugas') }}">
                          @error('tugas') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">UTS</label>
                        <div class="col-sm-9">
                          <input type="text" name="uts" class="form-control @error('uts') is-invalid @enderror" value="{{ old('uts') }}">
                          @error('uts') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">UAS</label>
                        <div class="col-sm-9">
                          <input type="text" name="uas" class="form-control @error('uas') is-invalid @enderror" value="{{ old('uas') }}">
                          @error('uas') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Jumlah</label>
                        <div class="col-sm-9">
                          <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}">
                          @error('jumlah') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Grade</label>
                        <div class="col-sm-9">
                          <input type="text" name="grade" class="form-control @error('grade') is-invalid @enderror" value="{{ old('grade') }}">
                          @error('grade') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
                      <hr>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                         <a href="/nilai" class="btn btn-danger mb-2">Keluar</a>
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
@section('script')
<script type="text/javascript">
    function Tambahmhs(){
      var id = $('#inputmhs').val();
        $.get('/tambahnilai/'+id,function(data){
          var jrs = data.data[0].jurusan;
          var smtr = data.data[0].semester;
          $('#id').val(data.data[0].nim);
          $('#nama').val(data.data[0].nama);
          $('#jurusan').val(jrs.replace('_',' '));
          $('#semester').val(jrs.replace('_',' '));
          $('#tahun').val(data.data[0].tahun);

          // for (var i = 0; i < data.data.length; i++) {
          //   var smtr = data.data[i].semester;
          //    $('#semester').append(`<option value="${smtr}">${smtr.replace('_',' ')}</option>`);
          // }
        
        });
    }
    </script>
@endsection