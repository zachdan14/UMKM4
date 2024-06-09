@extends('admin/layout/admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pemesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pemesanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-auto me-auto">
                </div>
                <div class="col-auto">
                    <a href="{{ route('datacustomer.createpesanan') }}" class="btn btn-danger">
                        <i class="nav-icon fas fa-plus"></i>
                        Tambah Pemesanan
                    </a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <th data-priority="1">Id</th>
                        <th data-priority="1">Nama User</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Tipe Layanan</th>
                        <th data-priority="1">Status Pemesanan</th>
                        <th>Tanggal</th>
                        <th>Penulis</th>
                        <th data-priority="1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datacustomers as $dt)
                    <tr>
                        <td>{{ $dt->id_user }}</td>
                        <td>{{ $dt->nama_user }}</td>
                        <td>{{ $dt->alamat }}</td>
                        <td>{{ $dt->kontak }}</td>
                        <td>{{ $dt->tipe_layanan }}</td>
                        <td>{{ $dt->status_pemesanan }}</td>
                        <td>{{ $dt->tanggal }}</td>
                        <td>{{ $dt->nama_user }}</td>
                        <td>
                            <a href="{{ route('datacustomer.index') }}" class="btn btn-primary btn-sm" role="button">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('datacustomer.edit', $dt->id_user) }}" class="btn btn-success btn-sm" role="button">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('datacustomer.delete', $dt->id_user) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm">
                                  <i class="bi bi-trash3"></i>
                              </button>
                          </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<script>
  function confirmDelete() {
      return confirm('Yakin ingin menghapus permanen data ini?');
  }
  </script>
@endsection


