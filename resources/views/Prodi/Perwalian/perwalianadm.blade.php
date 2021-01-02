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
                                    <select class="form-control" name="" id="semester">
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
                        <label for="">Daftar Mata Kuliah Yang Bisa Diambil (Wajib)</label>
                    </div>
                    
                    <form action="/perwalian" method="post">
                        @csrf
                        @method('POST')
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
                                @php
                                $no=1;
                                @endphp
                                @foreach ($krm as $k)
                                <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $k->kode }}</td>
                                <td>{{ $k->matakuliah }}</td>
                                <td>{{ $k->sks }}</td>
                                <td>
                                    <div class="form-check text-center">
                                        <input class="form-check-input" type="checkbox" value="{{ $k->id }}" name="id[0][{{ $k->id }}]" id="id_{{ $k->id }}">
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td align="right" colspan="3">SKS yang diambil :</td>
                                    <td colspan="2">
                                        <input type="text" id="totsks" class="form-control" value="" readonly style="width: 50px">
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>  
                    </div>
                    @if (count($nguli) > 0)
                    
                    <div class="teks-hitam">
                        <label for="">Daftar Mata Kuliah Yang Diulang (Wajib di Ambil )</label>
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
                                @php
                                $no=1;
                                @endphp
                                @foreach ($nguli as $ng)
                                <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $ng->kode }}</td>
                                <td>{{ $ng->matakuliah }}</td>
                                <td>{{ $ng->sks }}</td>
                                <td>
                                   <div class="form-check text-center">
                                        <input class="form-check-input" type="checkbox" value="{{ $ng->id }}" name="id[0][{{ $ng->id }}]" id="id_{{ $ng->id }}">
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>  
                    </div>
                @else

                @endif
                @if (count($ngambil) > 0)
                    
                    <div class="teks-hitam">
                        <label for="">Daftar Mata Kuliah Pilihan yang bisa di ambil</label>
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
                                @php
                                $no=1;
                                @endphp
                                @foreach ($ngambil as $bil)
                                <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $bil->kode }}</td>
                                <td>{{ $bil->matakuliah }}</td>
                                <td>{{ $bil->sks }}</td>
                                <td>
                                   <div class="form-check text-center">
                                        <input class="form-check-input" type="checkbox" value="{{ $bil->id }}" name="id[0][{{ $bil->id }}]" id="id_{{ $bil->id }}">
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>  
                    </div>
                @else

                @endif
                        <div class="teks-hitam">
                        Apakah Pilihan Anda Sudah Tepat ?
                        </div>
                        <hr class="sidebar-divider">
                        <div class="">
                            <button type="submit" id="btnsubmit" class="btn btn-primary mb-2">Simpan</button>
                            <button type="reset" class="btn btn-light mb-2">Batal</button>
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