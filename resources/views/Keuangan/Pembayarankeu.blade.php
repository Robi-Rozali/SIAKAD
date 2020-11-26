@extends('Keuangan.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Pembayaran</h1>
          </div>
          
          <!-- awal konten utama -->
          <!-- Begin Page Content -->
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="card shadow">
                <div class="card-header">Tambah Data Pembayaran</div>
                <div class="card-body">
                  <form action="/pembayarankeu" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('POST')
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-right">NIM</label>
                        <div class="col-sm-9">
                          <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}">
                          @error('nim') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-right">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                          @error('nama') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 my-auto col-form-label text-right">Jurusan</label>
                      <div class="col-sm-9">
                        <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan') }}">
                          @error('jurusan') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                    </div>
                    <div class="teks-hitam">
                        <label for="">Form Transaksi</label>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Tanggal Transaksi</label>
                                <div class="">
                                  <input type="date" name="tgltransaksi" class="form-control @error('tgltransaksi') is-invalid @enderror" value="{{ old('tgltransaksi') }}">
                                  @error('tgltransaksi') 
                                    <small class="text-danger">{{ $message }}</small>
                                  @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Jenis Pembayaran</label>
                                
                                  <select class="form-control @error('jenisbayar') is-invalid @enderror" name="jenisbayar" style="width: 40%;" value="{{ old('jenisbayar') }}">
                                    <option nama="#" value="Pendaftaran">Pendaftaran</option>
                                    <option nama="#" value="UPP">UPP</option>
                                    <option nama="#" value="USB">USB</option>
                                    <option nama="#" value="SKS">SKS</option>
                                    <option nama="#" value="PPSPP">PPSPP</option>
                                    <option nama="#" value="Almamater">Almamater</option>
                                    <option nama="#" value="Semua">Semua</option>
                                </select>
                                @error('jenisbayar') 
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                                
                            </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Jumlah Bayar</label>
                                <div class="">
                                  <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" style="width: 200%" value="{{ old('jumlah') }}">
                                  @error('jumlah') 
                                    <small class="text-danger">{{ $message }}</small>
                                  @enderror
                                </div>
                              </div>
                        </div>  
                    </div>
                    
                        <hr class="sidebar-divider">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                            <a href="/index" class="btn btn-danger mb-2">Keluar</a>
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