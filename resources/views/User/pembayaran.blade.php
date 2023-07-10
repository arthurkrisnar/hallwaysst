<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}">
    </script>
    <title>Konfirmasi Pembayaran</title>
</head>
<body>
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
            <a class="navbar-brand">Pembayaran</a>
            <div class="cart" style="margin-right:26px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </div>
        </div>
    </nav>
    
    <div class="container" style="margin-top:48px; padding:24px">
        <div class="container-pembayaran">
            <div class="tanggal-pembayaran d-flex justify-content-between">
                <div class="label-date">
                    <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">Tanggal Pembelian</p>
                </div>
                <div class="value-date">
                    <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;" id="date-value"></p>
                </div>
            </div>
            <div class="label-pesanan" style="margin-top:24px">
                <p style="font-style: normal;font-weight: 600;font-size: 14px;line-height: 15px;margin:0px;">Pesanan</p>
            </div>
            @foreach ($cart_menus as $menus)
            <div class="menu-cart d-flex" style="margin-top:14px">
                <div class="image-menu">
                    <img src="{{asset('storage/'. $menus->menu_image)}}" alt="" style="width:70px; height:70px">
                </div>

                <div class="container">
                    <div class="description" style="margin-left:14px">
                        <div class="title-menu">
                            <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 21px;margin:0px;">{{$menus->menu_name}}</p>
                        </div>

                        <div class="price-menu" style="margin-top:4px">
                            <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 21px;margin:0px;">Rp. {{$menus->total_price_per_menu}}</p>
                        </div>

                        <div class="counter" style="margin-top:4px">
                            <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 21px;margin:0px;">Jumlah &nbsp &nbsp <span>{{$menus->quantity}}</span></p>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            <div class="make-notes" style="margin-top:12px">
                <form action="">
                    <div class="form-group" style="margin:0px;">
                        <label style="color:#3CCB7F;font-size: 14px;font-weight: 400;" for="notes">Catatan</label>
                        <input style="margin:0px; margin-top:8px; width:100%; background-color: #F7F7F7;font-size: 12px;border:none;" type="text" class="form-control" id="notes" disabled value="{{$cart_menus[0]->note}}">
                    </div>
                </form>
            </div>
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
                    <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$cart_menus[0]->customer_name}}</p>
                </div>
            </div>
            <div class="nomor-meja d-flex justify-content-between" style="margin-top:8px;">
                <div class="label">
                    <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">Nomor Meja</p>
                </div>
                <div class="value">
                    <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$cart_menus[0]->table_number}}</p>
                </div>
            </div>
            <div class="nomor-meja d-flex justify-content-between" style="margin-top:8px;">
                <div class="label">
                    <p style="font-style: normal;font-weight: 400;font-size: 12px;line-height: 15px;margin:0px;">Keterangan</p>
                </div>
                <div class="value">
                    <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">{{$cart_menus[0]->service_type}}</p>
                </div>
            </div>
        </div>

        <hr>

            <div class="total-harga d-flex justify-content-between">
                <div class="label">
                   <p style="font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;margin:0px;">Total Harga</p>
                </div>

                <div class="value">
                    <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;margin:0px;">Rp {{$jumlah}}</p>
                </div>
            </div>
    </div>


<!-- modal payment -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="position:absolute;bottom:0;margin:0;width:100%;">
      <div class="modal-content" style="height:559px">
        <div class="modal-body" style="padding:24px">
          <div class="icon-top d-flex align-items-center justify-content-center">
              <div class="icon-modal" style="width: 30px;height: 4px;background: #D0D5DD;border-radius: 8px;"></div>
          </div>
          <div class="border-image d-flex align-items-center justify-content-center">
              <div class="image-background d-flex align-items-center justify-content-center" style="background: #F4F4F4; border-radius: 32.7467px; width: 100%; height:307px; margin-top:24px">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/QR_Code_example.png" alt="" style="width:250px; height:250px">
              </div>
          </div>
          <div class="description d-flex justify-content-center" style="margin-top:16px">
              <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;margin:0px;">ATM: BCA 08212417702 Atas Nama: Rozali</p>
          </div>
          <div class="button d-flex justify-content-between" style="margin-top:43px;">
              <div class="unggah-pembayaran">
                  <button data-bs-toggle="modal" data-bs-target="#pembayaran" style="width:100%; background: #16B364; color:white" class="btn">Bukti Pembayaran</button>
              </div>
              <div class="bayar-tunai">
                  <button style="width:100%; color:white" class="btn btn-secondary">Bayar Secara Tunai</button>
              </div>
          </div>
          <div class="alert" role="alert" style="color:black; font-size:12px; height:36px; padding: 8px 27px 8px 16px; margin:0px; background: #EDFCF2; margin-top:24px">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#16B364" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
              &nbsp Siapkan uang pas untuk pembayaran tunai
          </div>

        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="pembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="position:absolute;bottom:0;margin:0;width:100%;">
      <div class="modal-content" style="height:300px">
        <div class="modal-body" style="padding:24px">
        <div class="icon-top d-flex align-items-center justify-content-center">
              <div class="icon-modal" style="width: 30px;height: 4px;background: #D0D5DD;border-radius: 8px;"></div>
          </div>
        <h6 style="margin-top:24px">Unggah Bukti Pembayaran</h6>
        <div class="input-group mb-3" style="margin-top:16px">
            <form action="" method="post">
                <input class="form-control" type="file" placeholder="Belum ada file dipilih" aria-label=".form-control-lg example">
                <div class="button-konfirmasi" style="margin-top:100px">
                    <button style="width:100%" type="button" class="btn btn-success">Konfirmasi Pembayaran</button>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
</div>


<!-- footer -->
<div class="container fixed-bottom" style="padding: 8px 24px 8px 24px; width: 100%;height: 118px; background: #FFFFFF; box-shadow: 0px -2px 0px rgba(0, 0, 0, 0.1);">   
    <div class="alert" role="alert" style="color:black; font-size:12px; height:36px; padding: 8px 27px 8px 16px; margin:0px; background: #EDFCF2;">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#16B364" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
        </svg>
        &nbsp Pastikan kembali Pesanan anda dengan benar
    </div>
    
    <div class="container d-flex justify-content-between">
        <div class="total-harga-footer" style="margin-top:16px">
            <div class="label-price">
                <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;margin:0px;">Total Harga</p>
            </div>

            <div class="price" style="margin-top:8px">
                <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;margin:0px;color: #3CCB7F;">Rp {{$jumlah}}</p>
            </div>
        </div>

        <a href="/order/{{$id_cart_integer}}/cart/{{$id_tenant}}/pembayaran/metode">
        <div class="button-next" style="margin-top:20px">
            <button type="" style="width: 118px;height: 36px;background: #16B364;color: white;" type="button" class="btn">Pembayaran</button>
        </div>
        </a>
        
    </div>
    
</div>


</body>

<script type="text/javascript">
   
const month = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

const currentDate = new Date();
const year = currentDate.getFullYear();
const monthIndex = currentDate.getMonth();
const monthName = month[monthIndex];
const day = currentDate.getDate();
const formattedDate = `${day} ${monthName} ${year}`;

const dateValueElement = document.getElementById("date-value");
const dateInputElement = document.getElementById("date-input");

dateValueElement.textContent = formattedDate;


</script>
</html>