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
            background-color: #000;
            overflow: hidden;
            left: 150px;
            align-items: center;
            justify-content: center;
            color: #ffffff;
        }
        .left-side {
            height: 100vh;
            margin-top: 0;
            background-color: #ffffff;
            overflow: hidden;
        }
        .img {
            background-color: #0000004f;
            padding: 20px;
        }
        @media (max-width: 768px) {
            body {
                padding: 50px
            }
        }
    </style>
</head>
<body>
<form action="{{ route('register.proses') }}" class="row g-3 needs-validation" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-5 left-side">
                <br>
                <br>
                <br>
                <center>
                    <img src="assets\gp-lightmode.jpg" class="img-fluid rounded-4 img" alt="Image">
                </center>
                <h1 class="my-4">Capturing your moments with us. Kita siap ikutin kemana saja</h1>
            </div>
            <div class="col-md-6 p-5 right-side">
                @if(session('failed'))
                <div class="alert alert-danger">{{ session('failed') }}</div>
            @endif
                <br>
                <br>
                <br>
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
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-row" style="display: inline-flex; margin-left: 150px">
                    <div class="form-group col-5">
                        <label for="number" class="form-label">Phone Number:</label>
                        <input type="number" class="form-control" name="phone_number" required>
                    </div>
                    <div class="form-group col-3" style="margin-left: 150px;">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    {{-- lokasi --}}
                </div>
                <br>
                <br>
                <div>
                    <p style="text-align: center">already have an account? Lets go <a href="{{ route('login') }}" class="text-decoration-none">Login</a> bro, hayukk!</p>
                </div>
                <br>
                <br>
                <div>
                    <div class="form-row " style="display:inline-flex; justify-content:center; align-items:center; margin-left: 350px">                
                        <div class="form-group col-8">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                        <div class="form-group col-3">
                            <button type="reset" id="btnreset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </div>
                <br>
                
            </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('btnreset').addEventListener('click', function() {
            document.getElementById('name').value       = '';
            document.getElementById('email').value      = '';
            document.getElementById('password').value   = '';
            document.getElementById('number').value     = '';
            document.getElementById('gender').value     = '';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>