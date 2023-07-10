<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
    <form action="/tenant/registrasi" method="post">
        @csrf
        <div class="container" style="width:426px;height: 425px;margin-top:150px">
            <div class="title d-flex justify-content-center">
                <h4>Daftar Akun Hallway Space</h4>
            </div>
            <div class="desc d-flex justify-content-center">
                <p style="font-style: normal;font-weight: 400;font-size: 20px;line-height: 44px;margin:0px;color: #98A2B3;">Masukan data dengan benar!</p>
            </div>

            <div class="form" style="margin-top:30px">
                <div class="form-group">
                    <label for="nama">Nama Tenant</label>
                    <input type="text" class="form-control" name="tenant_name" id="nama" aria-describedby="emailHelp" placeholder="Nama Tenant" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="margin-top:20px">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    @error('email')
                    <div class="invalid-feedback">
                        Email sudah terpakai
                    </div>
                    @enderror
                </div>
                <div class="form-group" style="margin-top:20px">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="form-group" style="margin-top:20px">
                  <label for="telephone">Nomor Telephone</label>
                  <input type="number" name="telephone" class="form-control" id="telephone" placeholder="Masukkan nomor telepon" required>
                </div>
                <button type="submit" class="btn btn-success" style="width:100%; margin-top:30px">Daftar</button>
            </div>
        </div>
    </form>

    <!-- nav -->
    <nav class="navbar navbar-light bg-light justify-content-end fixed-top">
      <div class="action d-flex gap-2" style="margin-right:20px">
        <div class="masuk">
        <a href="/tenant">
            <button type="submit" class="btn btn-success" style="width:100%;">Masuk</button>
            </a>
        </div>
        <div class="masuk">
            <a href="/tenant/registrasi">
            <button type="submit" class="btn btn-success" style="width:100%;background:transparent; color:black; border:none">Daftar</button>
            </a>
        </div>
      </div>
    </nav>
</body>
</html>