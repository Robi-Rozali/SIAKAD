@extends('prodi.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <form action="/pilihkelasprodi" method="post">
            @csrf
            @method('POST')
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Pilih Kelas</div>
                <div class="card-body">
                    <div class="row"> 
                        <div class="col-md-6"> 
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">NIM</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="carimhs" placeholder="Cari Mahasiswa" value="" name="nim">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="carimhs" onclick="Caridata()"><i class="fas fa-search"></i></button>
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
                  </div>
                </div>

            <div class="col-md-12 mt-2">
              
              <div class="card shadow">
                <div class="card-header">Kelas Yang Dipilih :</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kode MatKul</th>
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th>Ruang</th>
                            <th>hari</th>
                            <th>Jam</th>
                            <th>Nama Dosen</th>
                            <th>Kapasitas</th>
                            <th>Sisa</th>
                            <th>Pilih</th>
                          </tr>
                        </thead>
                        <tbody id="table_nilai">

                        </tbody>
                      </table>
                      </div>

                      <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                    </div>
                  </div>
                </div>
                {{-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                </div> --}}
              </div>
            </div>

          </div>
          </form>
        </div>
      <!-- End of Main Content -->
@endsection
@section('script')
<script type="text/javascript">
    function Caridata(){
      var id = $('#carimhs').val();
        $.get('/anjay/'+id,function(data){
          var jrs = data.data.jurusan;
          var smtr = data.data.semester;
          $('#id').val(data.data.nim);
          $('#nama').val(data.data.nama);
          $('#jurusan').val(jrs.replace('_',' '));
          $('#semester').val(data.data.smt);
          $('#tahun').val(data.data.tahun);

          // $.each(data.jadwal, function(i, val){
          var n = 1;
      for(var i = 0, length1 = data.jadwal.length; i < length1; i++){
        console.log(data.jadwal[0].kode)
          var form = `
            <tr id="tr" class='tr-semester'>
              <td>${n++}</td>
              <td>${data.jadwal[i].kode}</td>
              <td>${data.jadwal[i].matakuliah}</td>
              <td>${data.jadwal[i].kelas}</td>
              <td>${data.jadwal[i].ruang}</td>
              <td>${data.jadwal[i].hari}</td>
              <td>${data.jadwal[i].jam}</td>
              <td>${data.jadwal[i].namadosen}</td>
              <td>${data.jadwal[i].kuota}</td>
              <td>${data.jadwal[i].kuota}</td>
              <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="radio" value="${data.jadwal[i].id}" name="id[0][${data.jadwal[i].kode}]" id="id_${data.jadwal[i].id}">
                </div>
              </td>
            </tr>`;
            
          $('#table_nilai').append(form);
        }
      })


    }
</script>
@endsection