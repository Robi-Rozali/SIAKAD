@extends('Prodi.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Input Jadwal</h1>
          </div>
          
          <!-- awal konten utama -->
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header"><a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Cetak</a></div>
                <div class="card-body">
                    <form action="/inputjadwal" method="post">
                      @csrf
                      @method('POST')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Program Studi</label>
                              <select class="form-control" name="fields[0][jurusan]" id="jurusan">
                                <option value="">--Pilih--</option>
                                @foreach ($prodi as $p)
                                  <option value="{{$p->prodi}}">{{ str_replace('_', ' ', $p->prodi) }}</option>
                                @endforeach 
                              </select>
                              @error('jurusan') 
                                <small class="text-danger">{{ $message }}</small>
                              @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="" class="">Semester</label>
                                <select class="form-control" name="fields[0][semester]" id="semester">
                                  <option value="">--Pilih--</option>
                                  @foreach ($semester as $s)
                                  <option value="{{$s->semester}}">{{ str_replace('_', ' ', $s->semester) }}</option>
                                  @endforeach
                                </select>
                                  @error('semester') 
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="" class="">Tahun Akademik</label>
                              <select class="form-control" name="fields[0][tahun]" id="tahun" onchange="Matkul()">
                                <option value="">--Pilih--</option>
                                @foreach ($tahun as $t)
                                  <option value="{{$t->tahun}}">{{$t->tahun}}</option>
                                @endforeach
                              </select>
                              @error('tahun') 
                                <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="">Kelas</label>
                                <select class="form-control" name="fields[0][kelas]" id="kelas">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                              </div>
                        </div>
                    </div>
                   
                    
                  <div class="table-responsive">
                     <table class="table table-bordered" id="formjadwal">
                        <tr>
                            {{-- <th>NO</th> --}}
                            <th>Hari</th>
                            <th width="100">Kode</th>
                            <th>Mata Kuliah</th>
                            <th width="100">SKS</th>
                            <th>Ruang</th>
                            <th width="100">Jam</th>
                            <th>Dosen</th>
                            <th></th>
                        </tr>
                        <tr>
                            {{-- <td>1</td> --}}
                            <td>
                                <select class="form-control" name="fields[0][hari]" id="">
                                      <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                </select>
                            </td>
                            <td>
                                <input id="kode_matkul0" type="text" name="fields[0][kode]" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode') }}" readonly>
                            </td>

                            <td>
                                {{-- <input id="matkul" type="text" name="fields[0][matakuliah]" class="form-control @error('matakuliah') is-invalid @enderror" value="{{ old('matakuliah') }}" > --}}
                                <select name="fields[0][matakuliah]" id="matkul0" class="form-control" onchange="Detail('0')">
                                  <option selected>-- pilih --</option>
                                </select>
                            </td>
                            <td>
                                <input id="sks0" type="text" name="fields[0][sks]" class="form-control @error('sks') is-invalid @enderror" value="{{ old('sks') }}" readonly>
                            </td>
                            <td>
                                <select class="form-control @error('ruang') is-invalid @enderror" name="fields[0][ruang]"  value="{{ old('ruang') }}">
                            <option  value="">--Pilih--</option>
                            @foreach ($lantai as $l)
                            <option value="{{$l->lantai}}{{$l->nama}}">{{$l->lantai}}{{$l->nama}}</option>
                            @endforeach
                          </select>
                          @error('ruang') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                            </td>
                            <td>
                                <input id="jam" type="text" name="fields[0][jam]" class="form-control @error('jam') is-invalid @enderror" value="{{ old('jam') }}">
                            </td>
                            <td>
                            <select class="form-control @error('namadosen') is-invalid @enderror" name="fields[0][namadosen]"  value="{{ old('namadosen') }}">
                            <option  value="">--Pilih--</option>
                            @foreach ($namadosen as $d)
                            <option value="{{$d->namadosen}}">{{$d->namadosen}}</option>
                            @endforeach
                          </select>
                          @error('namadosen') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                            </td>
                            <td><button type="button" class="btn btn-success" id="tambahform" onclick="Tambah()"><i class="fas fa-plus"></i></button></td>
                        </tr>
                    </table>
                    <hr class="sidebar-divider">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                     </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection

@section('script')
    <script>
      var i = 0;

      function Tambah(){
        i++;
        var prodi = $('#jurusan').val();
        var smtr = $('#semester').val();
        var tahun = $('#tahun').val();
        var kelas = $('#kelas').val();
        var form = `       
        <input type="hidden" name="fields[`+i+`][jurusan]" value="`+prodi+`">
        <input type="hidden" name="fields[`+i+`][semester]" value="`+smtr+`">
        <input type="hidden" name="fields[`+i+`][tahun]" value="`+tahun+`">
        <input type="hidden" name="fields[`+i+`][kelas]" value="`+kelas+`">
                            <td>
                                <select class="form-control" name="fields[`+i+`][hari]" id="">
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                </select>
                            </td>
                            <td>
                                <input id="kode_matkul`+i+`" type="text" name="fields[`+i+`][kode]" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode') }}" readonly>
                            </td>

                            <td>
                                {{-- <input id="matkul`+i+`" type="text" name="fields[`+i+`][matakuliah]" class="form-control @error('matakuliah') is-invalid @enderror" value="{{ old('matakuliah') }}" > --}}
                                <select name="fields[0][matakuliah]" id="matkul`+i+`" class="form-control" onchange="Detail(`+i+`)">
                                </select>
                            </td>
                            <td>
                                <input id="sks`+i+`" type="text" name="fields[`+i+`][sks]" class="form-control @error('sks') is-invalid @enderror" value="{{ old('sks') }}" readonly>
                            </td>
                            <td>
                                <select class="form-control @error('ruang') is-invalid @enderror" name="fields[`+i+`][ruang]"  value="{{ old('ruang') }}">
                            <option  value="">--Pilih--</option>
                            @foreach ($lantai as $l)
                            <option value="{{$l->lantai}}{{$l->nama}}">{{$l->lantai}}{{$l->nama}}</option>
                            @endforeach
                          </select>
                          @error('ruang') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                            </td>
                            <td>
                                <input id="jam" type="text" name="fields[`+i+`][jam]" class="form-control @error('jam') is-invalid @enderror" value="{{ old('jam') }}">
                            </td>
                            <td>
                            <select class="form-control @error('namadosen') is-invalid @enderror" name="fields[`+i+`][namadosen]"  value="{{ old('namadosen') }}">
                            <option value="">--Pilih--</option>
                            @foreach ($namadosen as $d)
                            <option  value="{{$d->namadosen}}">{{$d->namadosen}}</option>
                            @endforeach
                          </select>
                          @error('namadosen') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                            </td>
                            <td><button type="button" class="btn btn-danger" onclick="Kurang()"><i class="fas fa-minus"></i></button></td>

        `;

        $('#matkul0 option').each(function(){ 
          var value = $(this).val();
          console.log(value)
           $(`#matkul${i++}`).html('<option value="">--ini isinya--</option>')
        });
        $('#formjadwal').append("<tr class='"+i+"'>"+form+"</tr>");
      }

      function Kurang(){
        if(i>0){
          $("#formjadwal tr").remove("."+i);
          i--;
        } else {
          i = 1;
        }
      }

            function Matkul(){
                var prodi = $('#jurusan').val();
                var smtr = $('#semester').val();
                var tahun = $('#tahun').val();
                console.log(prodi)
                console.log(smtr)
                console.log(tahun)
                $.get('/inputjadwal/'+prodi+'/'+smtr+'/'+tahun,function(data){
                  $.each(data, function(i, value){
                    console.log(value);
                    for(var i = 0, length1 = value.length; i < length1; i++){
                      $('#matkul0').append($('<option>').text(value[i].matakuliah).attr('value',value[i].matakuliah));
                    }
                  });
                })
            }

            function Detail(type){
              var matkul = $(`#matkul${type}`).val();
              console.log(matkul)
              $.get('/inputjadwal/detail/'+matkul,function(data){
                    $(`#kode_matkul${type}`).val(data.data[0].kode);
                    $(`#sks${type}`).val(data.data[0].sks);
                })
            }

    </script>
@endsection