<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
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
<body>
    <div class="content d-flex">
                <!-- sidebar -->
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:100%;position: absolute;">
            <a href="/tenant/menu" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="fs-4">Hallway space</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="/tenant/pesanan/" class="nav-link active" aria-current="page">
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
                <a href="/tenant/menu" class="nav-link link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
                  Menu
                </a>
              </li>
              <li>
                <a href="/tenant/profile" class="nav-link link-dark">
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

        <div class="value" style="margin-left:329px;margin-top:25px;padding:0px;">
            <div class="head" style="margin-bottom: 36px;">
                <div class="title">
                    <Strong style="font-size: 32px;">Detail Pesanan</Strong>
                </div>
            </div>

            <div class="content-menu d-flex flex-row gap-3">
            @foreach($datas as $data)
            <div class="card" style="width: 234px;background: #EDFCF2;height:100%">
                  <div class="card-body">
                    <div class="value-body d-flex justify-content-between">
                      <div class="label">
                        <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">Pemesan</p>
                        <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">Nomor Meja</p>
                        <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">Keterangan</p>
                      </div>
                      <div class="value">
                        <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$data->customerName}}</p>
                        <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$data->tableNumber}}</p>
                        <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$data->serviceType}}</p>
                      </div>
                    </div>
                    <hr style="margin-top:20px; margin-bottom:20px">
                    <!-- <div class="product">
                      <div class="value-body d-flex justify-content-between">
                        <div class="label">
                          <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">Produk</p>
                          <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">Mie Goreng</p>
                 
                          <div class="notes mt-1">
                            <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;color:#98A2B3;">Mentega tambahin</p>
                          </div>
                        </div>
                        <div class="value">
                          <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">Jumlah</p>
                          <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">1</p>
                        </div>
                      </div>
                    </div> -->
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data->menus as $menu)
                        <tr>
                          <td>{{ $menu->name }}</td>
                          <td style="text-align: center; vertical-align: middle;">{{ $menu->quantity }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                 
                    <div class="notes mt-1">
                          <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;color:#98A2B3;">{{$data->note}}</p>
                    </div>
                    <div class="button-end" style="margin-top:50px">
                      <form action="/tenant/pesanan/update" method="post">
                        @csrf
                        <input type="hidden" name="id_cart" value="{{$data->id_cart}}">
                        <button type="submit" class="btn btn-success" style="width:100%;">Selesai</button>
                      </form>
                        
                    </div>
                  </div>
              </div>
            @endforeach
            </div>
            </div>
        </div>
    </div>
</body>

<script>
    setTimeout(function() {
    location.reload();
  }, 5000);
</script>
</html>