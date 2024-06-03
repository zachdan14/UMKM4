@extends('admin/layout/admin')

@section('content')
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: palevioletred;
        }
        tr:hover {
            background-color: black;
        }
    </style>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin GoFotografer </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin GoFotografer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

            <div class="card">
              <div class="card-header">
                <div class="content">
                  <div class="card card-info card-outline">
                    <div class="card-header">
                    <div class="card-tools">
                    <a href="{{ route('admin.tampiladmin') }}" class="btn btn-success">tambah foto<i class="fas fa-plus-square"></i></a>
                    </div>
                  </div>
                  </div>
                </div>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>id.</th>
            <th>Data</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>09890</td>
        <td></td>
        <td></td>
        <td></td>
        <td>
                <a href="" class="btn btn-info"><i class="bi bi-eyedropper"></i></a>
                <a href="" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>09890</td>
        <td></td>
        <td></td>
        <td></td>
        <td>
                <a href="" class="btn btn-info"><i class="bi bi-eyedropper"></i></a>
                <a href="" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
        </td>
      </tr>
      
    
        
       
              
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
          
         
        </div><!-- /.container-fluid -->
</div>
@endsection