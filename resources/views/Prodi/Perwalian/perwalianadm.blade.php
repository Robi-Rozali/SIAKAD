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
                <form action="/perwalianadm" method="post">
                      @csrf
                      @method('POST')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">NIM</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nim" id="nim" aria-describedby="button-nim" value="{{-- {{ ($mhs->nim == '') ? '' : $mhs->nim }} --}}">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-nim" onclick="Cari()"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                  <div class="input-group">
                                        <input type="text" class="form-control" name="nama" aria-describedby="button-nim" id="nama" readonly>
                                        {{-- <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-nim"><i class="fas fa-search"></i></button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 my-auto">Semester</label>
                                <div class="col-sm-5">
                                    <input type="text" name="semester" id="semester" class="form-control" readonly>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Tahun</label>
                                <div class="col-sm-5">
                                  <input type="text" name="tahun" id="tahun" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Jurusan</label>
                                <div class="col-sm-9">
                                  <input type="text" name="jurusan" class="form-control" readonly id="jurusan">
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
                        
                            <table class="table">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th class="text-center">Ambil</th>
                                </tr>
                            </thead>
                            <tbody id="data-kurikulum">
                                
                                
                            </tbody>
                        
                            </table>
                            
                        </div>
                        </div>  
                    </div>
                        <div class="teks-hitam">
                        Apakah Pilihan Anda Sudah Tepat ?
                        </div>
                        <hr class="sidebar-divider">
                        <div id="button-simpan">
                           <button type="submit" id="btnsubmit" class="btn btn-primary mb-2">Simpan</button>
                        </div>
                    </form>
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
@section('script')

  <script type="text/javascript">
    function Cari(){
      var id = $('#nim').val();
        $.get('/disposisi/'+id,function(data){

        // Mhs
        var jrs = data['mhs'].jurusan;
        $('#nim').val(data['mhs'].nim);
        $('#nama').val(data['mhs'].nama);
        $('#tahun').val(data['mhs'].tahun);
        $('#semester').val(data.maksmt);
        $('#jurusan').val(jrs.replace('_',' '));

        
        // Krm
        var n = 1;
        // console.log(i)
        var wajib = `
            <tr align="center">
                <td colspan="5" style="background-color: #bbdefb">Wajib (Semester ${data.maksmt})</td>
            </tr>
        `;
        var atas = `
            <tr align="center">
                <td colspan="5" style="background-color: #c8e6c9">Mengamabil Ke Atas (Semester ${data.maksmt + 2})</td>
            </tr>
        `;
        var ulang = `
            <tr align="center">
                <td colspan="5" style="background-color: #ffcdd2">Mata Kuliah Mengulang (Wajib Ambil)</td>
            </tr>
        `;

        $('#data-kurikulum').append(wajib);
        for(var i = 0, length1 = data['krm'].length; i < length1; i++){
            // console.log(value[i].kode)
            var form = `
                <tr id="tr" class='tr-semester'>
                    <td>${n++}</td>
                    <td>${data['krm'][i].kode}</td>
                    <td>${data['krm'][i].matakuliah}</td>
                    <td>${data['krm'][i].sks}</td>
                    <td>
                      
                        <div class="form-check text-center">
                            <input class="form-check-input" type="checkbox" value="${data['krm'][i].id}" name="id[0][${data['krm'][i].id}]" id="id_${data['krm'][i].id}">
                        </div>
                        
                    </td>
                </tr>`;
            $('#data-kurikulum').append(form);
        }
         
         $('#data-kurikulum').append(atas);
         for(var i = 0, length1 = data['ngambil'].length; i < length1; i++){
            // console.log(value[i].kode)
            var form = `
                <tr id="tr" class='tr-semester'>
                    <td>${n++}</td>
                    <td>${data['ngambil'][i].kode}</td>
                    <td>${data['ngambil'][i].matakuliah}</td>
                    <td>${data['ngambil'][i].sks}</td>
                    <td>
                   
                        <div class="form-check text-center">
                            <input class="form-check-input" type="checkbox" value="${data['ngambil'][i].id}" name="id[0][${data['ngambil'][i].id}]" id="id_${data['ngambil'][i].id}">
                        </div>
                      
                    </td>
                </tr>`;
            $('#data-kurikulum').append(form);
        }



         $('#data-kurikulum').append(ulang);
         for(var i = 0, length1 = data['nguli'].length; i < length1; i++){
            // console.log(value[i].kode)
            var form = `
                <tr id="tr" class='tr-semester'>
                    <td>${n++}</td>
                    <td>${data['nguli'][i].kode}</td>
                    <td>${data['nguli'][i].matakuliah}</td>
                    <td>${data['nguli'][i].sks}</td>
                    <td>
                    
                        <div class="form-check text-center">
                            <input class="form-check-input" type="checkbox" value="${data['nguli'][i].id}" name="id[0][${data['nguli'][i].id}]" id="id_${data['nguli'][i].id}">
                        </div>
                        
                    </td>
                </tr>`;
            $('#data-kurikulum').append(form);
        }


        })
    }

  </script>
@endsection