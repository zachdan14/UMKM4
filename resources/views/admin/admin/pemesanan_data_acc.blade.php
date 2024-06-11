@extends('admin/layout/admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pemesanan Acc</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pemesanan Acc</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="card">

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
                        <td>{{$dt->id_user}}</td>
                        <td>{{$dt->nama_user}}</td>
                        <td>{{$dt->alamat}}</td>
                        <td>{{$dt->kontak}}</td>
                        <td>{{$dt->tipe_layanan}}</td>
                        <td>{{$dt->status_pemesanan}}</td>
                        <td>{{$dt->tanggal}}</td>
                        <td>{{$dt->nama_user}}</td>
                        <td>
                           <a href="{{ route('datacustomer.detail', $dt->id_user) }}" class="btn btn-primary btn-sm" role="button">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('datacustomer.edit', $dt->id_user) }}" class="btn btn-success btn-sm" role="button">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('datacustomer.delete', $dt->id_user) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
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
          
         
        </div><!-- /.container-fluid -->
      </section>
</div>
@endsection