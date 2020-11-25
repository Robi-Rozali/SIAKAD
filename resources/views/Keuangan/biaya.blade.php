@extends('Keuangan.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Biaya Kuliah</h1>
            @if(session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
          </div>
          
          <!-- awal konten utama -->
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header"><a href="/biaya/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a></div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 my-auto">Tahun Akademik</label>
                    <select class="form-control" style="width: 20%;" name="" id="">
                        <option nama="#" value="">2018</option>
                    </select>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 my-auto">Prodi</label>
                      <select class="form-control" style="width: 20%;" name="" id="">
                          <option nama="#" value="">SI</option>
                          <option nama="#" value="">TI</option>
                          <option nama="#" value="">MI</option>
                      </select>
                      </div>
                    <hr>
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable">
                      <thead>
                        <tr>
                            <th>NO</th>
                            <th>Pendaftaran</th>
                            <th>UPP</th>
                            <th>USB</th>
                            <th>SKS</th>
                            <th>PPSPP</th>
                            <th>Almamater</th>
                            <th >AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                          $no=1;
                        @endphp
                        @foreach ($biaya as $b)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>Rp. <?php echo number_format( $b->pendaftaran,0,',','.') ?></td>
                            <td>Rp. <?php echo number_format($b->upp,0,',','.')?></td>
                            <td>Rp. <?php echo number_format($b->usb,0,',','.')?></td>
                            <td>Rp. <?php echo number_format($b->sks,0,',','.')?></td>
                            <td>Rp. <?php echo number_format($b->ppspp,0,',','.')?></td>
                            <td>Rp. <?php echo number_format($b->almamater,0,',','.')?></td>
                            <td>
                              <form action="/biaya/{{ $b->id }}/edit" method="post" class="d-inline">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin ingin edit?')"><i class="fas fa-edit"></i></>
                              </form>
                                                           <form action="/biaya/{{ $b->id }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ml-1" onclick="return confirm('Apakah anda yakin ingin hapus?')"><i class="fas fa-trash"></i></>
                              </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
          </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection