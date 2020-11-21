@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-8">
              <div class="card shadow">
                <div class="card-header">Profil</div>
                <div class="card-body">
                  <form action="">

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">NIM</label>
                      <div class="col-sm-8">
                        <input type="text" name="#" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" name="#" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" name="#" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" name="#" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">No Handphone</label>
                      <div class="col-sm-8">
                        <input type="text" name="#" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input type="text" name="#" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" name="#" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Kota</label>
                      <div class="col-sm-8">
                        <input type="text" name="#" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Kode POS</label>
                      <div class="col-sm-8">
                        <input type="text" name="#" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">Gambar</label>
                      <div class="col-sm-8">
                        <input type="file" name="gambar" class="form-control">
                      </div>
                    </div>
                    <hr class="sidebar-divider">
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                    </div>

                  </form>
                </div>
              </div>  
            </div>
            <div class="col-md-4">
              <div class="card shadow">
                <div class="card-header">Ganti Password</div>
                <div class="card-body">
                  <form action="">
                    <div class="form-group">
                      <label for="">Password Lama</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Password Baru</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Konfirmasi Password Baru</label>
                      <input type="password" class="form-control">
                    </div>
                    <hr class="sidebar-divider">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
           
      <!-- End of Main Content -->
@endsection