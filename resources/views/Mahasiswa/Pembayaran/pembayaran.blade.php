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
  <div class="card shadow">
  <div class="card-header">Riwayat Pembayaran</div>
  <div class="card-body">
  @php
  $no=1;
  @endphp
  <div class="form-group row">
    <label for="foto" class="col-sm-3">
      NIM
    </label>
    <div class="col-sm-5 teks-hitam">
      {{ Auth::guard('mahasiswa')->user()->nim }}
      <input type="hidden" value="{{ Auth::guard('mahasiswa')->user()->nim }}" name="nim" id="nimbray">
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-sm-3">
      Nama
    </label>
    <div class="col-sm-5 teks-hitam">
      {{ Auth::guard('mahasiswa')->user()->nama }}
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-sm-3">
      Jurusan / Prog
    </label>
    <div class="col-sm-5 teks-hitam">
      {{ Auth::guard('mahasiswa')->user()->jurusan }}
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-3">Semester</label>
    <select class="form-control col-md-2 mr-2" name="semester" id="semester">
      <option selected disabled>-- pilih --</option>
      @foreach ($semester as $sm)
      <option value="{{ $sm->semester }}">{{ $sm->semester }}</option>
      @endforeach
    </select>
    <div class="">
      <button type="button" class="btn btn-primary mb-2 my-auto" id="cari_semester" onclick="Cari()">submit</button>
    </div>
  </div>
  
  <div class="row" id="row_table" style="display: none">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Jenis Transaksi</th>
              <th>Kewajiban</th>
              <th>Bayar</th>
            </tr>
          </thead>
          <tbody id="table_bayar">
            
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-12 mt-2" id="display" style="display: none">
      <table class="table table-striped" style="width: 50%">
        <tr>
          <td width="200">Total kewajiban</td>
          <td>:</td>
          <td id="totkewajiban"></td>
        </tr>
        <tr>
          <td>Jumlah Bayar</td>
          <td>:</td>
          <td id="jmlbayar"></td>
        </tr>
        <tr>
          <td>Tunggakan</td>
          <td>:</td>
          <td id="tunggakan"></td>
        </tr>
      </table>

      </div>
  </div>
</div>
</div>
<!-- End of Main Content -->
@endsection

@section('script')
  <script type="text/javascript">

    function Cari(){
      var semester = $('#semester').val();
      var nim = $('#nimbray').val();
      var d = document.getElementById('display');
      var rt = document.getElementById('row_table');
      var tot = 0;
      var jml = 0;
      var tgk = 0;
      $('.tr-semester').remove();
        $.get('/pembayaran/'+semester+'/'+nim,function(data){
          $.each(data, function(i, value){
            var n = 1;
            for(var i = 0, length1 = value.length; i < length1; i++){
              if(value[i].jenisbayar == 'SKS' ){
                var hasil = value[i].sks * value[i].jumlahsks
              }else if(value[i].jenisbayar == 'UPP'){
                var hasil = value[i].upp
              }else if(value[i].jenisbayar == 'PENDAFTARAN'){
                var hasil = value[i].pendaftaran
              }else if(value[i].jenisbayar == 'USB'){
                var hasil = value[i].usb
              }else if(value[i].jenisbayar == 'PPSPP'){
                var hasil = value[i].ppspp
              }else if(value[i].jenisbayar == 'UPP'){
                var hasil = value[i].upp
              }else if(value[i].jenisbayar == 'ALMAMATER'){
                var hasil = value[i].almamater
              }



              var form = `
                <tr id="tr" class='tr-semester'>
                  <td>${n++}</td>
                  <td>${value[i].jenisbayar}</td>
                  <td>${hasil}</td>
                  <td>${value[i].jumlah}</td>
                  <td></td>
                </tr>`;
              $('#table_bayar').append(form);
              rt.style.display = 'block';
              tot = tot + parseInt(hasil)
              jml = jml + parseInt(value[i].jumlah);
              tgk = tot - jml;
              $('#jmlbayar').text(jml);
              $('#totkewajiban').text(tot);
              $('#tunggakan').text(tgk);
              d.style.display = 'block';

            }
          });
        })
    }
  </script>
@endsection