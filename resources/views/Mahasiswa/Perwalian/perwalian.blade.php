@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Perwalian (FRS)</div>
                <div class="card-body">
                    <form action="">
                        @csrf
                        @method('POST')

                    <div class="form-group row">
                        <label for="" class="col-sm-2">NIM</label>
                        <div class="col-sm-5 teks-hitam">
                          {{ $mhs->nim }}
                          <input type="hidden" value="{{ $mhs->nim }}" name="nim[]">
                        </div>
                        <div class="col-sm-4"></div>
                      </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-5 teks-hitam">
                          {{ $mhs->nama }}
                          <input type="hidden" value="{{ $mhs->nama }}" name="nama[]">
                        </div>
                        <div class="col-sm-4"></div>
                      </div>
                    
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Max Pengambilan</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" value="21" readonly>
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
                                @php
                                $no=1;
                                @endphp
                                @foreach ($krm as $k)
                                <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    {{ $k->kode }}
                                    <input type="hidden" value="{{ $k->kode }}" name="kode[]">
                                </td>
                                <td>
                                    {{ $k->matakuliah }}
                                    <input type="hidden" value="{{ $k->matakuliah }}" name="matakuliah[]">
                                </td>
                                <td>
                                    {{ $k->sks }}
                                    <input type="hidden" value="{{ $k->sks }}" name="sks[]">
                                </td>
                                <td>
                                    <div class="form-check text-center">
                                        <input class="form-check-input" type="checkbox" value="1" name="cek" id="defaultCheck1">
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>  
                    </div>
                    {{-- <div class="teks-hitam">
                        <label for="">Daftar Mata Kuliah Yang Diulang</label>
                    </div> --}}
                    
                   {{--  <div class="row">
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
                    </div> --}}
                        <div class="teks-hitam">
                        Apakah Pilihan Anda Sudah Tepat ?
                        </div>
                        <hr class="sidebar-divider">
                        <div class="">
                            <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                            <button type="reset" class="btn btn-light mb-2">Batal</button>
                        </div>


                        </form>
                    </div>  
                </div>
            </div>
        </div>
        </div>
      <!-- End of Main Content -->
@endsection