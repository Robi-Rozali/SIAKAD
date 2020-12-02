@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
            @if(session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
          </div>
          
          <!-- awal konten utama -->
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header"><a href="/mahasiswa/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                <a href="/mahasiswa/export/csv" class="btn btn-success"><i class="fas fa-file-alt"></i> Export</a>
                  <button type="button" class="btn btn-primary d-inline" data-toggle="modal" data-target="#import"> <i class="fas fa-file-alt"></i> Import</button>
                <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable">
                      <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jurusan</th>
                            <th>No Telpon</th>
                            <th>Alamat</th>
                            <th >AKSI</th>
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
                            {{--Gender acan--}}
                            <td>{{ $m->jurusan }}</td>
                            <td>{{ $m->telp }}</td>
                            <td>{{ $m->alamat }}</td>
                            <td>
                              <form action="/mahasiswa/{{ $m->id }}" method="post" class="d-inline">
                                @csrf
                                @method('GET')
                              <button class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></button>
                              {{--  --}}
                            </form>
                              
                              <form action="/mahasiswa/{{ $m->id }}/edit" method="post" class="d-inline">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin ingin edit?')"><i class="fas fa-edit"></i></>
                              </form>
                              
                              <form action="/mahasiswa/{{ $m->id }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ml-1" onclick="return confirm('Apakah anda yakin ingin hapus?')"><i class="fas fa-trash"></i></>
                              </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
          </div>
          <!-- akhir konten utama -->

        </div>
      <!-- End of Main Content -->

      <div class="modal fade" id="import" tabindex="-1" aria-labelledby="import" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/mahasiswa/import/csv" enctype="multipart/form-data" method="post">
                @csrf
                @method('POST')
              <div class="modal-body">
                   <div class="row">
   
                  <div class="col-md-12">
                      <div class="form-group">
                          <input type="file" name="file" placeholder="Choose file">
                      </div>
                      @error('file')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                  </div>              
    
                  
              </div>  
              </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endsection
@section('script')
  <script type="text/javascript">
    
    @if(session('sukses'))       
    Swal.fire(
      'Berhasil!',
      '{{ session('sukses') }}',
      'success'
    )
    @endif
  </script>
@endsection