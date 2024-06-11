@extends('user/layout/navbar')
@section('content')
    <title>Responsive Homepage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-image: url('assets/bck1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
        }
        .carousel-item img {
            height: 60vh;
            object-fit: cover;
        }
        .carousel-caption p {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            border-radius: 15px;
            border: 2px solid pink;
            display: inline-block;
            font-size: 1.1rem; /* Ukuran font diperbesar */
        }
        .card {
            background-color: #333;
            color: white;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .button {
            padding: 15px 30px;
            font-size: 16px;
            color: #fff;
            background-color: black;
            border: none;
            border-radius: 5px;
            cursor: not-allowed;
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
        footer a {
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .nav-link.gofotograper {
            font-size: 24px;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .carousel-item img {
                height: 40vh;
            }
            .card img {
                height: 150px;
            }
            .navbar-brand img {
                height: 50px;
            }
            .navbar-text.nav-link.gofotograper {
                font-size: 18px;
            }
        }
        .carousel {
            margin-top: 100px;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="">
            <img id="MDB-logo" src="assets/logooooo.png" alt="MDB Logo" draggable="false" height="70"/>
        </a>
        <span class="navbar-text nav-link gofotograper">GoFotograper</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#Home"> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#layanan"> Layanan kami</a>
                </li>
                <li class="nav-item">
                    <a href="/about"class="nav-link"> About</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard.index')}}" class="nav-item user-icon"><i class="fas fa-user"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Carousel -->
<section id="Home">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/contohh.jpeg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <p>Ini dia fotografer kami, mari jelajahi!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/exp10.jpg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <p>Ini dia fotografer kami, mari jelajahi!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/exp3.jpg" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <p>Ini dia fotografer kami, mari jelajahi!</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Selanjutnya</span>
    </button>
</div>
</section>
<!-- Cards -->
<section id="layanan">
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="assets/exp1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul Kartu 1</h5>
                    <p class="card-text">"Siapkan kamera dan senyuman, karena momen prewedding kami siap diabadikan. Ayo, booking sekarang!"</p>
                    <a href="{{ route('datacustomer.form') }}" class="btn btn-primary">Booking disini</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="assets/exp7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul Kartu 2</h5>
                    <p class="card-text">"Eksplorasi visual dengan latar alam yang memukau. Booking foto pemandangan sekarang untuk hasil yang mempesona!"</p>
                    <a href="{{ route('datacustomer.form') }}" class="btn btn-primary">Booking disini</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="assets/exp8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Judul Kartu 3</h5>
                    <p class="card-text">"Tunjukkan diri Anda yang sebenarnya dengan sesi foto pribadi yang natural. Yuk, booking sekarang dan nikmati hasilnya!"</p>
                    <a href="{{ route('datacustomer.form') }}" class="btn btn-primary">Booking disini</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Floating Footer -->
<div class="floating-footer">
    <a href="https://wa.me/6281901597692" class="btn btn-success" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
 <!-- Footer -->
 <footer class="bg-light text-center text-lg-start mt-5">
    <div class="text-center p-3" style="background-color:black;">
        © 2024 gofotograper:
        <a class="text-dark" href="#">gofotograper</a>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>

@endsection