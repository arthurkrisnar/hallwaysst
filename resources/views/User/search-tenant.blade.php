<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <nav style="height:90px; background-color:#FFFFFF; box-shadow: 0px -20px 30px rgba(0, 0, 0, 0.1);" class="navbar navbar-expand navbar-light fixed-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul style="margin-top:20px" class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <div class="menu">
                <a href="/order/{{$id_cart_integer}}" style="text-decoration-line: none; color:black">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                </svg>
                <br>
                <span>Home</span>
                </a>
                    
                </div>
            </li>
            <li class="nav-item">
                <div class="pesanan">
                <a href="/pesanan/{{$id_cart_integer}}" style="text-decoration-line: none; color:black">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                    <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                </svg>
                <br>
                <span>Daftar Pesanan</span>
                </a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <nav class="navbar bg-body-tertiary fixed-top">
      <div class="container-fluid">
      <a href="/order/{{$id_cart_integer}}" class="navbar-brand">TOKO</a>
        <div class="cart" style="margin-right:26px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
        </div>
      </div>
    </nav>

    <div class="container d-flex justify-content-center">
        <div class="search" style="margin-top: 80px; width:100%;">
            <form action="/order/{{$id_cart_integer}}/search/tenant/result" method="post">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" name="keyword" class="form-control" placeholder="Cari...">
                  <div class="input-group-append">
                    <button class="btn" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                  </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="container justify-content-center" style="margin-top:24px;">
    @foreach ($result_tenant as $tenant_detail)
        <div class="card mb-2" style="width:100%; height:84px;">
            <a href="/order/{{$id_cart_integer}}/foods/{{$tenant_detail->id_tenant}}" style="text-decoration:none">
            <div class="card-body d-flex flex-row" style="padding:10px;">
                <div class="image-tenant">
                    <img src="{{$tenant_detail->photo_tenant}}" alt="" style="width:64px; height:64px">
                </div>

                <div class="description" style="margin-left:12px">
                    <div class="title-tenant header-inner">
                        <h7>{{$tenant_detail->tenant_name}}</h2>
                        <p style="font-size:12px; margin-top:4px; margin-bottom:0px; color:#98A2B3">{{$tenant_detail->description_tenant}}</p>
                        <div class="rating d-flex mt-1 gap-1">
                            <svg style="margin-top:1px" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <p style="font-size:12px; color:#98A2B3">4.8 rating</p>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    @endforeach
    </div>

</body>
</html>