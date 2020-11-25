@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
          </div>
          
          <!-- awal konten utama -->
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">Profil Mahasiswa</div>
                  <div class="card-body">`
                      <div class="row">
                        <div class="col-md-4">
                            <img src="/storage/gambar/{{ $mahasiswa->gambar }}" alt="" class="w-100">
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <td>NIM</td>
                                    <td><strong>{{ $mahasiswa->nim }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td><strong>{{ $mahasiswa->namadosen }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td><strong>{{ $mahasiswa->tempat }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td><strong>{{ $mahasiswa->tgllahir }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td>
                                    <td><strong>{{ $mahasiswa->jurusan }}</strong></td>
                                </tr>
                                <tr>
                                    <td>No Handphone</td>
                                    <td><strong>{{ $mahasiswa->telp }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><strong>{{ $mahasiswa->email }}</strong></td>
                                </tr>
                            </table>
                        </div>
                  </div>
                    <hr>
                      <div class="form-group">
                         <a href="/dosen" type="submit" class="btn btn-primary mb-2">Kembali</a>
                      </div>
                </div>  
              </div>
              <div class="col-md-2"></div>
            </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection