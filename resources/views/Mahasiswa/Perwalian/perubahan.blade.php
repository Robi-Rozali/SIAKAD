@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Perubahan (KRS)</div>
                <div class="card-body">

                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      NIM
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      A3.1700040
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Nama
                    </label>
                    <div class="col-sm-5 teks-hitam">
                      ROBI ROZALI
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3">Max Pengambilan</label>
                    <div class="col-sm-2">
                      24
                    </div>
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
                              <th class="text-center">Batalkan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>SI1044</td>
                              <td>Kerja Praktek</td>
                              <td>2</td>
                              <td>
                                <div class="form-check text-center">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                  </div>
                                </td>
                            </tr>
                          </tbody>
                        </table>
                        <hr class="sidebar-divider">
                        <div class="">
                            <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                            <button type="submit" class="btn btn-light mb-2">Batal</button>
                        </div>
                      </div>
                    </div>  
                  </div>

                </div>
              </div>
            </div>  
          </div>

        </div>
      <!-- End of Main Content -->
@endsection