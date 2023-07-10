<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>Keranjang</title>

    <style>
        .qty .minus {
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            color: black;
            width: 20px;
            height: 20px;
            font: 16px/1 Arial,sans-serif;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #000000;

        }

        .qty .plus {
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            color: black;
            width: 20px;
            height: 20px;
            font: 16px/1 Arial,sans-serif;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #000000;

        }

        .qty .count {
            color: #000;
            display: inline-block;
            vertical-align: top;
            font-size: 14px;
            font-weight: 400;
            line-height: 17px;
            padding: 0 2px
            ;min-width: 35px;
            text-align: center;
        }

        span{
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        input{  
            border: 0;
            width: 2%;
            margin-left:8px;
            margin-right:8px;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input:disabled{
            background-color:white;
        }
    </style>
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
            <a class="navbar-brand">Keranjang</a>
            <div class="cart" style="margin-right:26px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </div>
        </div>
    </nav>
    
    <div class="container" style="margin-top:48px; padding:24px">
        <div class="container-cart">
            <div class="title-tenant">
                <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;margin:0px;">Warkop Pandita Agung</p>
            </div>
            <div class="menu-cart d-flex" style="margin-top:14px">
                <div class="image-menu">
                    <img src="https://www.indomie.com/uploads/product/category_dry-based-noodles_133948614.png" alt="" style="width:70px; height:70px">
                </div>

                <div class="container d-flex">
                    <div class="description" style="margin-left:14px">
                        <div class="title-menu">
                            <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 21px;margin:0px;">Mie Goreng</p>
                        </div>

                        <div class="price-menu">
                            <p style="font-style: normal;font-weight: 500;font-size: 12px;line-height: 21px;margin:0px;">Rp. 100.000</p>
                        </div>

                        <div class="counter" style="margin-top:8px">
                            <div class="qty">
                                <span class="minus bg-light">-</span>
                                <input type="number" class="count" name="qty" value="1">
                                <span class="plus bg-light">+</span>
                            </div>
                        </div>
                    </div>

                    <div class="delete-menu mt-3">
                        <button id="delete-menu" style="border:0px; background-color: transparent;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#667085" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="make-notes" style="margin-top:12px">
                <form action="">
                    <div class="form-group" style="margin:0px;">
                        <label style="color:#3CCB7F;font-size: 14px;font-weight: 400;" for="notes">Tulis Catatan</label>
                        <input style="margin:0px; margin-top:8px; width:100%; background-color: #F7F7F7;font-size: 12px;border:none;" type="text" class="form-control" id="notes" placeholder="Tulis Catatan...">
                    </div>
                </form>
            </div>
        </div>

        <hr style="margin-top:24px; margin-bottom:24px">
        
        <div class="detail-order">
            <p style="font-style: normal;font-weight: 600;font-size: 14px;line-height: 17px;margin:0px;">Ringkasan Pesanan</p>
        </div>

        <div class="total-harga d-flex justify-content-between" style="margin-top:16px">
            <div class="label-price">
                <p style="font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;margin:0px;">Total Harga</p>
            </div>

            <div class="price">
                <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;margin:0px;">Rp 100.000</p>
            </div>
        </div>

        <div class="customer-detail" style="padding:16px; width:100%; height:162px; background: #EDFCF2; border-radius: 12px; margin-top:24px">
            <div class="pemesan d-flex justify-content-between">
                <div class="label-pemesan" style="margin-top:12px">
                    <p style="font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;margin:0px;">Pemesan</p>
                </div>

                <div class="input-pemesan">
                    <form action="">
                        <div class="form-group" style="margin:0px;">
                            <input style="margin:0px; width:169px; height:37px; background-color: white;font-size: 14px; border:none" type="text" class="form-control" id="pemesan" placeholder="Pesanan atas nama...">
                        </div>
                    </form>
                </div>
            </div>

            <div class="radio-pemesan" style="margin-top:18px">
                <form class="d-flex gap-3" action="" method="post">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="chkYes" onclick="EnableDisableTextBox()">
                      <label for="chkYes" style="font-size:14px" class="form-check-label">
                        Dine In
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="chkNo" onclick="EnableDisableTextBox()">
                      <label for="chkNo" style="font-size:14px" class="form-check-label">
                        Take Away
                      </label>
                    </div>
                </form>
            </div>

            <div class="no-meja d-flex justify-content-between" style="margin-top:18px">
                <div class="label-pemesan" style="margin-top:12px">
                    <p style="font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;margin:0px;">No Meja</p>
                </div>

                <div class="no-meja">
                    <form action="">
                        <div class="form-group" style="margin:0px;">
                            <input style="margin:0px; width:169px; height:37px; background-color: white;font-size: 14px; border:none" type="number" class="form-control" id="tableNumber" placeholder="Nomor Meja..." disabled="disabled">
                        </div>
                    </form>
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
                <p style="font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;margin:0px;color: #3CCB7F;">Rp 100.000</p>
            </div>
        </div>

        <div class="button-next" style="margin-top:20px">
            <button style="width: 84px;height: 36px;background: #16B364;color: white;" type="button" class="btn">Beli</button>
        </div>
    </div>
    
</div>


</body>

<script>
    function EnableDisableTextBox() {
        var chkYes = document.getElementById("chkYes");
        var tableNumber = document.getElementById("tableNumber");
        tableNumber.disabled = chkYes.checked ? false : true;
        if (!tableNumber.disabled) {
            tableNumber.focus();
        }
    }

    $(document).ready(function(){
		$('.count').prop('disabled', true);
   		$(document).on('click','.plus',function(){
			$('.count').val(parseInt($('.count').val()) + 1 );
    	});
        $(document).on('click','.minus',function(){
    		$('.count').val(parseInt($('.count').val()) - 1 );
    			if ($('.count').val() == 0) {
					$('.count').val(1);
			    }
    	});
 	});
</script>
</html>