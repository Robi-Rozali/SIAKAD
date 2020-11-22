@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Prodi</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Detail Prodi</div>
                  <div class="card-body">`
                      <div class="row">
                        <div class="col-md-4">
                            <img src="/storage/gambar/{{ $prodi->gambar }}" alt="" class="w-100">
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <td>Nama</td>
                                    <td><strong>{{ $prodi->nama }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Prodi</td>
                                    <td><strong>{{ $prodi->prodi }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Ketua Prodi</td>
                                    <td><strong>{{ $prodi->ketua }}</strong></td>
                                </tr>
                                <tr>
                                    <td>NIDN</td>
                                    <td><strong>{{ $prodi->nidn }}</strong></td>
                                </tr>
                            </table>
                        </div>
                  </div>
                    <hr>
                      <div class="form-group">
                         <a href="/prodi" type="submit" class="btn btn-primary mb-2">Kembali</a>
                      </div>
                </div>  
              </div>
              <div class="col-md-2"></div>
            </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection