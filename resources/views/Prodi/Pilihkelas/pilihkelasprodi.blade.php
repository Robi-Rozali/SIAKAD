@extends('prodi.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
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
                    <form action="{{-- /pilihkelasprodi --}}" method="post">
                      {{-- @csrf
                      @method('POST') --}}
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
                        <tbody>

{{-- {{ dd($jadwal) }} --}}
  
                          <tr id="" class='tr-semester'>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                      
                            
                            <td>
                              <div class="form-check text-center">
                                <input class="form-check-input" type="radio" value="" name="" id="">
                              </div>
                            </td>
                          </tr>


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
              </form>
            </div>

          </div>
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
        });
    }















  // function Pilih(id){
  //   // console.log(id)
  //   var tr = $(`.tr${id}`);
  //   var radio = $(`.id_${id}`);
  //   // console.log(radio)
  //   console.log(tr)

  //   var tr_smt = $(`.tr-semester`);
  //   // console.log(tr_smt)
  //   tr_smt.style.backgroundColor = '#fff';

  //   if (radio.checked = true) {
  //     tr.style.backgroundColor = '#d4edda';
  //   }
  // }
</script>
@endsection