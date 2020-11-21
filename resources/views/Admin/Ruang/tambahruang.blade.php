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
                  <div class="card-header">Tambah Data Ruangan</div>
                  <div class="card-body">
                    <form action="">
                      <div class="form-group row ">
                        <label for="" class="col-sm-3 col-form-label text-right">ID Ruangan</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nama Ruangan</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Lantai</label>
                        <div class="col-sm-9">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
  
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Kapasitas</label>
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