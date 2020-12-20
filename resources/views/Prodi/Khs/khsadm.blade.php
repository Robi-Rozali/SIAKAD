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
                
                          <input type="text" class="form-control" id="inputcari" placeholder="Cari Mahasiswa" value="" name="cari">
                        </div>
                        <div class="col-auto">
                          <button type="button" id="cari" onclick="Cari()" class="btn btn-primary mb-2">Cari</button>
                        </div>                    
                      
                    </div>
                  </div>
                        
                  <div class="card-body">
                    
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
                            <input type="hidden" name="id" id="id">
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
          $('#nim').text(data.data[0].nim);
          $('#nama').text(data.data[0].nama);
          $('#jurusan').text(jrs.replace('_',' '));
          $.each(data, function(i, value){
            var n = 1;
            for(var i = 0, length1 = value.length; i < length1; i++){
              $(`#tr${i}`).remove();
              var form = `
                <tr id="tr${i}">
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
    // $(document).ready(function(){
    //   $.ajaxSetup({
    //     headers:{
    //       'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('Content')
    //     }
    //   });
    //   $('body').on('click','#cari', function(event){
    //     event.preventDefault()
    //     var id = $('#input').val();
    //     console.log(id)
    //     $.get('/khsadm/'+id,function(data){
    //       $('#nim').text(data.data[0].nim);
    //       $('#nama').text(data.data[0].nama);
    //       $('#jurusan').text(data.data[0].jurusan);
         
    //       for(var i=0; i < data.data.length; i++){
    //         console.log(i)
    //         var a,b,c,d;
    //         a = data.data[i].kode;
    //         b = data.data[i].matakuliah;
    //         c = data.data[i].sks;
    //         d = data.data[i].grade;
    //          var form = `
    //           <tr>
    //                             <td></td>
    //                             <td>`+a+`</td>
    //                             <td>`+b+`</td>
    //                             <td>`+c+`</td>
    //                             <td>`+d+`</td>
    //                           </tr>
    //           `;
    //           console.log(a,b,c,d)
    //           document.getElementById("databray").innerHTML = form;
    //         // $('#databray').html(form);
    //           // $('#kode').text(data.data[i].kode);
    //           // $('#matakuliah').text(data.data[i].matakuliah);
    //           // $('#sks').text(data.data[i].sks);
    //           // $('#grade').text(data.data[i].grade);    
    //       }
          
    //     })
    //   });
    // })
  </script>
@endsection