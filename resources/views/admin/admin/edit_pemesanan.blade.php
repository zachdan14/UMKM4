@extends('admin/layout/admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Akun</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Akun</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Memasukkan Data-->
   <div class="card">
      <div class="card-body">
         
         <form action="{{ route('datacustomer.update', $users->id_user) }}" method="POST" autocomplete="off" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
             <div class="mb-3 row">
                <label for="nama_user" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                   <input type="text" class="form-control" name="nama_user" placeholder="Isi Username" value="{{$users->nama_user}}" required>
                </div>
             </div>
 
             <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                   <input type="text" class="form-control" name="email" placeholder="Isi Email" value="{{$users->email}}" required>
                </div>
             </div>
 
             <div class="mb-3 row">
                <label for="kontak" class="col-sm-2 col-form-label">No Handphone</label>
                <div class="col-sm-10">
                   <input type="text" class="form-control" name="kontak" placeholder="Isi Password" value="{{$users->kontak}}" required>
                </div>
             </div>
 
             <div class="mb-3 row">
                 <?php
                     // Ambil tanggal saat ini
                     $today = date("Y-m-d");
                     if ($_SERVER["REQUEST_METHOD"] == "POST") {
                         $selectedDate = $_POST['date'];
                         $today = date("Y-m-d");
                     
                         if ($selectedDate < $today) {
                             echo "Tanggal yang dipilih tidak valid. Tidak bisa memilih tanggal di masa lalu.";
                         } else {
                             echo "Tanggal yang Anda pilih adalah: " . htmlspecialchars($selectedDate);
                         }
                     }
                     ?>
                         <?php
                 // Ambil tanggal saat ini
                 $today = date("Y-m-d");
                 ?>
                 <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Booking</label>
                 <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal" value="{{$users->tanggal}}" required>
                 </div>
              </div>

              <div class="mb-3 row">
               <label for="status_pemesanan" class="col-sm-2 col-form-label">Status Pemesanan</label>
               <div class="col-sm-10">
                  <select class="form-control" name="status_pemesanan" value="{{$users->status_pemesanan}}" required>
                  <option>{{$users->status_pemesanan}}</option>
                  <option value="Message">Message</option> 
                  <option value="Acc">Acc</option>
                  <option value="Process">Process</option>
                  <option value="Done">Done</option>
                  </select>
               </div>
            </div>
 
             <div class="mb-3 row">
                <label for="tipe_layanan" class="col-sm-2 col-form-label">Layanan</label>
                <div class="col-sm-10">
                   <select class="form-control" name="tipe_layanan" value="{{$users->tipe_layanan}}" required>
                   <option>{{$users->tipe_layanan}}</option>
                   <option value="Publish">Prewedding</option> 
                   <option value="Draft">Foto Wisuda</option>
                   <option value="Draft">Mahasiswa/Siswa</option>
                   <option value="Draft">Lainya</option>
                   </select>
                </div>
             </div>
 
              <div class="mb-3 row">
                 <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Isi Keterangan Alamat" value="{{$users->alamat}}" required>
                    </div>
                </div>
 
              <div class="mb-3 row">
                 <label for="pembayaran" class="col-sm-2 col-form-label">Pembayaran</label>
                 <div class="col-sm-10">
                    <select class="form-control" name="pembayaran" value="{{$users->pembayaran}}" required>
                    <option>{{$users->pembayaran}}</option>
                    <option value="Publish">Qris</option> 
                    <option value="Draft">COD (Cash on Delivery)</option>
                    </select>
                 </div>
              </div>

            <input name="status_aktif" value="aktif" type="hidden">
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