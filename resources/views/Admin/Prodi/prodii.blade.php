@extends('Admin.template.main')

@section('konten')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">PRODI</h1>
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
                <div class="card-header"><a href="/prodi/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a></div>
                <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable">
                      <thead>
                        <tr>
                            <th>NO</th>
                            <th>Foto Ketua Prodi</th>
                            {{-- <th>Nama Prodi</th> --}}
                            <th>Prodi</th>
                            <th>Ketua Prodi</th>
                            <th>NIDN</th>
                            <th>AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                          $no=1;
                        @endphp
                        @foreach ($prodi as $p)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="/storage/gambar/{{ $p->gambar }}" alt="" width="100"></td>
                            {{-- <td>{{ $p->nama }}</td> --}}
                            <td>{{ $p->prodi }}</td>
                            <td>{{ $p->ketua }}</td>
                            <td>{{ $p->nidn }}</td>
                            <td>

                            <form action="/prodii/{{ $p->id }}" method="post" class="d-inline">
                                @csrf
                                @method('GET')  
                              <button class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></button>
                            </form>

                            <form action="/prodii/{{ $p->id }}/edit" method="post" class="d-inline">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin ingin edit?')"><i class="fas fa-edit"></i></>
                              </form>

                            <form action="/prodii/{{ $p->id }}" method="post" class="d-inline">
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