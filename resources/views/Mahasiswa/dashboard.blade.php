@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <div class="container-fluid mb-5">
            <div class="row">
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        NIM :
                      </label>
                      <div class="col-sm-5 teks-hitam">
                        A3.1700040
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        Nama :
                      </label>
                      <div class="col-sm-5 teks-hitam">
                        ROBI ROZALI
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        Program Studi / Jenjang :
                      </label>
                      <div class="col-sm-5 teks-hitam">
                       Sistem Informasi / S1
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        Bidang Konsentrasi
                      </label>
                      <div class="col-sm-5 teks-hitam">
                       -
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        Kelas :
                      </label>
                      <div class="col-sm-5 teks-hitam">
                       Reguler
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="foto" class="col-sm-3">
                        IPK
                      </label>
                      <div class="col-sm-5 teks-hitam">
                       3.77
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Capaian</h6>
                      <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        
                      </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
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