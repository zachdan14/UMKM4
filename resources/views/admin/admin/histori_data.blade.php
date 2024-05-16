@extends('admin/layout/admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Histori User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Histori User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

            <div class="card">
              <div class="card-header">

                <table id="example1" class="table table-bordered table-striped mt-3">
                    <thead>
                      <tr>
                        <th data-priority="1">Id</th>
                        <th>Email</th>
                        <th data-priority="1">Nama User</th>
                        <th>Status Aktif</th>
                        <th>Status Publish</th>
                        <th>Tanggal</th>
                        <th>Penulis</th>
                        <th data-priority="1">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $psn)
                      <tr>
                        <td>{{$psn->id}}</td>
                        <td>{{$psn->email}}</td>
                        <td>{{$psn->nama_user}}</td>
                        <td>{{$psn->status_aktif}}</td>
                        <td>{{$psn->status_publish}}</td>
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
          </div>
          <!-- /.row -->
          
         
        </div><!-- /.container-fluid -->
      </section>
</div>
@endsection