@extends('admin/layout/layout')
@section('content')
  <h3>Data Customer</h3>
<div class="mt-2">
  <div class="container">
  <div class="card">
        <div class="card-header">
        <td><button onclick="location.href='{{ url('form') }}'">
        <i class="bi bi-clipboard-plus-fill"></i> Add New Data
        </button></td>
        </div>
        <div class="card-body">
            <table class="table table-sm table-stripped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id Pesanan</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Rincian</th>
                  <th>Tanggal Booking</th>
                  <th>Jam Booking</th>
                  <th>Paket</th>
                  <th>Pembayaran</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($masters as $mtr)
                    <tr>
                    <th>{{ $mtr->id }}</th>
                    <th>{{ $mtr->idpesanan}}</th>
                    <th>{{ $mtr->fullname }}</th>
                    <th>{{ $mtr->emailaddress }}</th>
                    <th>{{ $mtr->phone }}</th>
                    <th>{{ $mtr->rincian }}</th>
                    <th>{{ $mtr->tanggal_booking }}</th>
                    <th>{{ $mtr->jam_booking }}</th>
                    <th>{{ $mtr->paket }}</th>
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