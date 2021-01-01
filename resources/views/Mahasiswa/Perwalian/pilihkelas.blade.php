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
                    <form action="/pilihkelas" method="post">
                      @csrf
                      @method('POST')
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
@php
  $no = 1;
  $jdw = json_encode($jadwal);
@endphp
{{-- {{ dd($jadwal[0]) }} --}}
  @for ($i = 0; $i < count($jadwal) ; $i++)
    @for ($j = 0; $j < count($jadwal[$i]) ; $j++)
                          <tr id="tr{{ $jadwal[$i][$j]->id }}" class='tr-semester'>
                            <td>{{ $no++ }}</td>
                            <td>{{ $jadwal[$i][$j]->kode }}</td>
                            <td>{{ $jadwal[$i][$j]->matakuliah }}</td>
                            <td>{{ $jadwal[$i][$j]->kelas }}</td>
                            <td>{{ $jadwal[$i][$j]->ruang }}</td>
                            <td>{{ $jadwal[$i][$j]->hari }}</td>
                            <td>{{ $jadwal[$i][$j]->jam }}</td>
                            <td>{{ $jadwal[$i][$j]->namadosen }}</td>
                            <td>{{ $jadwal[$i][$j]->namadosen }}</td>
                            <td>{{ $jadwal[$i][$j]->namadosen }}</td>
                            <td>
                              <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="" name="id[0][{{ $jadwal[$i][$j]->id }}]" id="id_{{ $jadwal[$i][$j]->id }}" onclick="Pilih('{{ $jadwal[$i][$j]->id }}')">
                              </div>
                            </td>
                          </tr>
      @endfor
@endfor

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
<script>
  $(document).ready(function(){
  //   var arr = @ php
  //   echo $jadwal;
  //   @ endphp;
  //   var merge = [].concat.apply([],arr);
    // var n = 1;
    // for(var i = 0, length1 = merge.length; i < length1; i++){
    //   var form = `
    //     <tr id="tr${merge[i].id}" class='tr-semester'>
    //       <td>${n++}</td>
    //       <td>${merge[i].kode}</td>
    //       <td>${merge[i].matakuliah}</td>
    //       <td>${merge[i].kelas}</td>
    //       <td>${merge[i].ruang}</td>
    //       <td>${merge[i].hari}</td>
    //       <td>${merge[i].jam}</td>
    //       <td>${merge[i].namadosen}</td>
    //       <td>${merge[i].namadosen}</td>
    //       <td>${merge[i].namadosen}</td>
    //       <td>
    //         <div class="form-check text-center">
    //           <input class="form-check-input" type="checkbox" value="" name="id[0][${merge[i].id}]" id="id_${merge[i].id}" onclick="Pilih('${merge[i].id}')">
    //         </div>
    //       </td>
    //     </tr>`;
    //     $('#data-kelas').append(form);
    // }

    Swal.fire(
        'Info',
        'Karek bisa nyimpen',
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