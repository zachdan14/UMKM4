login:
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
        .right-side {
            height: 100vh;
            margin: 0;
            background-color: #ffffff;
            overflow: hidden;
            left: 150px;
            align-items: center;
            justify-content: center;
        }
        .left-side {
            height: 100vh;
            margin-top: 0;
            background-color: #000000;
            color: #ffffff;
            overflow: hidden;
        }
        .img {
            background-color: #0000004f;
            padding: 20px;
        }
        @media (max-width: 768px) {
            body {
                padding: 50px;
            }
        }
    </style>
</head>
<body>
<form action="{{ route('login.proses') }}" class="row g-3 needs-validation" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-5 left-side">
                @if(session('failed'))
                    <div class="alert alert-danger">{{ session('failed') }}</div>
                @endif
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3>Login</h3>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" required>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-row col-3" style="display:inline-flex; justify-content:center; align-items:center; margin-left: 350px">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <br>
                    <div>
                        <p style="text-align:center">Don't have an account yet? <a href="{{ route('register') }}" class="text-decoration-none">Sign Up</a> first!</p>
                    </div>
                </div>
                <div class="col-md-6 p-5 right-side">
                    <br>
                    <br>
                    <br>
                    <center>
                        <img src="assets\gp-lightmode.jpg" class="img-fluid rounded-4 img" alt="Image">
                    </center>
                    <h1 class="my-4">Capturing your moments with us. Kita siap ikutin kemana saja</h1>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>