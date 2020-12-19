@extends('Prodi.template.main')

@section('konten')
{{-- @foreach ($mhs as $d) --}}
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Disposisi</h1>
          </div>
          
          <!-- awal konten utama -->
          <!-- Begin Page Content -->
        
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Perwalian (FRS)</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">NIM</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nim" aria-describedby="button-nim" value="{{-- {{ ($mhs->nim == '') ? '' : $mhs->nim }} --}}">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-nim"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                  <div class="input-group">
                                        <input type="text" class="form-control" name="nama" aria-describedby="button-nim">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-nim"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 my-auto">Semester</label>
                                <div class="col-sm-5">
                                    <select class="form-control"  name="semester" id="">
                                        <option selected disabled>-- pilih --</option>
                                        <option value="">Semester 1</option>
                                        <option value="">Semester 2</option>
                                        <option value="">Semester 3</option>
                                        <option value="">Semester 4</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Tahun</label>
                                <div class="col-sm-5">
                                  <input type="text" name="tahun" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Jurusan</label>
                                <div class="col-sm-9">
                                  <input type="text" name="jurusan" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Max Pengambilan</label>
                                <div class="col-sm-2">
                                  <input type="text" name="maks" id="maks" value="21" readonly class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                   
                    
                    
                    
                    <div class="teks-hitam">
                        <label for="">Daftar Mata Kuliah Yang Bisa Diambil</label>
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
                                <th class="text-center">Ambil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>FT0001</td>
                                <td>TRO</td>
                                <td>2</td>
                                <td>
                                    <div class="form-check text-center">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>  
                    </div>
                    <div class="teks-hitam">
                        <label for="">Daftar Mata Kuliah Yang Diulang</label>
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
                                <th class="text-center">Ambil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>FT0001</td>
                                <td>TRO</td>
                                <td>2</td>
                                <td>
                                    <div class="form-check text-center">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>  
                    </div>
                        <div class="teks-hitam">
                        Apakah Pilihan Anda Sudah Tepat ?
                        </div>
                        <hr class="sidebar-divider">
                        <div class="">
                            <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                            <button type="submit" class="btn btn-light mb-2">Batal</button>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        </div>
        <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
{{-- @endforeach --}}    
@endsection
{{-- @section('script')

  <script type="text/javascript">
    function Cari(){
      var id = $('#inputcari').val();
        $.get('/perwalianadm/'+id,function(data){
          var jrs = data.data[0].jurusan;
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
                  <td>${value[i].sks}</td>>
                </tr>`;
              $('#table_perwalian').append(form);
            }
          });
        })
    }
  </script>
@endsection --}}