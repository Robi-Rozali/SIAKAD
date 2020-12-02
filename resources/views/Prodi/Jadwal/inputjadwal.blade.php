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
                                <select class="form-control" name="" id="prodi">
                                    <option value="SI">Sistem Informasi</option>
                                    <option value="TI">Teknik Informatika</option>
                                    <option value="MI">Manajemen Informatika</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="">Semester</label>
                                <select class="form-control" name="" id="semester" onchange="Matkul()">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="">Tahun Akademik</label>
                                <select class="form-control" name="" id="">
                                    <option nama="2018" value="">2018</option>
                                    <option nama="2019" value="">2019</option>
                                    <option nama="2020" value="">2020</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="">Kelas</label>
                                <select class="form-control" name="" id="">
                                    <option nama="A" value="">A</option>
                                    <option nama="B" value="">B</option>
                                    <option nama="C" value="">C</option>
                                </select>
                              </div>
                        </div>
                    </div>
                   
                    
                  <div class="table-responsive">
                     <table class="table table-bordered" id="">
                      <thead>
                        <tr>
                            {{-- <th>NO</th> --}}
                            <th>Hari</th>
                            <th width="100">Kode</th>
                            <th>Mata Kuliah</th>
                            <th width="100">SKS</th>
                            <th>Ruang</th>
                            <th width="100">Jam</th>
                            <th>Dosen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            {{-- <td>1</td> --}}
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
                            <td><input id="kode_matkul" type="text" name="kode" class="form-control" readonly></td>
                            <td><input id="matkul" type="text" name="matkul" class="form-control" readonly></td>
                            <td><input id="sks" type="text" name="sks" class="form-control" readonly></td>
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
                                <input id="jam_awal" type="text" name="jam_awal" class="form-control">
                                <input id="jam_akhir" type="text" name="jam_akhir" class="form-control">
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

@section('script')
    <script>
      
            function Matkul(){
                var prodi = $('#prodi').val();
                var smtr = $('#semester').val();
                $.get('/inputjadwal/'+prodi+'/'+smtr,function(data){                 
                    $('#kode_matkul').val(data.data[0].kode);
                    $('#matkul').val(data.data[0].matakuliah);
                    $('#sks').val(data.data[0].sks);
                })
            }

    </script>
@endsection