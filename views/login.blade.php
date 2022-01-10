<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body{
            background-image: url('libraries/image/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            
        }
    </style>

    <title>Halaman Login</title>
  </head>
  <body>
    @if (session()->has('loginError'))
        <div class="alert alert-danger" role="alert">
            {{ session('loginError') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="text-center col-3 d-flex justify-content-center mt-5 border border-3 border-light bg-light" style="border-radius: 20px">
                <div class="my-5">
                    <h5 class="fw-bold">Halaman Login</h5>
                    <form action="/auth" method="POST">
                        @csrf
                        <div class="mb-3 mt-4">
                            <label for="inputUsername" class="fw-bold">Username</label>
                            <input type="text" name="username" class="form-control" id="inputUsername">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="fw-bold">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>