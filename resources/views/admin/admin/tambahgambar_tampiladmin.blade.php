<!-- resources/views/admin/upload-foto.blade.php -->

@extends('admin.layout.admin')

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
            background-color: pink;
        }
        tr:hover {
            background-color: pink;
        }
    </style>
<h2>Admin Table</h2>
    <table>
        <thead>
            <tr>
              <th>id</th>
                <th>Username</th>
                <th>image</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td>081k</td>
                <td>citra</td>
                <td>emple</td>
                <td>21/05/24 10.07</td>
                <td>21/05/24 10.09</td>
                <td>
                <a href="" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
            <!-- Tambahkan baris lain sesuai dengan data yang Anda miliki -->
        </tbody>
    </table>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Upload Foto</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Upload Foto Baru</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="form-group">
                        <label for="" class="font-weight-bold">Foto Produk</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                        @error('image')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                      </div>
            <!-- <form action="{{ route('admin.tampiladmin') }}" method="PUT" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="photo">Pilih Foto</label>
                    <input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror">
                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form> -->
        </div>
    </div>
</div>
@endsection
