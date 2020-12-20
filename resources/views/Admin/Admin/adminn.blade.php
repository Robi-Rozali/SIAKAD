@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin</h1>
            
          </div>
          
          <!-- awal konten utama -->
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header"><a href="/admin/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a></div>
                <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable">
                      <thead>
                        <tr>
                            <th>NO</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Telp</th>
                            <th>Alamat</th>
                            <th >AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                          $no=1;
                        @endphp
                        @foreach ($admin as $a)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="/storage/gambar/{{ $a->gambar }}" alt="" width="100"></td>
                            <td>{{ $a->nama }}</td>
                            <td>{{ $a->telp }}</td>
                            <td>{{ $a->alamat }}</td>
                            <td>

                              {{-- sok nu ieu mah sorangan we --}}
                            <form action="/admin/{{ $a->id }}" method="post" class="d-inline">
                                @csrf
                                @method('GET')
                              <button class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></button>
                              {{--  --}}
                            </form>
                              
                              <form action="/admin/{{ $a->id }}/edit" method="post" class="d-inline">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin ingin edit?')"><i class="fas fa-edit"></i></>
                              </form>
                              
                              <form action="/admin/{{ $a->id }}" method="post" class="d-inline">
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