@extends('Prodi.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">KHS Mahasiswa</h1>
          </div>
          
          <!-- awal konten utama -->
          <!-- Begin Page Content -->
          <div class="container-fluid mb-5">
            <div class="row">
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="card-header">
                    <div class="row">
                      
                        <div class="col-auto">
                
                          <input type="text" class="form-control" id="inputcari" placeholder="Cari Mahasiswa" value="" name="nim">
                        </div>
                        <div class="col-auto">
                          <button type="button" id="cari" onclick="Cari()" class="btn btn-primary mb-2">Cari</button>
                        </div>                    
                      
                    </div>
                  </div>
                        
                  <div class="card-body">
                    @php
                      $no=1;
                    @endphp
                    <div class="form-group row">
                      <label for="" class="col-sm-2">
                        NIM
                      </label>
                      <div class="col-sm-5 teks-hitam" id="nim">
                      
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2">
                        Nama
                      </label>
                      <div class="col-sm-5 teks-hitam" id="nama">
                        
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2">
                        Jurusan / Prog
                      </label>
                      <div class="col-sm-5 teks-hitam" id="jurusan">
                       
                      </div>
                      <div class="col-sm-4"></div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label">Semester</label>
                      <div class="col-sm-5">
                        <select type="text" id="semester" name="semester" class="form-control"></select>
                      </div>
                      <div class="">
                    <button type="button" class="btn btn-primary mb-2 my-auto" id="cari_semester" onclick="Caridata()">submit</button>
                   </div>
                  </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="table-responsive">
                          <table class="table table-striped" id="">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Nilai</th>
                              </tr>
                            </thead>
                            <tbody id="table_nilai">
                            </tbody>
                          </table>
                        </div>
                        <hr>
                        <div>
                          <form action="/khsadm/cetak/pdf" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="idnim" id="idnim">
                            <input type="hidden" name="oioi" id="oioi">
                            <button type="submit" class="btn btn-info"><i class="fas fa-print"></i> Cetak</button>  
                          </form>
                          
                        </div>
                      </div>  
                    </div>
                        
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

  <script type="text/javascript">
    function Cari(){
      var id = $('#inputcari').val();
        $.get('/khsadm/'+id,function(data){
          var jrs = data.data[0].jurusan;
          $('#id').val(data.data[0].nim);
          $('#idnim').val(data.data[0].nim);
          $('#nim').text(data.data[0].nim);
          $('#nama').text(data.data[0].nama);
          $('#jurusan').text(jrs.replace('_',' '));
          for (var i = 0; i < data.data.length; i++) {
            var smtr = data.data[i].semester;
             $('#semester').append(`<option value="${smtr}">${smtr.replace('_',' ')}</option>`);
          }
    //       $.each(data, function(i, value){
    //         var n = 1;
    //         for(var i = 0, length1 = value.length; i < length1; i++){
    //           $(`#tr${i}`).remove();
    //           var form = `
    //             <tr id="tr${i}">
    //               <td>${n++}</td>
    //               <td>${value[i].kode}</td>
    //               <td>${value[i].matakuliah}</td>
    //               <td>${value[i].sks}</td>
    //               <td>${value[i].grade}</td>
    //             </tr>`;
    //           $('#table_nilai').append(form);
    //         }
          });
    //     })
    }
  </script>
    <script type="text/javascript">
    function Caridata(){
      var semester = $('#semester').val();
      $('#oioi').val(semester);
      var nim = $('#inputcari').val();
      var d = document.getElementById('display');
      var rt = document.getElementById('row_table');
      var jumlah_sks = 0;
      var nilai = 0;
      var mutu = 0;
      $('.tr-semester').remove();
        $.get('/data/'+semester+'/'+nim,function(data){
          $.each(data, function(i, value){
            var n = 1;
            for(var i = 0, length1 = value.length; i < length1; i++){
              var form = `
                <tr id="tr" class='tr-semester'>
                  <td>${n++}</td>
                  <td>${value[i].kode}</td>
                  <td>${value[i].matakuliah}</td>
                  <td>${value[i].sks}</td>
                  <td>${value[i].grade}</td>
                </tr>`;
              $('#table_nilai').append(form);
              
              
      

            }
          });
        })
    }
  </script>
@endsection