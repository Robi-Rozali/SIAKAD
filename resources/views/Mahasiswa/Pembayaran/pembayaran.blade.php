@extends('mahasiswa.template.main')
@section('konten')
<!-- Begin Page Content -->
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Riwayat Pembayaran</h1>
    @if(session('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('sukses')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
  </div>
  @php
  $no=1;
  @endphp
  <div class="form-group row">
    <label for="foto" class="col-sm-3">
      NIM
    </label>
    <div class="col-sm-5 teks-hitam">
      {{ $pembayaran->nim }}
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-sm-3">
      Nama
    </label>
    <div class="col-sm-5 teks-hitam">
      {{ $pembayaran->nama }}
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-sm-3">
      Jurusan / Prog
    </label>
    <div class="col-sm-5 teks-hitam">
      {{ $pembayaran->jurusan }}
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Jenis Transaksi</th>
              <th>Kewajiban</th>
              <th>Tot. Kewajiban</th>
              <th>Jumlah Bayar</th>
              <th>Tunggakan</th>
            </tr>
          </thead>
          <tbody>
            @php
            $no=1;
            @endphp
            @foreach ($pembayaran_semua as $p)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $p->jenisbayar}}</td>
              <td>{{ $p->jumlah }}</td>
              <td>{{ $p->jumlah }}</td>
              <td>xxxxxx</td>
              <td>xxxxxx</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- End of Main Content -->
@endsection