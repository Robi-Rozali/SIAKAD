@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
         <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kartu Hasil Studi</h1>
            @if(session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
          </div>
            @php
            $no=1;
            @endphp
            @foreach ($nilai as $nn)
                <div class="card-body">
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      NIM
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      {{ $nn->nim }}
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Nama
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      {{ $nn->nama }}
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Jurusan / Prog
                    </label>
                    <div class="col-sm-5 teks-hitam">
                     {{ $nn->jurusan }}
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                 
                  <div class="form-group row">
                    <label for="" class="col-sm-3">Tahun Akademik</label>
                    <select class="form-control col-md-2 mr-2" name="" id="">
                        <option nama="#" value="">{{ $nn->tahun }}</option>
                    </select>
                   <div class="">
                    <button type="submit" class="btn btn-primary mb-2 my-auto" id="#">submit</button>
                   </div>
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
                              <th>KHDR</th>
                              <th>Tugas</th>
                              <th>UTS</th>
                              <th>UAS</th>
                              <th>Jumlah</th>
                              <th>Grade</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $nn->kode }}</td>
                              <td>{{ $nn->matakuliah }}</td>
                              <td>{{ $nn->sks }}</td>
                              <td>{{ $nn->kehadiran }}</td>
                              <td>{{ $nn->tugas }}</td>
                              <td>{{ $nn->uts }}</td>
                              <td>{{ $nn->uas }}</td>
                              <td>{{ $nn->jumlah }}</td>
                              <td>{{ $nn->grade }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>  
                  </div>
                  @endforeach
                </div>
              </div>
            </div>  
          </div>

        </div>
      <!-- End of Main Content -->
@endsection