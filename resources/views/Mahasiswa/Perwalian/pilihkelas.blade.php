@extends('mahasiswa.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid mb-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">Pilih Kelas</div>
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
                    <label for="foto" class="col-sm-3">
                      Jurusan / Prog
                    </label>
                    <div class="col-sm-5 teks-hitam">
                     Sistem Informasi / S1
                    </div>
                    <div class="col-sm-4"></div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-3">
                      Tahun Akademik / Per
                    </label>
                    <div class="col-sm-5 teks-hitam">
                     2020/2021 / 1
                    </div>
                    <div class="col-sm-4"></div>
                  </div>

                </div>
              </div>  
            </div>

            <div class="col-md-12 mt-2">
              <div class="card shadow">
                <div class="card-header">Kelas Yang Dipilih :</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 mt-2">
                      <p class="bg-utama py-2 pl-2">No</p>
                    </div>
                    <div class="col-md-8 mt-2">
                      <p class="ml-3">1</p>
                    </div>

                    <div class="col-md-4 mt-2">
                      <p class="bg-utama py-2 pl-2">Kode Mata Kuliah</p>
                    </div>
                    <div class="col-md-8 mt-2">
                      <p class="ml-3">FT2012</p>
                    </div>

                    <div class="col-md-4 mt-2">
                      <p class="bg-utama py-2 pl-2">Mata Kuliah</p>
                    </div>
                    <div class="col-md-8 mt-2">
                      <p class="ml-3">Algoritma</p>
                    </div>

                    <div class="col-md-4 mt-2">
                      <p class="bg-utama py-2 pl-2">Kelas yang dipilih</p>
                    </div>
                    <div class="col-md-8 mt-2">
                      <p class="ml-3">A</p>
                    </div>

                    <div class="col-md-4 mt-2">
                      <p class="bg-utama py-2 pl-2">Kelas yang tersedia</p>
                    </div>
                    <div class="col-md-8 mt-2">
                      <div class="form-check ml-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">Kelas: A | Ruang: R4 | Hari: Sabtu | Jam: 13.00-15.00 | Kapasitas : 40 Orang | Sisa : 30 Orang </label>
                      </div>
                      <div class="form-check ml-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">Kelas: B | Ruang: R3 | Hari: Rabu | Jam: 13.00-15.00 | Kapasitas : 40 Orang | Sisa : 28 Orang </label>
                      </div>
                      <div class="form-check ml-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">Kelas: B | Ruang: R3 | Hari: Rabu | Jam: 13.00-15.00 | Kapasitas : 40 Orang | Sisa : 28 Orang </label>
                      </div>
                      <div class="form-check ml-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">Kelas: B | Ruang: R3 | Hari: Rabu | Jam: 13.00-15.00 | Kapasitas : 40 Orang | Sisa : 28 Orang </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary btn-lg">Simpan</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      <!-- End of Main Content -->
@endsection