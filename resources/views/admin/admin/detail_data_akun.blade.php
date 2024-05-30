@extends('admin/layout/admin')

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
         
         <form action='{{ route("admin.updateakun", $data->id) }}' method="POST" autocomplete="off" class="needs-validation" novalidate>
             @csrf

             <div class="mb-3 row">
               <label for="id" class="col-sm-2 col-form-label">Id</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="id" value="{{$data->id}}" disabled>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="email" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" value="{{$data->email}}" disabled>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="nama" class="col-sm-2 col-form-label">Nama</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_user" value="{{$data->nama_user}}" disabled>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="password" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="password" value="{{$data->password}}" disabled>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="status_publish" class="col-sm-2 col-form-label">Status Publish</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="status_publish" value="{{$data->status_publish}}" disabled>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="status_aktif" class="col-sm-2 col-form-label">Status Aktif</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="status_aktif" value="{{$data->status_aktif}}" disabled>
               </div>
            </div>

            <a href="{{route('admin.tampildata')}}" class="btn btn-danger mt-2">Batal</a>

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
@endsection