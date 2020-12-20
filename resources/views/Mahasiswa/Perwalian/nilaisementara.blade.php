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
                <div class="card shadow">
                  <div class="card-header">Daftar Nilai Sementara</div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      NIM
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      {{ $nilai->nim }}
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Nama
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      {{ $nilai->nama }}
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Jurusan / Prog
                    </label>
                    <div class="col-sm-5 teks-hitam">
                     {{ $nilai->jurusan }}
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
                            @php
                              $no=1;
                              $jumlah_sks = 0;
                              $nilai = 0;
                              $mutu = 0;
                            @endphp
                            @foreach ($nilaisemua as $n)
                            @php
                              
                              $sks = $n->sks;
                              $grade =$n->grade;
                              if($grade == 'A'){
                              $nilai = 4;
                              }else if($grade == 'B'){
                              $nilai = 3;
                              }else if($grade == 'C'){
                              $nilai = 2;
                              }else if($grade == 'D'){
                              $nilai = 1;
                              }else if($grade == 'E'){
                              $nilai = 0;
                              }
                              $mutu += $sks * $nilai;
                              $jumlah_sks = $jumlah_sks + $sks;
                              $ipks = number_format((float)$mutu/$jumlah_sks, 2, '.', '');
                              $jumlah_sks =$jumlah_sks;
                              $jumlah_mutu = $mutu;

    
                            @endphp 
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $n->kode }}</td>
                              <td>{{ $n->matakuliah }}</td>
                              <td id="sks">{{ $n->sks }}</td>
                              <td id="grade">{{ $n->grade }}</td>
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div> 
                     <div class="col-md-12">
                      <table>
                        <tr>
                          <td>Jumlah SKS</td>
                          <td>:</td>
                          <td id="jumlah_sks">{{ $jumlah_sks }}</td>
                        </tr>
                        <tr>
                          <td>Jumlah Angka Mutu</td>
                          <td>:</td>
                          <td id="jumlah_mutu">{{ $jumlah_mutu }}</td>
                        </tr>
                        <tr>
                          <td>IPKS</td>
                          <td>:</td>
                          <td id="ipks">{{ $ipks }}</td>
                        </tr>
                      </table>
                    </div>  
                  </div>
                  </div>
                </div>
              </div>
           
      <!-- End of Main Content -->
@endsection
@section('script')
    <script type="text/javascript">
      // var jumlah_sks = 0;
      // var nilai = 0;
      // var mutu = 0;
    // $(document).ready(function(){
    //   var sks = $('#sks').text();
    //   var grade = $('#grade').text();         
    //           if(grade == 'A'){
    //             nilai = 4;
    //           }else if(grade == 'B'){
    //             nilai = 3;
    //           }else if(grade == 'C'){
    //             nilai = 2;
    //           }else if(grade == 'D'){
    //             nilai = 1;
    //           }else if(grade == 'E'){
    //             nilai = 0;
    //           }

    //           mutu += sks * nilai;
    //           jumlah_sks = jumlah_sks + sks;
    //           var ipks = mutu/jumlah_sks
    //           $('#jumlah_sks').text(jumlah_sks);
    //           $('#jumlah_mutu').text(mutu);
    //           $('#ipks').text(ipks.toFixed(2));
      
    // })
  </script>
@endsection