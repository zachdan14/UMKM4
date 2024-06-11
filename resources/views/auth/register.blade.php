<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .right-side {
            height: 100vh;
            background-color: #000000;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .left-side {
            height: 100vh;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .img-container {
            background-color: #0000004f;
            padding: 20px;
            border-radius: 15px;
            max-width: 55%;
            margin: auto;
        }
        .img-container img {
            border-radius: 15px;
            max-width: 100%; 
        }
        .form-control, .form-select {
            width: 100%;
            max-width: 400px;
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
            <center>
                <div class="img-container text-center">
                    <img src="assets/gp-lightmode.jpg" class="img-fluid" alt="Image">
                </div>
                <h1 class="mt-4 text-center">Capturing your moments with us. Kita siap ikutin kemana saja</h1>
            </center>
        </div>
        <div class="col-md-6 right-side">
            @if(session('failed'))
                <div class="alert alert-danger">{{ session('failed') }}</div>
            @endif
            <h3>Register lur</h3>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('register.proses') }}" class="needs-validation" method="POST" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number:</label>
                    <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender:</label>
                    <select class="form-select" id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
                <div class="d-grid mb-3">
                    <button type="reset" id="btnreset" class="btn btn-danger">Reset</button>
                </div>
                <div>
                    <p class="text-center">Already have an account? Let's go <a href="{{ route('login') }}" class="text-decoration-none">Login</a> bro, hayukk!</p>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.getElementById('btnreset').addEventListener('click', function() {
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('password').value = '';
        document.getElementById('phone_number').value = '';
        document.getElementById('gender').value = '';
    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
