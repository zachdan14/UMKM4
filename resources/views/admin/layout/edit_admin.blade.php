@extends('admin/layout/admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Memasukkan Data-->
   <div class="card">
      <div class="card-body">
         
         <form action='{{ route("admin.updateadmin", $admins->id_admin) }}' method="POST" autocomplete="off" class="needs-validation" novalidate>
             @csrf
             @method('PUT')
            <div class="mb-3 row">
               <label for="email_admin" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="email_admin" placeholder="Isi Email" value="{{$admins->email_admin}}" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="nama" class="col-sm-2 col-form-label">Nama</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_admin" placeholder="Isi Nama" value="{{$admins->nama_admin}}" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="password" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="password_admin" placeholder="Isi Password" value="{{$admins->password_admin}}" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="status_publish" class="col-sm-2 col-form-label">Status Publish</label>
               <div class="col-sm-10">
                  <select class="form-control" name="status_publish_ad" required>
                  <option value="{{$admins->status_publish_ad}}">{{$admins->status_publish_ad}}</option>
                  <option value="publish">Publish</option> 
                  <option value="draft">Draft</option>
                  </select>
               </div>
            </div>

            <input name="status_aktif_ad" value="aktif" type="hidden">
            <input name="updated_by" value="1" type="hidden">

            <button class="btn btn-danger mt-2" type="Reset">Reset form</button>
            <button class="btn btn-primary mt-2" type="submit">Edit form</button>

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