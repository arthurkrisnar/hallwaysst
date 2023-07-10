<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
    <form action="/tenant" method="post">
        @csrf
        <div class="container" style="width:426px;height: 425px;margin-top:200px">
            <div class="title d-flex justify-content-center">
                <h4>Log in Hallway Space</h4>
            </div>
            <div class="desc d-flex justify-content-center">
                <p style="font-style: normal;font-weight: 400;font-size: 20px;line-height: 44px;margin:0px;color: #98A2B3;">Selamat datang! Silahkan masukan data anda</p>
            </div>

            <div class="form" style="margin-top:30px">
            @if(session()->has('loginError'))
            <div class="alert alert-danger" role="alert">
                Email atau Password Salah
            </div>
            @endif
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group" style="margin-top:20px">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-success" style="width:100%; margin-top:30px">Masuk</button>
            </div>
        </div>
    </form>

    <!-- nav -->
    <nav class="navbar navbar-light bg-light justify-content-end fixed-top">
      <div class="action d-flex gap-2" style="margin-right:20px">
        <div class="masuk">
        <a href="/tenat">
            <button  class="btn btn-success" style="width:100%;background:transparent; color:black; border:none">Masuk</button>
            </a>
        </div>
        <div class="masuk">
            <a href="/tenant/registrasi">
            <button class="btn btn-success" style="width:100%;">Daftar</button>
            </a>
        </div>
      </div>
    </nav>
</body>
</html>