@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Perwalian (FRS)</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="" class="col-sm-2">NIM</label>
                        <div class="col-sm-5 teks-hitam">
                          {{ $mhs->nim }}
                        </div>
                        <div class="col-sm-4"></div>
                      </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-5 teks-hitam">
                          {{ $mhs->nama }}
                        </div>
                        <div class="col-sm-4"></div>
                      </div>
                    
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Max Pengambilan</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" id="jumlahsks" value="21" readonly>
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


                        </form>
                    </div>  
                </div>
            </div>
        </div>
        </div>
      <!-- End of Main Content -->
@endsection

@section('script')



@endsection