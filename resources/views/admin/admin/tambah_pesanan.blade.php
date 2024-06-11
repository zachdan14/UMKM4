@extends('admin/layout/admin')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Pesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data Pesanan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('datacustomer.savepesanan') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" placeholder="Isi Email" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_user" placeholder="Isi Nama" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="kontak" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kontak" placeholder="Isi Number" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal" min="{{ date('Y-m-d') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tipe_layanan" class="col-sm-2 col-form-label">Paket</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="tipe_layanan" required>
                            <option value="" disabled selected hidden>Pilih Layanan...</option>
                            <option value="Prewedding">Prewedding</option>
                            <option value="Foto Wisuda">Foto Wisuda</option>
                            <option value="Mahasiswa/Siswa">Mahasiswa/Siswa</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Keterangan Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="alamat" cols="60" rows="5" required></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="pembayaran" class="col-sm-2 col-form-label">Pembayaran</label>
                    <div class="col-sm-10">
                        <div>
                            <input type="radio" id="qris" name="pembayaran" value="qris" required>
                            <label for="qris">QRIS</label>
                        </div>
                        <div>
                            <input type="radio" id="cod" name="pembayaran" value="cod" required>
                            <label for="cod">COD (Cash on Delivery)</label>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="status_pembayaran" value="Message">

                <div class="mb-3 row">
                    <div class="col-sm-10 offset-sm-2">
                        <button class="btn btn-danger" type="reset">Reset form</button>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </div>
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

.mx-auto {
    width: 780px;
    margin-top: 20px;
}

.card {
    margin-top: 10px;
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
