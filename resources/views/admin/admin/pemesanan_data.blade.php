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
                <a href="{{ route('admin.createakun') }}" class="btn btn-danger">
                    <i class="nav-icon fas fa-plus"></i>
                    Tambah Pemesanan
                </a>
              </div>
              </div>
              <!-- /.card-header -->

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
                      @foreach ($data as $psn)
                      <tr>
                        <td>{{$psn->id_user}}</td>
                        <td>{{$psn->nama_user}}</td>
                        <td>{{$psn->alamat}}</td>
                        <td>{{$psn->kontak}}</td>
                        <td>{{$psn->tipe_layanan}}</td>
                        <td>{{$psn->status_pemesanan}}</td>
                        <td>@if ($psn->update_at != null)
                        {{ Carbon\Carbon::parse($psn->update_at)->format('d-m-Y H:i:s') }}
                        @else
                        {{ Carbon\Carbon::parse($psn->created_at)->format('d-m-Y H:i:s') }}  
                        @endif
                        </td>
                        <td>
                            @if ($psn->update_by != null)
                            {{ $psn->update_by }}
                            @else 
                            {{ $psn->created_by }}
                            @endif
                        </td>
                        <td><a href="" class="btn btn-primary btn-sm" role="button">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="" class="btn btn-success btn-sm" role="button">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="" class="btn btn-danger btn-sm" role="button">
                            <i class="bi bi-trash3"></i>
                        </a></td>
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