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
                      <form class="row g-3">
                        <div class="col-auto">
                          <form action="/khsadm" method="GET">
                          @csrf

                          <input type="text" class="form-control" id="input" placeholder="Cari Mahasiswa" value="{{ old('cari') }}">
                        </div>
                        <div class="col-auto">
                          <button type="submit" id="cari" class="btn btn-primary mb-2">Cari</button>
                        </div>
                      </form>
                      
                      </form>
                      
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
                            <tbody id="databray">                             
                            </tbody>
                          </table>
                        </div>
                        <hr>
                        <div>
                          <button type="submit" class="btn btn-primary mb-2" id="#">Cetak</button>
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
    $(document).ready(function(){
      $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('Content')
        }
      });
      $('body').on('click','#cari', function(event){
        event.preventDefault()
        var id = $('#input').val();
        console.log(id)
        $.get('/khsadm/'+id,function(data){
          $('#nim').text(data.data[0].nim);
          $('#nama').text(data.data[0].nama);
          $('#jurusan').text(data.data[0].jurusan);
         
          for(var i=0; i < data.data.length; i++){
            console.log(i)
            var a,b,c,d;
            a = data.data[i].kode;
            b = data.data[i].matakuliah;
            c = data.data[i].sks;
            d = data.data[i].grade;
             var form = `
              <tr>
                                <td></td>
                                <td>`+a+`</td>
                                <td>`+b+`</td>
                                <td>`+c+`</td>
                                <td>`+d+`</td>
                              </tr>
              `;
              console.log(a,b,c,d)
              document.getElementById("databray").innerHTML = form;
            // $('#databray').html(form);
              // $('#kode').text(data.data[i].kode);
              // $('#matakuliah').text(data.data[i].matakuliah);
              // $('#sks').text(data.data[i].sks);
              // $('#grade').text(data.data[i].grade);    
          }
          
        })
      });
    })
  </script>
@endsection