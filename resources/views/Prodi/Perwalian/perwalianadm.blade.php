@extends('Prodi.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Disposisi</h1>
          </div>
          
          <!-- awal konten utama -->
          <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Perwalian (FRS)</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">NIM</label>
                        <div class="">
                          <input type="text" class="form-control" id="inputcari" placeholder="Masukan NIM" value="">
                        </div>
                        <div class="col-auto">
                          <button type="button" id="cari" onclick="Cari()" class="btn btn-primary mb-2">Cari</button>
                        </div>   
                      </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-5 teks-hitam" id="nama">
                        
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 my-auto">Jurusan</label>
                      <div class="col-sm-5 teks-hitam" id="jurusan">
                       
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 my-auto">Semester</label>
                      <select class="form-control" style="width: 20%;" name="" id="">
                          <option nama="#" value="">1</option>
                          <option nama="#" value="">2</option>
                          <option nama="#" value="">3</option>
                          <option nama="#" value="">4</option>
                      </select>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Max Pengambilan</label>
                        <div class="col-sm-2">
                          24
                        </div>
                    </div>
                    <div class="teks-hitam">
                        <label for="">Daftar Mata Kuliah Yang Bisa Diambil</label>
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
                                <th class="text-center">Ambil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>FT0001</td>
                                <td>TRO</td>
                                <td>2</td>
                                <td>
                                    <div class="form-check text-center">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>  
                    </div>
                    <div class="teks-hitam">
                        <label for="">Daftar Mata Kuliah Yang Diulang</label>
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
                                <th class="text-center">Ambil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>FT0001</td>
                                <td>TRO</td>
                                <td>2</td>
                                <td>
                                    <div class="form-check text-center">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>  
                    </div>
                        <div class="teks-hitam">
                        Apakah Pilihan Anda Sudah Tepat ?
                        </div>
                        <hr class="sidebar-divider">
                        <div class="">
                            <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                            <button type="submit" class="btn btn-light mb-2">Batal</button>
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