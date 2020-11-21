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
                  <form action="">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-right">NIM</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label text-right">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 my-auto col-form-label text-right">Semester</label>
                      <div class="col-sm-9">
                        <input type="text" name="#" class="form-control">
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
                                  <input type="date" name="#" class="form-control">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 my-auto text-right">Jenis Pembayaran</label>
                                <select class="form-control" style="width: 20%;" name="" id="">
                                    <option nama="#" value="">Pendaftaran</option>
                                    <option nama="#" value="">UPP</option>
                                    <option nama="#" value="">USB</option>
                                    <option nama="#" value="">SKS</option>
                                    <option nama="#" value="">PPSPP</option>
                                    <option nama="#" value="">Almamater</option>
                                    <option nama="#" value="">Semua</option>
                                </select>
                                </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Jumlah Bayar</label>
                                <div class="">
                                  <input type="text" name="#" class="form-control" style="width: 200%;">
                                </div>
                              </div>
                        </div>  
                    </div>
                    
                        <hr class="sidebar-divider">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                            <button type="submit" class="btn btn-light mb-2">Batal</button>
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