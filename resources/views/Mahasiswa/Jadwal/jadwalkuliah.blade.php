@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Jadwal Kuliah</div>
                <div class="card-body">

                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      NIM
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      A3.1700040
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Nama
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      ROBI ROZALI
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Jurusan / Prog
                    </label>
                    <div class="col-sm-5 teks-hitam">
                     Sistem Informasi / S1
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Tahun Akademik / Per
                    </label>
                    <div class="col-sm-5 teks-hitam">
                     2020/2021 / 1
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
                              <th>Mata Kuliah | SKS</th>
                              <th>Kelas | Ruang</th>
                              <th>Hari | Jam</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>SI1044</td>
                              <td>Kerja Praktek | 2</td>
                              <td>B | R8</td>
                              <td>Rabu | 15.30 - 17.10</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>  
                  </div>

                </div>
              </div>
            </div>  
          </div>

        </div>
      <!-- End of Main Content -->
@endsection