<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .right-side {
            height: 100vh;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .left-side {
            height: 100vh;
            background-color: #000000;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .img-container {
            background-color: #0000004f;
            padding: 20px;
            border-radius: 15px;
        }
        .img-container img {
            border-radius: 15px;
        }
        .form-control {
            width: 100%;
            max-width: 400px; /* Adjust this value to make the input fields longer */
        }
        @media (max-width: 768px) {
            .left-side, .right-side {
                height: auto;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 left-side">
            <form action="{{ route('login.proses') }}" class="needs-validation" method="POST" novalidate>
                @csrf
                @if(session('failed'))
                    <div class="alert alert-danger">{{ session('failed') }}</div>
                @endif
                <h3 class="mb-4">Login</h3>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div>
                    <p class="text-center">Don't have an account yet? <a href="{{ route('register') }}" class="text-decoration-none">Sign Up</a> first!</p>
                </div>
            </form>
        </div>
        <div class="col-md-6 right-side">
            <div class="img-container text-center">
                <img src="assets/gp-lightmode.jpg" class="img-fluid" alt="Image">
            </div>
            <h1 class="mt-4 text-center">Capturing your moments with us. Kita siap ikutin kemana saja</h1>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
