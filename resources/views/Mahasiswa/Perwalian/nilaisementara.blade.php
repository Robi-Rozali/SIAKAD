@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Nilai Sementara</h1>
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
            @foreach ($nilai as $n)
                <div class="card-body">
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      NIM
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      {{ $n->nim }}
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Nama
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      {{ $n->nama }}
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Jurusan / Prog
                    </label>
                    <div class="col-sm-5 teks-hitam">
                     {{ $n->jurusan }}
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
                              <td>{{ $no++ }}</td>
                              <td>{{ $n->kode }}</td>
                              <td>{{ $n->matakuliah }}</td>
                              <td>{{ $n->sks }}</td>
                              <td>{{ $n->grade }}</td>
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