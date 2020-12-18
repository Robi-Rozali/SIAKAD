<!DOCTYPE html>
<html>
<head>
	<title>Kartu Hasil Studi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
		.text{
			font-size: 14px;
		    color: #000;
		    font-family: Arial, Helvetica, sans-serif;
		}
	</style>
	<center>
		<h5>KARTU HASIL STUDI</h4>
		<h6>STMIK - SUMEDANG</h5>
	</center>

	<div>
		<div class="form-group row text">
	      <label for="" class="col-sm-2">
	        NIM
	      </label>
	      <div class="col-sm-5 teks-hitam" id="nim">
	      
	      </div>
	      <div class="col-sm-4"></div>
	    </div>

	    <div class="form-group row text">
          <label for="" class="col-sm-2">
            Nama
          </label>
          <div class="col-sm-5 teks-hitam" id="nim">
          
          </div>
          <div class="col-sm-4"></div>
        </div>
		<div class="form-group row text">
          <label for="" class="col-sm-2">
            Tahun Akademik
          </label>
          <div class="col-sm-5 teks-hitam" id="nim">
          
          </div>
          <div class="col-sm-4"></div>
        </div>
        <div class="form-group row text">
          <label for="" class="col-sm-2">
            Jurusan / Prodi
          </label>
          <div class="col-sm-5 teks-hitam" id="nim">
          
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