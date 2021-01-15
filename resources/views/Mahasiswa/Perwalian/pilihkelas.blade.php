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
                            <th>Semester</th>
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
@php
  $no = 1;
  $jdw = json_encode($jadwal);
@endphp
{{-- {{ dd($isi) }} --}}
 @for ($i = 0; $i < count($jadwal) ; $i++)
    @for ($j = 0; $j < count($jadwal[$i]) ; $j++)
                          <tr id="tr{{ $jadwal[$i][$j]->id }}" class='tr-semester'>

                            <td>{{ $no++ }}</td>
                            <td>{{ $jadwal[$i][$j]->kode }}</td>
                            <td>{{ $jadwal[$i][$j]->matakuliah }}</td>
                            <td>{{ $jadwal[$i][$j]->semester }}</td>
                            <td>{{ $jadwal[$i][$j]->kelas }}</td>
                            <td>{{ $jadwal[$i][$j]->ruang }}</td>
                            <td>{{ $jadwal[$i][$j]->hari }}</td>
                            <td>{{ $jadwal[$i][$j]->jam }}</td>
                            <td>{{ $jadwal[$i][$j]->namadosen }}</td>
                            <td>{{ $jadwal[$i][$j]->kuota }}</td>
                     {{--  @if ($jadwal[$i][$j]->kelas == $isi[$i][$j]->kelas)
                        <td>{{ $jadwal[$i][$j]->kuota - $isi[$i][$j]->eusi }}</td>
                      @else --}}
                        <td>{{ $jadwal[$i][$j]->kuota }}</td>
                      {{-- @endif --}}
                            
                            <td>
                              <div class="form-check text-center">
                                <input class="form-check-input" type="radio" value="" name="id[0][{{ $jadwal[$i][$j]->kode }}]" id="id_{{ $jadwal[$i][$j]->id }}">
                                <input class="form-check-input" type="radio" value="{{ $jadwal[$i][$j]->id }}" name="id[0][{{ $jadwal[$i][$j]->kode }}]" id="id_{{ $jadwal[$i][$j]->id }}">
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
{{-- <script>
  $(document).ready(function(){
    var arr =  @php
      echo json_encode($jadwal);
    @endphp ;
    var isi =  @php
      echo json_encode($isi);
    @endphp ;
      // $.each(arr, function(i, value){
        // console.log(arr)
        var n = 1;
        var h = 0;
        // for(var i = 0, length1 = arr.length; i < length1; i++){
        $.each(arr, function(j, val){
          for(var i = 0, length1 = isi.length; i < length1; i++){
            if(val.id == isi[i].id_jadwal){
              h =  val.kuota - isi[i].eusi;
            }
            console.log(h)
          }
         
          var form = `
            <tr id="tr" class='tr-semester'>
              <td>${n++}</td>
              <td>${val.kode}</td>
              <td>${val.matakuliah}</td>
              <td>${val.kelas}</td>
              <td>${val.ruang}</td>
              <td>${val.hari}</td>
              <td>${val.jam}</td>
              <td>${val.namadosen}</td>
              <td>${val.kuota}</td>
              <td>${h}</td>
              <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="radio" value="${val.id}" name="id[0][${val.kode}]" id="id_${val.id}">
                </div>
              </td>
            </tr>`;
            
          $('#table_nilai').append(form);
        })
     
  })
    
       
   











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
</script> --}}
@endsection