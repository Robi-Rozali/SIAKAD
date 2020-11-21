@extends('Admin.template.main')

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
                  <div class="card-header">Detail Mahasiswa</div>
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top ">
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <td>NIM</td>
                                    <td><strong>A3.1700040</strong></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td><strong>Robi Rozali</strong></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td><strong>Bandung</strong></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td><strong>32 Januari 2050</strong></td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td>
                                    <td><strong>Sistem Informasi</strong></td>
                                </tr>
                                <tr>
                                    <td>No Handphone</td>
                                    <td><strong>082313443321</strong></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><strong>Heheboii@gmail.com</strong></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><strong>Wakanda timur</strong></td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td><strong>Sumedang</strong></td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td><strong>123456</strong></td>
                                </tr>
                            </table>
                        </div>
                  </div>
                    <hr>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary mb-2">Kembali</button>
                      </div>
                </div>  
              </div>
              <div class="col-md-2"></div>
            </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->
@endsection