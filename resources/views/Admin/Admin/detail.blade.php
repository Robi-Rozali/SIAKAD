@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Detail Admin</div>
                  <div class="card-body">`
                      <div class="row">
                        <div class="col-md-4">
                            <img src="/storage/gambar/{{ $admin->gambar }}" alt="" class="w-100">
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                
                                <tr>
                                    <td>Nama</td>
                                    <td><strong>{{ $admin->nama }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td><strong>{{ $admin->tempat }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td><strong>{{ $admin->tgllahir }}</strong></td>
                                </tr>
                                <tr>
                                    <td>No Handphone</td>
                                    <td><strong>{{ $admin->telp }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><strong>{{ $admin->alamat }}</strong></td>
                                </tr>
                            </table>
                        </div>
                  </div>
                    <hr>
                      <div class="form-group">
                         <a href="/adminn" type="submit" class="btn btn-primary mb-2">Kembali</a>
                      </div>
                </div>  
              </div>
              <div class="col-md-2"></div>
            </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection