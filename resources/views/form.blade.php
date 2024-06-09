
        @extends('admin/layout/layout')
        @section('content')
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form Pembayaran</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #a3e7d8
                    padding: 20px;
                }
                .payment-form {
                    max-width: 600px;
                    margin: 0 auto;
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                }
                h3 {
                    text-align: center;
                }
                .form-group {
                    margin-bottom: 20px;
                }
                .form-group label {
                    font-weight: bold;
                }
                .form-group input {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 3px;
                }
                .form-group button {
                    background-color: #007bff;
                    color: #fff;
                    border: none
                    padding: 10px 20px;
                    border-radius: 3px;
                    cursor: pointer;
                }
                .calendar {
                    display: grid;
                    grid-template-columns: repeat(7, 1fr);
                    gap: 10px;
                }
                .calendar div {
                    padding: 10px;
                    border: 1px solid #ccc;
                    text-align: center;
                }
                .disabled {
                    background-color: #f0f0f0;
                    color: #ccc;
                }
                .jam {
                    margin-bottom: 20px;     
                }
                select {
                    width: 200px;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 3px;
                }
                option {
                    padding-left: 30px; /* Jarak antara teks dan gambar */
                    background-repeat: no-repeat;
                    background-position: 5px center;
                }
                #qris-image {
                    display: none;
                    margin-top: 20px;
                }
                #qris-image img {
                    width: 100%;
                    max-width: 100%;
                    height: auto;
                }
                #warning-message {
                    margin-top: 10px;
                    color: red;
                }
                .submit {
                    margin-left: 100%;
                    width: 50%;
                }
                /* Penyesuaian untuk tampilan desktop */
                @media (min-width: 768px) {
                    .container {
                        display: block; /* Menggunakan block layout */
                    }
                    .form-container {
                        float: left; /* Menggunakan float untuk menyebarkan elemen */
                        width: 60%; /* Menyesuaikan lebar form */
                        margin-right: 20px; /* Jarak antara form dan gambar */
                    }
                    #gambar {
                        float: right; /* Menggunakan float untuk menyebarkan gambar */
                        width: 20%; /* Menyesuaikan lebar gambar */
                    }
                }
            </style>
            <script>
                function showQrisImage() {
                    var paymentOption = document.querySelector('input[name="pembayaran"]:checked').value;
                    var qrisImage = document.getElementById('qris-image');
                    if (paymentOption === 'qris') {
                        qrisImage.style.display = 'block';
                    } else {
                        qrisImage.style.display = 'none';
                    }
                }
                function tampilkanHarga() {
                    var select = document.getElementById("tipe");
                    var harga = document.getElementById("harga");
                    var paket = select.value;

                    switch(paket) {
                        case "Prewedding":
                            harga.textContent = "Total Harga : Rp 60.000";
                            break;
                        case "Foto Wisuda":
                            harga.textContent = "Total Harga : Rp 60.000";
                            break;
                        case "Mahasiswa/Siswa":
                            harga.textContent = "Total Harga : Rp 60.000";
                            break;
                        case "Lainnya":
                            harga.textContent = "Total Harga : Rp 60.000";
                            break;
                        default:
                            harga.textContent = "";
                            break;
                    }
                }
            </script>
        </head>
        <body style="background-color: #98E4FF;">
        <form method="POST" action="{{ route('datacustomer.store') }}">
        @csrf
        @method('POST')
        @error('fullname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="payment-form">
            <h3>Form Pemesanan</h3>
            <div class="form-group">
                <label for="nama_user">Nama Lengkap:</label>
                <input type="text" id="nama_user" name="nama_user" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email (Gmail):</label>
                <input type="email" id="email" name="email" placeholder="Masukkan alamat email" required>
            </div>
            <div class="form-group">
                <label for="kontak">Nomor WhatsApp:</label>
                <input type="text" id="kontak" name="kontak" placeholder="Masukkan nomor WhatsApp" required oninput="validateNumber(this)">
            </div>
            <script>
                function validateNumber(input) {
                    input.value = input.value.replace(/\D/g, '');
                }
                </script>
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
                        <?php
                // Ambil tanggal saat ini
                $today = date("Y-m-d");
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
                            <button type="submit"  class="submit btn btn-sm btn-primary mt-5" ><a href="href=" {{ route('home') }}></a>Pesan</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" value="Message" name="status_pembayaran">
            </form>
            </div>
        </body>
        </html>


        @endsection