@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Riwayat Pembayaran</div>
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

                  <div class="row">
                    <div class="col-md-12">
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Jenis Transaksi</th>
                              <th>Kewajiban</th>
                              <th>%</th>
                              <th>Tot. Kewajiban</th>
                              <th>Jumlah Bayar</th>
                              <th>Tunggakan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>SKS</td>
                              <td>1.710.000</td>
                              <td>1.500.000</td>
                              <td>#</td>
                              <td>xxxxxx</td>
                              <td>xxxxxx</td>
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