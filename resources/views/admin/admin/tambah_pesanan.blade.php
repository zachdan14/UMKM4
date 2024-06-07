@extends('admin/layout/admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Pesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Pesanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Memasukkan Data-->
   <div class="card">
      <div class="card-body">
         
         <form action='{{ route('datacustomer.savepesanan') }}' method="POST" autocomplete="off" class="needs-validation" novalidate>
             @csrf
            
            <div class="mb-3 row">
               <label for="email" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" placeholder="Isi Email" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="nama" class="col-sm-2 col-form-label">Nama</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_user" placeholder="Isi Nama" required>
               </div>
            </div>

           
            <div class="mb-3 row">
               <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="kontak" placeholder="Isi Number" required>
               </div>
            </div>

            <div class="form-group" action="process.php"method="post">
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

               <label for="tanggal">Tanggal:</label>
               <input type="date" id="tanggal" name="tanggal" min="<?php echo $today; ?>" required>
                  </div>
               <label for="tipe_layanan">Paket:</label>
                  <select id="tipe" name="tipe_layanan" onchange="tampilkanHarga()">
                     <option value="" disabled selected hidden>PIlih Layanan...</option>
                     <option value="Prewedding">Prewedding</option>
                     <option value="Foto Wisuda">Foto Wisuda</option>
                     <option value="Mahasiswa/Siswa">Mahasiswa/Siswa</option>
                     <option value="Lainnya">Lainnya</option>
                  </select>
                  <div class="form-group">
                     <label for="alamat">Keterangan Alamat:</label>
                     <div class="col-sm-10">
                           <textarea name="alamat" id="alamat" cols="60" rows="5"></textarea>
                     </div>
                  </div>
                  <p id="harga"></p>
               <div>
                  <label for="pembayaran">Pilih Metode Pembayaran:</label> <br>
                  <input type="radio" id="qris" name="pembayaran" value="qris" onclick="showQrisImage()">
                  <label for="qris">QRIS</label><br>
                  <input type="radio" id="cod" name="pembayaran" value="cod" onclick="showQrisImage()">
                  <label for="cod">COD (Cash on Delivery)</label><br>
               </div>
               <div id="qris-image">
               <img src="/assets/qris.jpg" alt="QRIS Image" />
               <p id="warning-message">
                  Silahkan kirim bukti transfer di nomor berikut: 
                  <a href="https://wa.me/6285803646229?text=Halo, saya ingin mengirim bukti transfer!" target="_blank">085803646229</a>
               </div>
                  <div class="row mb-3">
                     <label for="" class="col-sm-2 col-form-label"></label>
                     <div class="col-sm-6">
                           <button type="submit"  class="submit btn btn-sm btn-primary mt-5" ><a href="href=" {{route('home')}}></a>Pesan</button>
                     </div>
                  </div>
               </div>
               </form>

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