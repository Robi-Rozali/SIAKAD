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
                  <div class="card-header">Tambah Data Mahasiswa</div>
                  <div class="card-body">
                    <form action="">
                        <div class="form-group ml-auto">
                            <button type="submit" class="btn btn-success mb-2 ">Import data</button>
                            <button type="submit" class="btn btn-success mb-2 ">Export data</button>
                        </div>
                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">NIM</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Prodi</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tahun Akademik</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="" id="">
                                <option nama="#" value="">2018</option>
                                <option nama="#" value="">2018</option>
                                <option nama="#" value="">2018</option>
                                <option nama="#" value="">2018</option>
                                <option nama="#" value="">2018</option>
                                <option nama="#" value="">2018</option>
                                <option nama="#" value="">2018</option>
                            </select>
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Kode Matakuliah</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Mata Kuliah</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">SKS</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Kehadiran</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Tugas</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">UTS</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">UAS</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Jumlah</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Grade</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
                      <hr>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                         <button type="submit" class="btn btn-danger mb-2">Keluar</button>
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