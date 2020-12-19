<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kartu Hasil Studi</title>
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
		<h5>KARTU HASIL STUDI</h4>
		<h6>STMIK - SUMEDANG</h5>
	</center>
	<div>
		<div class="row">
			<div class="col-md-4">NIM</div>
			<div class="col-md-8">{{ $mhs->nim }}</div>
		</div>
	    <div class="form-group row text">
          <label for="" class="col-sm-2">
            Nama
          </label>
          <div class="col-sm-5 teks-hitam" id="nama">
          	{{ $mhs->nama }}
          </div>
          <div class="col-sm-4"></div>
        </div>
		<div class="form-group row text">
          <label for="" class="col-sm-2">
            Tahun Akademik
          </label>
          <div class="col-sm-5 teks-hitam" id="tahun">
          {{ $mhs->tahun }}
          </div>
          <div class="col-sm-4"></div>
        </div>
        <div class="form-group row text">
          <label for="" class="col-sm-2">
            Jurusan / Prodi
          </label>
          <div class="col-sm-5 teks-hitam" id="jurusan">
          {{ $mhs->jurusan }}
          </div>
          <div class="col-sm-4"></div>
        </div>
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
            @endphp
            @foreach ($nilai as $n)
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

</body>
</html>