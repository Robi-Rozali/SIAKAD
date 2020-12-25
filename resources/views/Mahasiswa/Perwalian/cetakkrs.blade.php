
{{-- nu ieu --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Rencana Studi (KRS)</title>

  <style>
    .header{
      width: 100%;
      color: #212121;
    }

    small{
      /*font-weight: 100;*/
      font-size: 12px;
    }

    .judul{
      display: block;
      margin: 0;
      padding: 0;
    }

    .bg-dark{
      background-color: #343a40;
      color: #fff;
      text-align: center;
      border-radius: 5px;
      padding: 0;
      text-transform: uppercase;
    }

    table {
        border-collapse: collapse;
    }

    .table {
      width: 100%;
      margin-bottom: 1rem;
      color: #212529;
      border: none;
    }

    .table th,
    .table td {
      padding: 5px;
      vertical-align: top;
      border-top: 1px solid #3d3e48;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #3d3e48;
    }

    .table tbody + tbody {
      border-top: 2px solid #3d3e48;
    }

    .table-bordered {
      border: 1px solid #3d3e48;
    }

    .table-bordered th,
    .table-bordered td {
      border: 1px solid #3d3e48;
    }

    .table-bordered thead th,
    .table-bordered thead td {
      border-bottom-width: 2px;
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive > .table-bordered {
      border: 0;
    }
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }

    .mt{
      margin-top: 15px;
    }

    .col-md {
        -ms-flex: 0 0 45.666667%;
        flex: 0 0 45.666667%;
        max-width: 45.666667%;
    }
  </style>  
</head>
<body>
 
  <table style=" width: 100%;margin-top: 20px;margin-bottom: 20px" border="0">

    <tr>
      <td width="100" align="center"><img src="{{ public_path('img/stmik-sumedang.png') }}" width="120" alt=""></td>
      <td align="center">
      <h4 class="judul">SEKOLAH TINGGI MANAJEMEN INFORMATIKA DAN KOMPUTER</h4>
      <h5 class="judul">(STMIK) SUMEDANG</h5>
      <h6 class="judul">TERAKREDITASI</h6>
      <small class="judul">Program Studi : Manajemen Informatika (D3) : SK BAN PT Nomor :0044/SK/BAN-PT/Akred/Dipl-III/I/2017</small>
      <small class="judul">Program Studi : Teknik Informatika (S1) : SK BAN PT Nomor :0155/SK/BAN-PT/Akred/S/I/2017</small>
      <small class="judul">Program Studi : Sistem Informasi (S1) : SK BAN PT Nomor :0342/SK/BAN-PT/Akred/S/I/2017</small>
      <small class="judul">Jalan Angkrek Situ No.19 Telp./Fax. 0261-207395 Sumedang 45323</small>
      <small style="margin: 0 50px 0 0;padding: 0;">Website : www.stmik-sumedang.ac.id</small>
      <small style="margin: 0 0 0 50px;padding: 0;">Email : info@stmik-sumedang.ac.id</small>
      </td>
    </tr>
  </table>

  <hr style="margin: 0 0 2px 0;padding: 0;border: 1.5px solid #000">
  <hr style="margin: 0 0 0 0;padding: 0;">

  <h3 align="center" style="text-transform: uppercase;">Kartu Rencana Studi (KRS)</h3>

  <table class="table" style="margin-top: 20px;width: 50%">
    <tbody>
      <tr>
        <td style="width: 100px">NIM</td>
        <td style="width: 10px">:</td>
        <td id="nimbray">{{ Auth::guard('mahasiswa')->user()->nim }}</td>
      </tr>
      <tr>
        <td style="width: 100px">Nama</td>
        <td style="width: 10px">:</td>
        <td>{{ Auth::guard('mahasiswa')->user()->nama }}</td>
      </tr>
      <tr>
        <td style="width: 150px">Jurusan / Prodi</td>
        <td style="width: 10px">:</td>
        <td>{{ Auth::guard('mahasiswa')->user()->jurusan }}</td>
      </tr>

      <tr>
        <td style="width: 100px">Semester</td>
        <td style="width: 10px">:</td>
        <td id="cari_semester">{{ $smt->semester }}</td>
      </tr>

    </tbody>
  </table>


  <table class="table table-bordered" style="margin-top: 20px">
    <thead>
      <tr style="background-color: #eee">
        <th>No</th>
        <th>Kode</th>
        <th>Mata Kuliah</th>
        <th>SKS</th>
      </tr>
    </thead>
    <tbody id="table_perwalian">
    {{--   @php
              $no=1;
              $jumlah_sks = 0;
            @endphp
            @foreach ($semester as $s)
            @php
                              
             $sks = $s->sks;
             $jumlah_sks = $jumlah_sks + $sks;
             $jumlah_sks =$jumlah_sks;

            @endphp
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $s->kode }}</td>
        <td>{{ $s->matakuliah }}</td>
        <td>{{ $s->sks }}</td>
      </tr>
      @endforeach --}}
    </tbody>
    </table>
      <div class="col-md-12">
          <table>
          <tr>
          <td>Jumlah SKS</td>
          <td>:</td>
          <td id="jumlah_sks"></td>
          </tr> 
          </table>
      </div>

      @section('script')
    <script type="text/javascript">
    function Cari(){
      var semester = $('#semester').val();
      var nim = $('#nimbray').val();
      var jumlah_sks = 0;
      $('.tr-semester').remove();
        $.get('/krs/'+semester+'/'+nim,function(data){
          $.each(data, function(i, value){
            var n = 1;
            for(var i = 0, length1 = value.length; i < length1; i++){
              var form = `
                <tr id="tr" class='tr-semester'>
                  <td>${n++}</td>
                  <td>${value[i].kode}</td>
                  <td>${value[i].matakuliah}</td>
                  <td>${value[i].sks}</td>
                </tr>`;
              $('#table_perwalian').append(form);
              jumlah_sks = jumlah_sks + value[i].sks;
              $('#jumlah_sks').text(jumlah_sks);
            }
          });
        })
    }
  </script>
@endsection
  
</body>
</html>