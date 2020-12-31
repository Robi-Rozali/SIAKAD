@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Pilih Kelas</div>
                <div class="card-body">

                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      NIM
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      {{ Auth::guard('mahasiswa')->user()->nim }}
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
                    <label for="foto" class="col-sm-3">
                      Tahun Akademik / Per
                    </label>
                    <div class="col-sm-5 teks-hitam">
                     {{ Auth::guard('mahasiswa')->user()->tahun }}
                    </div>
                    <div class="col-sm-4"></div>
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
                        <tbody id="data-kelas">
                        
                        </tbody>
                      </table>
                      </div>
                    </div>


                    {{-- <div class="col-md-4 mt-2">
                      <p class="bg-utama py-2 pl-2">No</p>
                    </div>
                    <div class="col-md-8 mt-2">
                      <p class="ml-3">1</p>
                    </div>

                    <div class="col-md-4 mt-2">
                      <p class="bg-utama py-2 pl-2">Kode Mata Kuliah</p>
                    </div>
                    <div class="col-md-8 mt-2">
                      <p class="ml-3">FT2012</p>
                    </div>

                    <div class="col-md-4 mt-2">
                      <p class="bg-utama py-2 pl-2">Mata Kuliah</p>
                    </div>
                    <div class="col-md-8 mt-2">
                      <p class="ml-3">Algoritma</p>
                    </div>

                    <div class="col-md-4 mt-2">
                      <p class="bg-utama py-2 pl-2">Kelas yang dipilih</p>
                    </div>
                    <div class="col-md-8 mt-2">
                      <p class="ml-3">A</p>
                    </div>

                    <div class="col-md-4 mt-2">
                      <p class="bg-utama py-2 pl-2">Kelas yang tersedia</p>
                    </div>
                    <div class="col-md-8 mt-2">
                      <div class="form-check ml-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">Kelas: A | Ruang: R4 | Hari: Sabtu | Jam: 13.00-15.00 | Kapasitas : 40 Orang | Sisa : 30 Orang </label>
                      </div>
                      <div class="form-check ml-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">Kelas: B | Ruang: R3 | Hari: Rabu | Jam: 13.00-15.00 | Kapasitas : 40 Orang | Sisa : 28 Orang </label>
                      </div>
                      <div class="form-check ml-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">Kelas: B | Ruang: R3 | Hari: Rabu | Jam: 13.00-15.00 | Kapasitas : 40 Orang | Sisa : 28 Orang </label>
                      </div>
                      <div class="form-check ml-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">Kelas: B | Ruang: R3 | Hari: Rabu | Jam: 13.00-15.00 | Kapasitas : 40 Orang | Sisa : 28 Orang </label>
                      </div>
                    </div> --}}
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary btn-lg">Simpan</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      <!-- End of Main Content -->
@endsection

@section('script')
<script>
  $(document).ready(function(){
    var arr = @php
    echo $jadwal;
    @endphp;
    var merge = [].concat.apply([],arr);
            var n = 1;
            for(var i = 0, length1 = merge.length; i < length1; i++){
              var form = `
                <tr id="tr${merge[i].id}" class='tr-semester'>
                  <td>${n++}</td>
                  <td>${merge[i].kode}</td>
                  <td>${merge[i].matakuliah}</td>
                  <td>${merge[i].kelas}</td>
                  <td>${merge[i].ruang}</td>
                  <td>${merge[i].hari}</td>
                  <td>${merge[i].jam}</td>
                  <td>${merge[i].namadosen}</td>
                  <td>${merge[i].namadosen}</td>
                  <td>${merge[i].namadosen}</td>
                  <td>
                    <div class="form-check text-center">
                      <input class="form-check-input" type="checkbox" value="" name="id" id="id_${merge[i].id}" onclick="Pilih('${merge[i].id}')">
                    </div>
                  </td>
                </tr>`;
              $('#data-kelas').append(form);
            }


    Swal.fire(
        'Info',
        'karek bisa nampilkeun, tampilan na dikieu keun we, ke tinggal di sort berdasarkan kelas (acan ieu mah), cobaan pilih jadwal na',
        'info'
    );
         
  });

  function Pilih(id){
    var tr = document.getElementById(`tr${id}`);
        if ($(`#id_${id}`).is(':checked')) {
            tr.style.backgroundColor = '#d4edda';

            // teks warna hitam
            // tr.style.color = '#000';
        }else{
            tr.style.backgroundColor = '#fff';
        }
  }
</script>
@endsection