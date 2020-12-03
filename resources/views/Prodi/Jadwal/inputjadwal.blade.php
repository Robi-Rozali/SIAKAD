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
                <class class="card-body">
                    <form action="/inputjadwal" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('POST')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Program Studi</label>
                              <select class="form-control" name="jurusan" id="jurusan">
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
                                <select class="form-control" name="semester" id="semester">
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
                              <select class="form-control" name="tahun" id="tahun" onchange="Matkul()">
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
                                <select class="form-control" name="" id="">
                                    <option nama="A" value="">A</option>
                                    <option nama="B" value="">B</option>
                                    <option nama="C" value="">C</option>
                                </select>
                              </div>
                        </div>
                    </div>
                   
                    
                  <div class="table-responsive">
                     <table class="table table-bordered" id="">
                      <thead>
                        <tr>
                            {{-- <th>NO</th> --}}
                            <th>Hari</th>
                            <th width="100">Kode</th>
                            <th>Mata Kuliah</th>
                            <th width="100">SKS</th>
                            <th>Ruang</th>
                            <th width="100">Jam</th>
                            <th>Dosen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            {{-- <td>1</td> --}}
                            <td>
                                <select class="form-control" name="" id="">
                                    <option value="">Senin</option>
                                    <option value="">Selasa</option>
                                    <option value="">Rabu</option>
                                    <option value="">Kamis</option>
                                    <option value="">Jum'at</option>
                                    <option value="">Sabtu</option>
                                </select>
                            </td>
                            <td>
                                <input id="kode_matkul" type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode') }}" readonly>
                            </td>

                            <td>
                                <input id="matkul" type="text" name="matakuliah" class="form-control @error('matakuliah') is-invalid @enderror" value="{{ old('matakuliah') }}" readonly>
                            </td>
                            <td>
                                <input id="sks" type="text" name="sks" class="form-control @error('sks') is-invalid @enderror" value="{{ old('sks') }}" readonly>
                            </td>
                            <td>
                                <select class="form-control @error('ruang') is-invalid @enderror" name="ruang"  value="{{ old('ruang') }}">
                            <option nama="" value="">--Pilih--</option>
                            @foreach ($lantai as $l)
                            <option nama="" value="{{$l->lantai}}{{$l->nama}}">{{$l->lantai}}{{$l->nama}}</option>
                            @endforeach
                          </select>
                          @error('ruang') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                            </td>
                            <td>
                                <input id="jam_awal" type="text" name="jam_awal" class="form-control @error('jam') is-invalid @enderror" value="{{ old('jam') }}">
                                <input id="jam_akhir" type="text" name="jam_akhir" class="form-control @error('jam') is-invalid @enderror" value="{{ old('jam') }}">
                            </td>
                            <td>
                                <select class="form-control @error('namadosen') is-invalid @enderror" name="namadosen"  value="{{ old('namadosen') }}">
                            <option nama="" value="">--Pilih--</option>
                            @foreach ($namadosen as $d)
                            <option nama="" value="{{$d->namadosen}}">{{$d->namadosen}}</option>
                            @endforeach
                          </select>
                          @error('namadosen') 
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <hr class="sidebar-divider">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2">Simpan</button>
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
    <script>
      
            function Matkul(){
                var prodi = $('#jurusan').val();
                var smtr = $('#semester').val();
                var tahun = $('#tahun').val();
                console.log(prodi)
                console.log(smtr)
                console.log(tahun)
                $.get('/inputjadwal/'+prodi+'/'+smtr+'/'+tahun,function(data){                 
                    $('#kode_matkul').val(data.data[0].kode);
                    $('#matkul').val(data.data[0].matakuliah);
                    $('#sks').val(data.data[0].sks);
                })
            }

    </script>
@endsection