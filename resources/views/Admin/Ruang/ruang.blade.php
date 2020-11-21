@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ruangan</h1>
          </div>
          
          <!-- awal konten utama -->
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header"><a href="tambahruang.html" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a></div>
                <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable">
                      <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID Ruangan</th>
                            <th>Nama Ruangan</th>
                            <th>Lantai</th>
                            <th>Kapasitas</th>
                            <th >AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>RS01</td>
                            <td>R4</td>
                            <td>2</td>
                            <td>40</td>
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