@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">KHS Mahasiswa</h1>
          </div>
          
          <!-- awal konten utama -->
          <!-- Begin Page Content -->
          <div class="container-fluid mb-5">
            <div class="row">
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="card-header">
                    <div class="row">
                      <label for="" class="col-md-2 my-auto">Cari Mahasiswa</label>
                      <div class="col-md-3 my-auto">
                        <input type="text" class="form-control" placeholder="Cari">
                      </div>
                      <div>
                        <button type="submit" class="btn btn-primary mb-2 my-auto" id="#">Cari</button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    
                    <div class="form-group row">
                      <label for="foto" class="col-sm-2">
                        NIM
                      </label>
                      <div class="col-sm-5 teks-hitam">
                        A3.1700040
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-2">
                        Nama
                      </label>
                      <div class="col-sm-5 teks-hitam">
                        ROBI ROZALI
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-2">
                        Jurusan / Prog
                      </label>
                      <div class="col-sm-5 teks-hitam">
                       Sistem Informasi / S1
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Nilai</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>FT0001</td>
                                <td>TRO</td>
                                <td>2</td>
                                <td>C</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <hr>
                        <div>
                          <button type="submit" class="btn btn-primary mb-2" id="#">Cetak</button>
                        </div>
                      </div>  
                    </div>
  
                  </div>
                </div>
              </div>  
            </div>
  
          </div>
        <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection