@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Edit Data Mahasiswa</div>
                  <div class="card-body">
                    <form action="/mahasiswa/{{ $mahasiswa->id }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')

                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">NIM</label>
                        <div class="col-sm-9">
                          <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ $mahasiswa->nim }}">
                          @error('nim') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $mahasiswa->nama }}">
                          @error('nama') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Jenis Kelamin</label>
                        <div class="col-sm-9">
                          <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"  value="{{ $mahasiswa->jenis_kelamin }}">
                            <option value="{{ $mahasiswa->jenis_kelamin }}">{{$mahasiswa->jenis_kelamin}}</option>
                            <option nama="#" value="Laki-laki">Laki-laki</option>
                            <option nama="#" value="Perempuan">Perempuan</option>
                          </select>
                          @error('jenis_kelamin') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tempat Lahir</label>
                        <div class="col-sm-9">
                          <input type="text" name="tempat" class="form-control @error('tempat') is-invalid @enderror" value="{{ $mahasiswa->tempat }}">
                          @error('tempat') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tanggal Lahir</label>
                        <div class="col-sm-9">
                          <input type="date" name="tgllahir" class="form-control @error('tgllahir') is-invalid @enderror" value="{{ $mahasiswa->tgllahir }}">
                          @error('tgllahir') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                     <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Jurusan</label>
                        <div class="col-sm-9">
                            <select class="form-control @error('jurusan') is-invalid @enderror" name="jurusan">
                            <option value="{{ $mahasiswa->jurusan }}">{{$mahasiswa->jurusan}}</option>
                            @foreach ($prodi as $p)
                            <option value="{{$p->prodi}}">{{$p->prodi}}</option>
                            @endforeach
                          </select>
                          @error('jurusan') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">No Handphone</label>
                        <div class="col-sm-9">
                          <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ $mahasiswa->telp }}">
                          @error('telp') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Email</label>
                        <div class="col-sm-9">
                          <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $mahasiswa->email }}">
                          @error('email') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Username</label>
                        <div class="col-sm-9">
                          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ $mahasiswa->username }}">
                          @error('username') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Password</label>
                        <div class="col-sm-9">
                          <input type="hidden" name="pass" value="{{ $mahasiswa->password }}">
                          <input type="password" name="password" class="form-control" value="" placeholder="Kosongkan Jika tidak dirubah">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Alamat</label>
                        <div class="col-sm-9">
                          <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $mahasiswa->alamat }}">
                          @error('alamat') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tahun</label>
                        <div class="col-sm-9">
                          <input type="text" name="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ $mahasiswa->tahun }}">
                          @error('tahun') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Gambar</label>
                        <div class="col-sm-9">
                          <input type="hidden" name="gambardb" value="{{ $mahasiswa->gambar }}">
                          <input type="file" name="gambar" class="form-control">
                          <small>{{ $mahasiswa->gambar }}</small>
                        </div>
                      </div>
  
                      <hr>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                        <a href="/mahasiswa" class="btn btn-danger mb-2">Keluar</a>
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