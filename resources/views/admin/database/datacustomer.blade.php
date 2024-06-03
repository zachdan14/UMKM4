@extends('admin/layout/layout')
@section('content')
  <h3>Detail Customer</h3>
<div class="mt-2">
  <div class="container">
  <div class="card">
        <div class="card-header">
        <td> <a href="{{ route('admin.createakun') }}" class="btn btn-danger">
                    <i class="nav-icon fas fa-plus"></i>
                    Tambah Akun
                </a></td>
        </div>
        <div class="card-body">
            <table class="table table-sm table-stripped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id Pesanan</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>Kontak</th>
                  <th>Keterangan Alamat</th>
                  <th>Tanggal_Booking</th>
                  <th>Tipe layanan</th>
                  <th>Pembayaran</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($masters as $mtr)
                    <tr>
                    <th>{{ $mtr->id }}</th>
                    <th>{{ $mtr->id_user }}</th>
                    <th>{{ $mtr->nama_user }}</th>
                    <th>{{ $mtr->email }}</th>
                    <th>{{ $mtr->kontak }}</th>
                    <th>{{ $mtr->alamat }}</th>
                    <th>{{ $mtr->tanggal }}</th>
                    <th>{{ $mtr->tipe_layanan }}</th>m
                    <th>{{ $mtr->pembayaran}}</th>
                    <th>{{ $mtr->created_at}}</th>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
  </div>
</div>
@endsection