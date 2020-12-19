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
            
                <div class="card-body">
                  @php
            $no=1;
            @endphp
            
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      NIM
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      {{ $nilai->nim }}
                      <input type="hidden" name="nim" value="{{ $nilai->nim }}" id="nim">
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
                 
                  <div class="form-group row">
                    <label for="" class="col-sm-3">Tahun Akademik</label>
                    <select class="form-control col-md-2 mr-2" name="tahun" id="tahun">
                      @foreach ($tahun as $nn)
                        <option value="{{ $nn->tahun }}">{{ $nn->tahun }}</option>
                        @endforeach
                    </select>
                   <div class="">
                    <button type="button" class="btn btn-primary mb-2 my-auto" id="cari_tahun" onclick="Cari()">submit</button>
                   </div>
                  </div>
                  
                  <div class="row" id="row_table" style="display: none">
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
                          <tbody id="table_nilai">
                            
                          </tbody>
                        </table>
                      </div>
                    </div> 
                    <div class="col-md-12" id="display" style="display: none">
                      <table>
                        <tr>
                          <td>Jumlah SKS</td>
                          <td>:</td>
                          <td id="jumlah_sks"></td>
                        </tr>
                        <tr>
                          <td>Jumlah Angka Mutu</td>
                          <td>:</td>
                          <td id="jumlah_mutu"></td>
                        </tr>
                        <tr>
                          <td>IPKS</td>
                          <td>:</td>
                          <td id="ipks"></td>
                        </tr>
                      </table>
                    </div> 
                  </div>
                  
                </div>
              </div>
           
      <!-- End of Main Content -->
@endsection

@section('script')
    <script type="text/javascript">
    function Cari(){
      var tahun = $('#tahun').val();
      var nim = $('#nim').val();
      var d = document.getElementById('display');
      var rt = document.getElementById('row_table');
      var jumlah_sks = 0;
      var nilai = 0;
      var mutu = 0;
      $('.tr-tahun').remove();
        $.get('/khs/'+tahun+'/'+nim,function(data){
          $.each(data, function(i, value){
            var n = 1;
            for(var i = 0, length1 = value.length; i < length1; i++){
              var form = `
                <tr id="tr" class='tr-tahun'>
                  <td>${n++}</td>
                  <td>${value[i].kode}</td>
                  <td>${value[i].matakuliah}</td>
                  <td>${value[i].sks}</td>
                  <td>${value[i].kehadiran}</td>
                  <td>${value[i].tugas}</td>
                  <td>${value[i].uts}</td>
                  <td>${value[i].uas}</td>
                  <td>${value[i].jumlah}</td>
                  <td>${value[i].grade}</td>
                </tr>`;
              $('#table_nilai').append(form);
              
              
              if(value[i].grade == 'A'){
                nilai = 4;
              }else if(value[i].grade == 'B'){
                nilai = 3;
              }else if(value[i].grade == 'C'){
                nilai = 2;
              }else if(value[i].grade == 'D'){
                nilai = 1;
              }else if(value[i].grade == 'E'){
                nilai = 0;
              }

              rt.style.display = 'block';
              mutu += value[i].sks * nilai;
              jumlah_sks = jumlah_sks + value[i].sks;
              var ipks = mutu/jumlah_sks
              $('#jumlah_sks').text(jumlah_sks);
              $('#jumlah_mutu').text(mutu);
              $('#ipks').text(ipks.toFixed(2));
              d.style.display = 'block';
            }
          });
        })
    }
  </script>
@endsection