<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Daftar Nilai Sementara</title>
	<link rel="">

	<style>
		.header{
			width: 100%;
			color: #212121;
		}
		small{
			font-size: 12px;
		}
		.judul{
			display: block;
			margin: 0;
			padding: 0;
		}
		table{
			border-collapse: collapse;
		}
		.table{
			width: 100%;
			margin-bottom: 1rem;
			color: #212529;
		}
		.table th,
		.table td{
			padding: 5px;
			vertical-align: top;
			border-top: 1px solid #3d3e48;
		}
		.table thead th {
			vertical-align: bottom;
			border-bottom: 2px solid #3d3e48;
		}
		.table tbody + tbody{
			border-top: 2px solid #3d3e48;
		}
		.table-bordered{
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
	</style>
	</head>
	<body>
		<table>
			<tr>
				<td width="100" align="center"></td>
			</tr>
		</table>
	<center>
		<h5>Daftar Nilai Sementara</h4>
		<h6>STMIK - SUMEDANG</h5>
	</center>
	<div>
	<div class="col-md-12">
      <table>
       <tr>
       <td>NIM</td>
       <td>:</td>
       <td>{{ $nilai->nim }}</td>
       </tr>
       <tr>
       <td>Nama</td>
       <td>:</td>
       <td>{{ $nilai->nama }}</td>
       </tr>
       <tr>
       <td>Tahun Akademik</td>
       <td>:</td>
       <td>{{ $nilai->tahun }}</td>
       </tr>
       <tr>
       <td>Jurusan / Prodi</td>
       <td>:</td>
       <td>{{ $nilai->jurusan }}</td>
       </tr>
   </table>
</div>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>NO</th>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Nilai</th>
                <th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@php
              $no=1;
              $jumlah_sks = 0;
              $nilai = 0;
              $mutu = 0;
            @endphp
            @foreach ($nilaisemua as $n)
            @php
                              
             $sks = $n->sks;
             $grade =$n->grade;
             if($grade == 'A'){
             $nilai = 4;
             }else if($grade == 'B'){
             $nilai = 3;
             }else if($grade == 'C'){
             $nilai = 2;
             }else if($grade == 'D'){
             $nilai = 1;
             }else if($grade == 'E'){
             $nilai = 0;
                              }
             $mutu += $sks * $nilai;
             $jumlah_sks = $jumlah_sks + $sks;
             $ipks = number_format((float)$mutu/$jumlah_sks, 2, '.', '');
             $jumlah_sks =$jumlah_sks;
             $jumlah_mutu = $mutu;

    
            @endphp 
			<tr>
				<td>{{ $no++ }}</td>
                <td>{{ $n->kode }}</td>
                <td>{{ $n->matakuliah }}</td>
                <td>{{ $n->sks }}</td>
                <td>{{ $n->grade }}</td>
                <td></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	 <div class="col-md-12">
      <table>
       <tr>
       <td>Jumlah SKS</td>
       <td>:</td>
       <td id="jumlah_sks">{{ $jumlah_sks }}</td>
       </tr>
       <tr>
       <td>Jumlah Angka Mutu</td>
       <td>:</td>
       <td id="jumlah_mutu">{{ $jumlah_mutu }}</td>
       </tr>
       <tr>
       <td>IPK</td>
       <td>:</td>
       <td id="ipks">{{ $ipks }}</td>
      </tr>
    </table>
 </div> 

</body>
</html>