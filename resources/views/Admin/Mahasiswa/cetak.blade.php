<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa STMIK Sumedang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data Mahasiswa STMIK Sumedang</h4>
		<h6><a target="_blank" href="">anjirrrr</a></h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>NO</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>No Telpon</th>
                <th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			@php
              $no=1;
            @endphp
            @foreach ($mahasiswa as $m)
			<tr>
				<td>{{ $no++ }}</td>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->jenis_kelamin }}</td>
                <td>{{ $m->jurusan }}</td>
                <td>{{ $m->telp }}</td>
                <td>{{ $m->alamat }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>