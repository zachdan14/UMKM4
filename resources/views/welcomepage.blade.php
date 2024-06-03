@extends('user/layout/navbar')
@section('content')
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div>
<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
    <div class="container">
        <a class="navbar-brand" href="">
            <img id="MDB-logo" src="assets/logooooo.png" alt="MDB Logo" draggable="false" height="70"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">GoFotograper</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Home"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#layanan"><i class="fas fa-bell pe-2"></i> Layanan kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/about"><i class="fa fa-commenting" aria-hidden="true"></i> About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-item user-icon"><i class="fas fa-user"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="huruf-1 container mt-5 pt-5">
    <text>Ini Dia Fotografer Mari Jelajahi </text>
    <img class="imagee pt-2" src="assets/iklannn2.jpg" class="responsive" alt="Advertisement">
</div>

<div id="layanan" class="mt-5">
    <div class="layanan">
        <p>Layanan Kami</p>
    </div>
</div>

<center>
    <button disabled class="btn-1 my-3"><i class="fa fa-camera" style="font-size:20px"></i> Foto</button>
</center>
<div class="card-smua">
  <center>
<div class="card-grid">
    <a class="card" href="#">
        <div class="card__background" style="background-image: url('https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')"></div>
        <div class="card__content">
            <p class="card__category"></p>
            <h3 class="card__heading">Example</h3>
        </div>
    </a>
    <a class="card" href="#">
        <div class="card__background" style="background-image: url('https://images.unsplash.com/photo-1557187666-4fd70cf76254?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')"></div>
        <div class="card__content">
            <p class="card__category"></p>
            <h3 class="card__heading">Example</h3>
        </div>
    </a>
    <a class="card" href="#">
        <div class="card__background" style="background-image: url('https://images.unsplash.com/photo-1556680262-9990363a3e6d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')"></div>
        <div class="card__content">
            <p class="card__category"></p>
            <h3 class="card__heading">Example</h3>
        </div>
    </a>
    <a class="card" href="#">
        <div class="card__background" style="background-image: url('https://images.unsplash.com/photo-1557004396-66e4174d7bf6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')"></div>
        <div class="card__content">
            <p class="card__category"></p>
            <h3 class="card__heading">Example</h3>
        </div>
    </a>
</div>
</center>
</div>

<center>
    <button disabled class="btn-1 my-3"><i class="fa-solid fa-video" style="font-size:15px"></i> Video</button>
</center>

<div class="video">
    <center>
        <video width="45%" controls >
            <source src="assets/testividd.mp4" type="video/mp4">
        </video>
    </center>
</div>

<div class="container mt-5 small-table">
  <h2 class="text-center mb-4">Jam Kerja </h2>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Hari</th>
          <th>Jam Buka</th>
          <th>Jam Tutup</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Senin</td>
          <td>08:00</td>
          <td>17:00</td>
        </tr>
        <tr>
          <td>Selasa</td>
          <td>08:00</td>
          <td>17:00</td>
        </tr>
        <tr>
          <td>Rabu</td>
          <td>08:00</td>
          <td>17:00</td>
        </tr>
        <tr>
          <td>Kamis</td>
          <td>08:00</td>
          <td>17:00</td>
        </tr>
        <tr>
          <td>Minggu</td>
          <td>Tutup</td>
          <td>Tutup</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Floating Footer -->
<div class="floating-footer">
    <a href="https://wa.me/nomor-anda" class="btn btn-success" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
</div>

<style>
.navbar-light .navbar-nav .nav-link {
    color: black;
    padding: 15px;
    margin-right: 20px;
    text-decoration: none;
    font-size: 19px;
    font-weight: bold;
}

body {
    margin: 0;
    min-height: 80vh;
    display: flex;
    flex-direction: column;
    background: black;
}

.huruf-1 {
    text-align: center;
    color: white;
    display: inline-block;
    margin-top:20px;
    font-size: 35px;
    font-family: 'Times New Roman', serif;

}

.imagee {
    width: 100%;
    max-width: 400px;
    margin-top: 20px;
    border-radius: 10px;
}

.layanan {
    background: white;
    width: 100%;
    background-size: cover;
    font-size: 30px;
    font-family: 'Times New Roman', serif;
    text-align: center;
    color: black;
    margin-top: 30px;
    border-radius: 10px;
}

.btn-1 {
    border-radius: 19px;
    margin-top: 20px;
    font-size: 16px;
    background: white;
    height: 60px;
    width: 100px;
}

:root {
    --background-dark: #2d3548;
    --text-light: rgba(255, 255, 255, 0.6);
    --text-lighter: rgba(255, 255, 255, 0.9);
    --spacing-s: 8px;
    --spacing-m: 16px;
    --spacing-l: 24px;
    --spacing-xl: 32px;
    --spacing-xxl: 64px;
    --width-container: 1200px;
}

* {
    border: 0;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
* {
    border: 0;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.card-grid {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    padding: 16px;
    justify-content: center;
}

.card {
    flex: 0 0 auto;
    width: 200px;
    margin-right: 16px;
    text-decoration: none;
    color: inherit;
}

.card__background {
    height: 280px;
    background-size: cover;
    background-position: center;
}

.card__content {
    padding: 16px;
}

.card__heading {
    margin: 0;
    font-size: 1.25em;
}

.card__category {
    margin: 0;
    color: #888;
    font-size: 0.875em;
}
.card{
  list-style: none;
  position: relative;
}

.card:before {
    content: '';
    display: block;
    padding-bottom: 150%;
    width: 100%;
}

.card__background {
    background-size: cover;
    background-position: center;
    border-radius: var(--spacing-l);
    bottom: 0;
    filter: brightness(0.75) saturate(1.2) contrast(0.85);
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform-origin: center;
    transform: scale(1) translateZ(0);
    transition: filter 200ms linear, transform 200ms linear;
}

.card:hover .card__background {
    transform: scale(1.05) translateZ(0);
}

.card-grid:hover > .card:not(:hover) .card__background {
    filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
}

.card__content {
    left: 0;
    padding: var(--spacing-l);
    position: absolute;
    top: 0;
}

.card__category {
    color: var(--text-light);
    font-size: 0.9rem;
    margin-bottom: var(--spacing-s);
    text-transform: uppercase;
}

.card__heading {
    color: var(--text-lighter);
    font-size: 1.9rem;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
    line-height: 1.4;
    word-spacing: 100vw;
}

.video {
  background-color:var(--background-dark);
    text-align: center;
    padding: 10px;
    border-radius: 10px;
    margin-top: 5px;
}

.small-table {
    text-align: center;
    border-radius: 10px;
    padding: 10px;
    margin-top: 5px;
}

.floating-footer {
    position: fixed;
    bottom: 20px;
    right: 20px;
}

.floating-footer .btn {
    border-radius: 50%;
    padding: 20px;
}

.table-responsive {
    max-width: 600px;
    margin: 0 auto;
}

@media (max-width: 768px) {
    .huruf-1 {
        font-size: 24px;
    }

    .layanan {
        font-size: 24px;
    }

    .btn-1 {
        width: 80px;
        font-size: 14px;
    }

    .card-grid {
        flex-direction: column;
        align-items: center;
        margin-bottom: 5px;
    }

    .card {
        margin-bottom: 20px;
    }

    .card__background {
        height: 280px;

    }

    .table-responsive {
        width: 100%;
        padding: 0 10px;
    }
}
</style>
@endsection
