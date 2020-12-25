@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Kartu Rencana Studi (KRS)</div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      NIM
                    </label>
                    <div class="col-sm-5 teks-hitam">
                       {{ Auth::guard('mahasiswa')->user()->nim }}
                       <input type="hidden" value="{{ Auth::guard('mahasiswa')->user()->nim }}" name="nim" id="nimbray">
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
                 <label for="" class="col-sm-3">Semester</label>
                  <select class="form-control col-md-2 mr-2" name="semester" id="semester">
                  <option selected disabled>-- pilih --</option>
                  @foreach ($semester as $sm)
                  <option value="{{ $sm->semester }}">{{ $sm->semester }}</option>
                  @endforeach
                  </select>
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
                            </tr>
                          </thead>
                          <tbody id="table_perwalian">

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
                      </table>
                  </div>
                  <div>
                          <form action="/krs/cetakkrs/pdf" method="post">
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
      <!-- End of Main Content -->
@endsection
@section('script')
    <script type="text/javascript">
    function Cari(){
      var semester = $('#semester').val();
      var nim = $('#nimbray').val();
      var d = document.getElementById('display');
      var rt = document.getElementById('row_table');
      var jumlah_sks = 0;
      $('.tr-semester').remove();
        $.get('/krs/'+semester+'/'+nim,function(data){
          $.each(data, function(i, value){
            var n = 1;
            for(var i = 0, length1 = value.length; i < length1; i++){
              var form = `
                <tr id="tr" class='tr-semester'>
                  <td>${n++}</td>
                  <td>${value[i].kode}</td>
                  <td>${value[i].matakuliah}</td>
                  <td>${value[i].sks}</td>
                </tr>`;
              $('#table_perwalian').append(form);
              

              rt.style.display = 'block';
              jumlah_sks = jumlah_sks + value[i].sks;
              $('#jumlah_sks').text(jumlah_sks);
              d.style.display = 'block';
            }
          });
        })
    }
  </script>
@endsection
