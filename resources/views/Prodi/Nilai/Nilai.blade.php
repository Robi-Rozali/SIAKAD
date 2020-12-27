@extends('Prodi.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nilai</h1>
          </div>
          
          <!-- awal konten utama -->
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">
                  <a href="nilai/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                  <a href="/exportnilai" class="btn btn-success"><i class="fas fa-file-alt"></i> Export</a>
                  <button type="button" class="btn btn-primary d-inline" data-toggle="modal" data-target="#import"> <i class="fas fa-file-alt"></i> Import</button>
                </div>
                <div class="card-body">
                  @php
            $no=1;
            @endphp
            
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">NIM</label>
                    <div class="col-sm-3">
                        <div class="input-group">
                             <input type="text" class="form-control" id="inputcari" placeholder="Cari Mahasiswa" value="" name="cari">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" id="carimhs" onclick="Carimhs()"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Nama</label>
                      <div class="col-sm-4">
                        <input type="text" id="nama" name="nama" class="form-control" readonly>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Jurusan</label>
                      <div class="col-sm-5">
                        <input type="text" id="jurusan" name="jurusan" class="form-control" readonly>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Semester</label>
                      <div class="col-sm-5">
                        <select type="text" id="semester" name="semester" class="form-control"></select>
                      </div>
                      <div class="">
                    <button type="button" class="btn btn-primary mb-2 my-auto" id="cari_semester" onclick="Cari()">submit</button>
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
                              <th>Aksi</th>
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
              </div>
           
      <!-- End of Main Content -->
      <div class="modal fade" id="import" tabindex="-1" aria-labelledby="import" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import Nilai</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/nilai/import/csv" enctype="multipart/form-data" method="post">
                @csrf
                @method('POST')
              <div class="modal-body">
                   <div class="row">
   
                  <div class="col-md-12">
                      <div class="form-group">
                          <input type="file" name="file" placeholder="Choose file">
                      </div>
                      @error('file')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                  </div>              
    
                  
              </div>  
              </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endsection
@section('script')
<script type="text/javascript">
    function Carimhs(){
      var id = $('#inputcari').val();
        $.get('/datanilai/'+id,function(data){
          var jrs = data.data[0].jurusan;
          $('#id').val(data.data[0].nim);
          $('#nama').val(data.data[0].nama);
          $('#jurusan').val(jrs.replace('_',' '));

          for (var i = 0; i < data.data.length; i++) {
            var smtr = data.data[i].semester;
             $('#semester').append(`<option value="${smtr}">${smtr.replace('_',' ')}</option>`);
          }
        
        });
    }
    </script>
    <script type="text/javascript">
    function Cari(){
      var semester = $('#semester').val();
      var nim = $('#inputcari').val();
      var d = document.getElementById('display');
      var rt = document.getElementById('row_table');
      var jumlah_sks = 0;
      var nilai = 0;
      var mutu = 0;
      $('.tr-semester').remove();
        $.get('/datanilai/'+semester+'/'+nim,function(data){
          $.each(data, function(i, value){
            var n = 1;
            for(var i = 0, length1 = value.length; i < length1; i++){
              var form = `
                <tr id="tr" class='tr-semester'>
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
                  <td><form action="/Nilai/${value[i].id}/edit" method="post" class="d-inline">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin ingin edit?')"><i class="fas fa-edit"></i></>
                              </form></td>
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