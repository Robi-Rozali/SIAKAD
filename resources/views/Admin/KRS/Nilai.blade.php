@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nilai</h1>
          </div>
          
          <!-- awal konten utama -->
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header"><a href="tambahnilai.html" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a></div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">NIM</label>
                        <div class="">
                          <input type="text" name="#" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-2">Nama</label>
                        <div class="col-sm-2">
                          Robi Rozali
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Jurusan</label>
                        <div class="col-sm-2">
                          SI
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Tahun Akademik</label>
                        <div class="col-sm-2">
                          2018
                        </div>
                    </div>
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable">
                      <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kode Matakuliah</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Kehadiran</th>
                            <th>Tugas</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Jumlah</th>
                            <th>Grade</th>
                            <th>AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>A3.1700040</td>
                            <td>Robi</td>
                            <td>L</td>
                            <td>Sumedang</td>
                            <td>Sumedang</td>
                            <td>Sumedang</td>
                            <td>Sumedang</td>
                            <td>Sumedang</td>
                            <td>Sumedang</td>
                            <td>
                              <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                              <div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>
                              <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
          </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection