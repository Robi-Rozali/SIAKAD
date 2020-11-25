@extends('Prodi.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
          </div>
          
          <!-- awal konten utama -->
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header"><a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Cetak</a></div>
                <class class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Program Studi</label>
                                <select class="form-control" name="" id="">
                                    <option nama="#" value="">Sistem Informasi</option>
                                    <option nama="#" value="">Teknik Informatika</option>
                                    <option nama="#" value="">Manajemen Informatika</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="">Semester</label>
                                <select class="form-control" name="" id="">
                                    <option nama="#" value="">1</option>
                                    <option nama="#" value="">2</option>
                                    <option nama="#" value="">3</option>
                                    <option nama="#" value="">4</option>
                                    <option nama="#" value="">5</option>
                                    <option nama="#" value="">6</option>
                                    <option nama="#" value="">7</option>
                                    <option nama="#" value="">8</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="">Tahun Akademik</label>
                                <select class="form-control" name="" id="">
                                    <option nama="#" value="">2018</option>
                                    <option nama="#" value="">2019</option>
                                    <option nama="#" value="">2020</option>
                                </select>
                              </div>
                        </div>
                    </div>
                   
                    
                  <div class="table-responsive">
                     <table class="table table-bordered" id="">
                      <thead>
                        <tr>
                            <th>NO</th>
                            <th>Hari</th>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Ruang</th>
                            <th>Jam</th>
                            <th>Dosen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <select class="form-control" name="" id="">
                                    <option nama="#" value="">Senin</option>
                                    <option nama="#" value="">Selasa</option>
                                    <option nama="#" value="">Rabu</option>
                                    <option nama="#" value="">Kamis</option>
                                    <option nama="#" value="">Jum'at</option>
                                    <option nama="#" value="">Sabtu</option>
                                </select>
                            </td>
                            <td>ST007</td>
                            <td>Kerja Praktek</td>
                            <td>3</td>
                            <td>
                                <select class="form-control" name="" id="">
                                    <option nama="#" value="">LT1.03</option>
                                    <option nama="#" value="">LT1.04</option>
                                    <option nama="#" value="">LT1.05</option>
                                    <option nama="#" value="">LT1.06</option>
                                    <option nama="#" value="">LT1.07</option>
                                    <option nama="#" value="">LT1.08</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="#" class="form-control">
                                <input type="text" name="#" class="form-control">
                            </td>
                            <td>
                                <select class="form-control" name="" id="">
                                    <option nama="#" value="">Robi Rozali S.Kom</option>
                                    <option nama="#" value="">-</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <hr class="sidebar-divider">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                     </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection