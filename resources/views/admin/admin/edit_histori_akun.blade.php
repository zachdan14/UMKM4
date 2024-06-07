@extends('admin/layout/admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Histori Akun</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Histori Akun</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Memasukkan Data-->
   <div class="card">
      <div class="card-body">
         
         <form action='{{ route("admin.coveryakun", $users->id) }}' method="POST" autocomplete="off" class="needs-validation" novalidate>
             @csrf
             @method('PUT')
            <div class="mb-3 row">
               <label for="email" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" placeholder="Isi Email" value="{{$users->email}}" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="nama" class="col-sm-2 col-form-label">Nama</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" placeholder="Isi Nama" value="{{$users->name}}" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="password" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="password" placeholder="Isi Password" value="{{$users->password}}" required>
               </div>
            </div>
            
            <div class="mb-3 row">
               <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone_number" placeholder="Isi Number" value="{{$users->phone_number}}" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="status_publish" class="col-sm-2 col-form-label">Status Publish</label>
               <div class="col-sm-10">
                  <select class="form-control" name="status_publish" required>
                  <option value="{{$users->status_publish}}">{{$users->status_publish}}</option>
                  <option value="Publish">Publish</option> 
                  <option value="Draft">Draft</option>
                  </select>
               </div>
            </div>

            <input name="status_publish" value="Publish" type="hidden">
            <input name="status_aktif" value="Aktif" type="hidden">
            <input name="updated_by" value="1" type="hidden">

            <button class="btn btn-danger mt-2" type="Reset">Reset form</button>
            <button class="btn btn-primary mt-2" type="submit">Recovery form</button>

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