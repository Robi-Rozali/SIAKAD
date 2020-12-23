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
                            <img src="/storage/gambar/{{ Auth::guard('mahasiswa')->user()->gambar }}" alt="" class="w-100">
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <td>NIM</td>
                                    <td><strong>{{ $mhs->nim }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td><strong>{{ $mhs->nama }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td><strong>{{ $mhs->tempat }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td><strong>{{ $mhs->tgllahir }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td>
                                    <td><strong>{{ $mhs->jurusan }}</strong></td>
                                </tr>
                                <tr>
                                    <td>No Handphone</td>
                                    <td><strong>{{ $mhs->telp }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><strong>{{ $mhs->email }}</strong></td>
                                </tr>
                            </table>
                        </div>
                  </div>
                    <hr>
                      <div class="form-group">
                         <a href="/mhs" type="submit" class="btn btn-primary mb-2">Kembali</a>
                         <a href="/profil/{{ Auth::guard('mahasiswa')->user()->nim }}/edit" type="submit" class="btn btn-info mb-2">Edit</a>
                      </div>

                </div>  
              </div>
              <div class="col-md-2"></div>
            </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection