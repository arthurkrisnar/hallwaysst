<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>Halway Space</title>

    <style>
    
    .form-pesanan{
        padding:24px;
    }

    .button-next button{
        margin-top: 32px;
        width: 174px;
        height: 40px;
    }
    .image-header img{
        height: 346px;
        margin-top: -50px;
    }

    </style>
</head>
<body>
<div class="image-header">
    <img src="https://gcdnb.pbrd.co/images/G1boQ383Y4zM.png?o=1" width="100%" alt="">
</div>
<br>
<div class="h1 text-center">Hallway Space</div>

<div class="form-pesanan">
<input type="hidden" name="id_cart_integer" value="{{ $id_cart_integer }}" />
<form action="/order/{{ $id_cart_integer }}/post" method="post">
@csrf
<div class="customer-detail" style="padding:16px; background: #EDFCF2; border-radius: 12px;">
    <div class="pemesan d-flex justify-content-between">
        <div class="label-pemesan" style="margin-top:12px">
            <p style="font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;margin:0px;">Pemesan</p>
        </div>
        <div class="input-pemesan">
            <div class="form-group" style="margin:0px;">
                <input style="margin:0px; width:169px; height:37px; background-color: white;font-size: 14px; border:none" name="customer_name" type="text" class="form-control" id="pemesan" placeholder="Pesanan atas nama...">
            </div>
        </div>
    </div>
    <div class="radio-pemesan d-flex gap-3" style="margin-top:18px">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="service_type" id="chkYes" value="Dine In">
          <label for="chkYes" style="font-size:14px" class="form-check-label">
            Dine In
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="service_type" id="chkNo" value="Take Away">
          <label for="chkNo" style="font-size:14px" class="form-check-label">
            Take Away
          </label>
        </div>
    </div>
    <div class="no-meja d-flex justify-content-between" style="margin-top:18px">
        <div class="label-pemesan" style="margin-top:12px">
            <p style="font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;margin:0px;">No Meja</p>
    </div>
        <div class="no-meja">
            <div class="form-group" style="margin:0px;">
                <input style="margin:0px; width:169px; height:37px; background-color: white;font-size: 14px; border:none" name="table_number" type="number" class="form-control" id="tableNumber" placeholder="Nomor Meja...">
            </div>
        </div>
    </div>
</div>

<div class="button-next d-flex justify-content-center">
<button type="submit" class="btn btn-success">Next</button>
</div>
</form>

</div>
</body>
</html>