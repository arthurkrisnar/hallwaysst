<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body>
    <nav style="height:90px; background-color:#FFFFFF; box-shadow: 0px -20px 30px rgba(0, 0, 0, 0.1);" class="navbar navbar-expand navbar-light fixed-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul style="margin-top:20px" class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <div class="menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                </svg>
                    <a class="nav-link active" href="#">Menu</a>
                </div>
            </li>
            <li class="nav-item">
                <div class="pesanan">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                    <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                </svg>
                    <a class="nav-link" href="#">Daftar Pesanan</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <div class="back-button">
                <div>
                    <div class="btn-group" style="margin-left:26px;>
                        <button type="button" class="btn btn-primary btn-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left"viewBox="0 0 16 16" style="color:#000000">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                        </button>
                    </div>
    
                </div>
            </div>
            <a class="navbar-brand">Pesanan</a>
            <div class="cart" style="margin-right:26px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="container-transaksi" style="margin-top:48px; padding:24px">
        <div class="no-transaksi d-flex justify-content-between">
            <div class="label">
                <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">No Transaksi</p>
            </div>
            <div class="label">
                <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$data[0]->id_cart_short}}</p>
            </div>
        </div>
        <div class="no-transaksi d-flex justify-content-between">
            <div class="label">
                <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">Status Pesanan</p>
            </div>
            <div class="label">
                <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$data[0]->status_deliver}}</p>
            </div>
        </div>
        <hr style="margin-bottom:8px;margin-top:8px">
        <div class="tanggal-pembelian d-flex justify-content-between">
            <div class="label-date">
                <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;color:#98A2B3">Tanggal Pembelian</p>
            </div>
            <div class="value-date">
                <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;color:#98A2B3">{{$data[0]->date}}</p>
            </div>
        </div>

        <div class="label-pesanan" style="margin-top:24px">
            <p style="font-style: normal;font-weight: 600;font-size: 14px;line-height: 15px;margin:0px;">Pesanan</p>
        </div>

            @foreach($data as $datas)
            <div class="menu-cart d-flex" style="margin-top:14px">
                <div class="image-menu">
                    <img src="{{asset('storage/'. $datas->photo)}}" alt="" style="width:70px; height:70px">
                </div>

                <div class="container">
                    <div class="description" style="margin-left:14px">
                        <div class="title-menu">
                            <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 21px;margin:0px;">{{$datas->name}}</p>
                        </div>

                        <div class="price-menu" style="margin-top:4px">
                            <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 21px;margin:0px;">Rp. {{$datas->price}}</p>
                        </div>

                        <div class="counter" style="margin-top:4px">
                            <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 21px;margin:0px;">Jumlah &nbsp &nbsp <span>{{$datas->quantity}}</span></p>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

            <div class="make-notes" style="margin-top:12px">
                <form action="">
                    <div class="form-group" style="margin:0px;">
                        <label style="color:#3CCB7F;font-size: 14px;font-weight: 400;" for="notes">Catatan</label>
                        <input style="margin:0px; margin-top:8px; width:100%; background-color: #F7F7F7;font-size: 12px;border:none;" type="text" class="form-control" id="notes" disabled value="{{$data[0]->note}}">
                    </div>
                </form>
            </div>

            <hr style="margin-top:24px; margin-bottom:24px">
        
        <div class="detail-order">
            <p style="font-style: normal;font-weight: 600;font-size: 14px;line-height: 17px;margin:0px;">Ringkasan Pesanan</p>
        </div>

        <div class="detail-pemesan" style="color:#98A2B3; margin-top:16px">
            <div class="nama-pemesan d-flex justify-content-between">
                <div class="label">
                    <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">Pemesan</p>
                </div>
                <div class="value">
                    <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$data[0]->customer_name}}</p>
                </div>
            </div>
            <div class="nomor-meja d-flex justify-content-between" style="margin-top:8px;">
                <div class="label">
                    <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">Nomor Meja</p>
                </div>
                <div class="value">
                    <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$data[0]->table_number}}</p>
                </div>
            </div>
            <div class="nomor-meja d-flex justify-content-between" style="margin-top:8px;">
                <div class="label">
                    <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">Keterangan</p>
                </div>
                <div class="value">
                    <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$data[0]->service_type}}</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="total-harga d-flex justify-content-between">
            <div class="label">
               <p style="font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;margin:0px;">Total Harga</p>
            </div>

            <div class="value">
                <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;margin:0px;">Rp {{$data[0]->total_price}}</p>
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