<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
    
      }
    </style>
</head>
<body style="height:100%">
<div class="content d-flex">
                <!-- sidebar -->
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:100%;position: absolute;">
            <a href="/tenant/menu" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="fs-4">Hallway space</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="/tenant/pesanan" class="nav-link link-dark" aria-current="page">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
            </svg>
                Pesanan
                </a>
              </li>
              <li>
                <a href="/tenant/laporan" class="nav-link link-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
          <path d="M6 12v-2h3v2H6z"/>
          <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z"/>
        </svg>
                  Laporan Penjualan
                </a>
              </li>
              <li>
                <a href="/tenant/menu" class="nav-link active link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
                  Menu
                </a>
              </li>
              <li>
                <a href="/tenant/profile/" class="nav-link link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
                  Profile
                </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown">
              <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-togglprofe" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="profile d-flex gap-2">
                    <div class="image">
                    <img src="{{$photo}}" alt="" width="40" height="40" class="rounded-circle me-2">
                    </div>
                    <div class="name">
                        <strong>{{$name}}</strong>
                        <p style="color:#475467;font-weight: 400;font-size: 14px;line-height: 20px;">{{$email}}</p>
                    </div>
                    <div class="icon" style="margin-left:25px; margin-top:1px">
                    <a href="/tenant/logout">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
        </a>
                    </div>
                </div>


                <br>

              </a>
            </div>
          </div>

        <div class="value" style="margin-left:280px;margin-top:25px;padding-left:40px;">
            <div class="head" style="margin-bottom: 36px;">
                <div class="title">
                    <Strong style="font-size: 32px;">Menu</Strong>
                </div>
                <div class="button">
                    <button type="submit" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modaltambah">Tambah Produk</button>
                </div>
            </div>

            <div class="content-menu">
                <div class="row">
                  @foreach($menus as $menu)
                  <div class="col-sm-6">
                    <div class="card" style="width: 327px; height:100%">
                      <div class="card-body">
                        <div class="container-body d-flex gap-3">
                          <div class="image">
                            <img src="{{asset('storage/'. $menu->photo)}}" alt="" style="width:60px; height:60px">
                          </div>
                          <div class="desc">
                            <div class="title-menu">
                              <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 21px;margin:0px;">{{$menu->name}}</p>
                            </div>
                            <div class="deskripsi">
                              <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;color:#98A2B3">{{$menu->description}}</p>
                            </div>
                            <div class="price-menu mt-1">
                              <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 21px;margin:0px;">Rp. {{$menu->price}}</p>
                            </div>
                          </div>
                        </div>
                        <div class="button d-flex">
                          <button class="btn btn-success btn-sm edit-btn" style="width:100%; margin-top:16px" data-bs-toggle="modal" data-id="{{$menu->id_menu}}"  data-bs-target="#modaledit{{$menu->id_menu}}">Edit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                 @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>

<!-- modal edit -->
@foreach($menus as $menu)
<div class="modal fade" id="modaledit{{$menu->id_menu}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="width: 656px; padding-left:20px;padding-right:20px">
      <div class="modal-body">
        <div class="title">
          <h6 class="text-center">Edit Menu</h6>
        </div>
        
        <form action="/tenant/menu/edit" method="post">
          @csrf
          
          <input type="hidden" id="editId" value="{{$menu->id_menu}}" name="id_menu" > <br/>
          {{-- @dd($menu->id_menu);
          @dd($menu->id_tenant); --}}
          <div class="form-group mt-4">
            <label for="exampleFormControlInput1">Nama Produk</label>
            <input type="text" id="editName" name="name" value="{{$menu->name}}" class="form-control" id="exampleFormControlInput1">
          </div>
            <div class="radio-btn mt-3">
              <label for="exampleFormControlInput1">Jenis</label>
              <div class="value-radio d-flex gap-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="flexRadioDefault1" value="foods">
                <label class="form-check-label" for="flexRadioDefault1">
                  Foods
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="flexRadioDefault2" value="drinks">
                <label class="form-check-label" for="flexRadioDefault2">
                  Drinks
                </label>
              </div>
              </div>
          <div class="form-group mt-3">
          <label for="exampleFormControlInput1">Keterangan Produk</label>
            <input type="text" id="editDescription" name="description" value="{{$menu->description}}" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group mt-3">
          <label for="exampleFormControlInput1">Harga Produk</label>
            <input type="number" id="editPrice" name="price" value="{{$menu->price}}" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group mt-3">
          <label for="exampleFormControlInput1">Foto Produk</label>
            <input type="file" class="form-control" id="editPhoto" placeholder="">
          </div>
          </div>

          <div class="btn-submit d-flex gap-3 justify-content-between mt-4">
            <div class="button-simpan">
              <button type="post" class="btn btn-success" style="width:200px">Simpan</button>
            </div>
            <div class="button-batal">
              <a href="">
                <button type="button" class="btn btn-danger"  style="width:200px">Hapus</button>
              </a>
            </div>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>
@endforeach

<!-- modal tambah -->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="width: 656px; padding-left:20px;padding-right:20px">
      <div class="modal-body">
        <div class="title">
          <h6 class="text-center">Tambah Menu</h6>
        </div>
        <form action="/tenant/menu" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group mt-4">
            <label for="exampleFormControlInput1">Nama Produk</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
            <div class="radio-btn mt-3">
              <label for="exampleFormControlInput1">Jenis</label>
              <div class="value-radio d-flex gap-2">
              <div class="form-check">
                <input name="category" class="form-check-input" type="radio"  id="flexRadioDefault1" value="foods">
                <label class="form-check-label" for="flexRadioDefault1">
                  Foods
                </label>
              </div>
              <div class="form-check">
                <input name="category" class="form-check-input" type="radio" id="flexRadioDefault2" value="drinks">
                <label class="form-check-label" for="flexRadioDefault2">
                  Drinks
                </label>
              </div>
              </div>
          <div class="form-group mt-3">
          <label for="exampleFormControlInput1">Keterangan Produk</label>
            <input type="text" name="description" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group mt-3">
          <label for="exampleFormControlInput1">Harga Produk</label>
            <input type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="form-group mt-3">
          <label for="photo">Foto Produk</label>
            <input type="file" name="photo" class="form-control" id="photo" placeholder="">
          </div>
          </div>

          <div class="btn-submit d-flex gap-3 justify-content-between mt-4">
            <div class="button-simpan">
              <button class="btn btn-success" style="width:200px">Simpan</button>
            </div>
            <div class="button-batal">
              <button type="button" class="btn btn btn-outline-secondary" data-bs-dismiss="modal" style="width:200px">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>

</html>