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
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header"><a href="inputBiaya.html" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a></div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 my-auto">Tahun Akademik</label>
                    <select class="form-control" style="width: 20%;" name="" id="">
                        <option nama="#" value="">2018</option>
                        <option nama="#" value="">2018</option>
                        <option nama="#" value="">2018</option>
                        <option nama="#" value="">2018</option>
                        <option nama="#" value="">2018</option>
                        <option nama="#" value="">2018</option>
                        <option nama="#" value="">2018</option>
                    </select>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 my-auto">Prodi</label>
                      <select class="form-control" style="width: 20%;" name="" id="">
                          <option nama="#" value="">SI</option>
                          <option nama="#" value="">TI</option>
                          <option nama="#" value="">MI</option>
                      </select>
                      </div>
                    <hr>
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable">
                      <thead>
                        <tr>
                            <th>NO</th>
                            <th>Pendaftaran</th>
                            <th>UPP</th>
                            <th>USB</th>
                            <th>SKS</th>
                            <th>PPSPP</th>
                            <th>Almamater</th>
                            <th >AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>200.000</td>
                            <td>1.500.000</td>
                            <td>1.500.000</td>
                            <td>1.890.000</td>
                            <td>100.000</td>
                            <td>250.000</td>
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