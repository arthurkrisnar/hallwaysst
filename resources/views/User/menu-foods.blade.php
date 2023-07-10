<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Foods</title>
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
        <div class="category d-flex gap-2" style="margin-top: 80px; width:136px; height:36px; background-color:#F2F4F7; padding: 4px 8px 4px; border-radius:16px;">
            <div class="category-food d-flex justify-content-center" style="width:100%; height:28px; background-color:#16B364; border-radius:13.28px; color:white; font-size:12px; padding: 6px 7.91px 6px 7.91px;">
                <a style="text-decoration:none; color:white;" href="/order/{{$id_cart_integer}}/foods/{{$id_tenant}}">Foods</a>
            </div>
            <div class="category-drinks d-flex justify-content-center" style="width:54px; height:28px; background-color:#F2F4F7; border-radius:13.28px; font-size:12px; padding: 6px 7.91px 6px 7.91px">
                <a style="text-decoration:none; color:#98A2B3;" href="/order/{{$id_cart_integer}}/drinks/{{$id_tenant}}">Drinks</a>
            </div>
        </div>
    </div>
    

    <div class="container d-flex justify-content-center">
        <div class="search" style="margin-top: 24px; width:100%;">
            <form action="/order/{{$id_cart_integer}}/search/food/{{$id_tenant}}/result" method="post">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" name="keyword" class="form-control" placeholder="Cari...">
                  <div class="input-group-append">
                    <button type="post" class="btn" type="button">
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
    @foreach ($queryCategory as $menu)
        <div class="card mb-2" style="width:100%; height:100%; padding:10px; ">
            <div class="card-body d-flex" data-bs-toggle="modal" data-bs-target="#myModal" style="width:100%; height:100%; padding:0px;">
                <div class="image-tenant">
                    <img src="{{asset('storage/'. $menu->photo)}}" alt="" style="width:64px; height:64px">
                </div>

                <div class="description" style="margin-left:12px;">
                    <div class="title-tenant header-inner">
                        <h7>{{$menu->name}}</h2>
                        <p style="font-size:12px; margin-top:4px; margin-bottom:0px; color:#98A2B3">{{$menu->description}}</p>
                        <div class="price mt-1">
                            <p style="font-size:12px; color:black">Rp. {{$menu->price}}</p>
                        </div>
                    </div>
                </div>

                <div class="order-button" style="margin-top:24px; margin-left:24px">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#16B364" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg> -->
            </div>
            </div>
        </div>
    @endforeach
    </div>

    <!-- Modal -->
    @foreach($queryCategory as $menu)
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="position:absolute;bottom:0;margin:0;width:100%;">
        <div class="modal-content" style="height:559px">
          <div class="modal-body" style="padding:24px">
            <div class="icon-top d-flex align-items-center justify-content-center">
                <div class="icon-modal" style="width: 30px;height: 4px;background: #D0D5DD;border-radius: 8px;"></div>
            </div>
            
            <form action="/order/{{$id_cart_integer}}/{{$id_tenant}}" method="post">
             @csrf
            <div class="border-image d-flex align-items-center justify-content-center">
                <div class="image-background d-flex align-items-center justify-content-center" style="background: #F4F4F4; border-radius: 32.7467px; width: 100%; height:307px; margin-top:24px">
                    <img src="{{asset('storage/'. $menu->photo)}}" alt="" style="width:250px; height:250px">
                </div>
            </div>
            <div class="description">
                <div class="content-desc" style="margin-top:7px">
                    <p style="font-weight: 500;font-size: 24px; margin:0px;">{{$menu->name}}</p>
                    <p style="font-weight: 300;font-size: 16px; margin:0px; color: #98A2B3;">{{$menu->description}}</p>
                    <p style="font-weight: 500;font-size: 16px;color: #16B364; margin-top:8px;">Rp. {{$menu->price}}</p>
                    <input type="hidden" name="id" value="{{$menu->id_menu}}">
                    <input type="hidden" name="price" value="{{$menu->price}}">
                </div>
            </div>
            <div class="button" style="margin-top:43px;">
                <button type="post" style="width:100%; background: #16B364; color:white" class="btn">Tambah</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>


</body>
</html>