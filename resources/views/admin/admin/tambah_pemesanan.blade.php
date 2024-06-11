@extends('admin/layout/admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Pemesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Pemesanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Memasukkan Data-->
   <div class="card">
      <div class="card-body">
         
         <form action='{{ route("datacustomer.savepesanan") }}' method="POST" autocomplete="off" class="needs-validation" novalidate>
             @csrf
            
            <div class="mb-3 row">
               <label for="nama_user" class="col-sm-2 col-form-label">Username</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_user" placeholder="Isi Username" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="email" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" placeholder="Isi Email" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="kontak" class="col-sm-2 col-form-label">No Handphone</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="kontak" placeholder="Isi Password" required>
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
                   <input type="date" class="form-control" name="tanggal" required>
                </div>
             </div>

            <div class="mb-3 row">
               <label for="pilih_layanan" class="col-sm-2 col-form-label">Layanan</label>
               <div class="col-sm-10">
                  <select class="form-control" name="pilih_layanan" required>
                  <option></option>
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
                   <input type="text" class="form-control" name="alamat" placeholder="Isi Keterangan Alamat" required>
                </div>
             </div>

             <div class="mb-3 row">
                <label for="pembayaran" class="col-sm-2 col-form-label">Pembayaran</label>
                <div class="col-sm-10">
                   <select class="form-control" name="pembayaran" required>
                   <option></option>
                   <option value="Publish">Qris</option> 
                   <option value="Draft">COD (Cash on Delivery)</option>
                   </select>
                </div>
             </div>

            <input name="created_by" value="1" type="hidden">

            <button class="btn btn-danger mt-2" type="Reset">Reset form</button>
            <button class="btn btn-primary mt-2" type="submit">Submit form</button>

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