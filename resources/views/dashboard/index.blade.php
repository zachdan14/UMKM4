@extends('dashboard/layout/sidebar')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Data Akun</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Data Akun</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Memasukkan Data-->
   <div class="card">
      <div class="card-body">
        <form action='{{ route('dashboard.index') }}' method="POST" autocomplete="off" class="needs-validation" novalidate>
             @csrf
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
         </form>
      </div>
   </div>
</div>

<style>
#content {
  width: 100%;
  padding: 20px;
  min-height: 100vh;
  transition: all 0.3s;
}

.mx-auto{
width:780px;
margin-top: 20px;
}

.card{
margin-top:10px;
}
</style>

<script>
  const users = @json($datacustomers);
  console.log(users);



   // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
const forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.from(forms).forEach(form => {
form.addEventListener('submit', event => {
 if (!form.checkValidity()) {
   event.preventDefault()
   event.stopPropagation()
 }

 form.classList.add('was-validated')
}, false)
})
})()
</script>
