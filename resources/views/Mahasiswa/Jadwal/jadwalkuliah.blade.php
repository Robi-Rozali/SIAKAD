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
                      {{ Auth::guard('mahasiswa')->user()->nim }}
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Nama
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      {{ Auth::guard('mahasiswa')->user()->nama }}
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Jurusan / Prog
                    </label>
                    <div class="col-sm-5 teks-hitam">
                     {{ Auth::guard('mahasiswa')->user()->jurusan }}
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Tahun Akademik / Per
                    </label>
                    <div class="col-sm-5 teks-hitam">
                     {{ Auth::guard('mahasiswa')->user()->tahun }}
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
                              <th>Kelas | Ruang</th>
                              <th>Hari | Jam</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                              $no=1;
                            @endphp
                        @foreach ($jadwal as $j)
                          <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $j->kode }}</td>
                              <td>{{ $j->matakuliah }}</td>
                              <td>{{ $j->kelas }} | {{ $j->ruang }}</td>
                              <td>{{ $j->hari }} | {{ $j->jam }}</td>
                            </tr>
                        @endforeach
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