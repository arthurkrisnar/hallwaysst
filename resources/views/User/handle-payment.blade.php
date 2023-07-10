<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SET_YOUR_CLIENT_KEY_HERE"></script>
    <title>Metode Pembayaran</title>
</head>
<body>
<form action="/order/{{$id_cart_integer}}/cart/{{$id_tenant}}/pembayaran/update" method="post">
@csrf
<button id="pay" type="submit" style="display: none;">Hidden Button</button>
</form>
</body>
<script type="text/javascript">
var payButton = document.getElementById('pay');
window.onload = function() {
  window.snap.pay('{{$snapToken}}', {
    onSuccess: function(result) {
      payButton.click();
      window.location.replace = "/pesanan/{{$id_cart_integer}}";
      console.log(result);
    },
    onPending: function(result) {
      alert("Waiting for your payment!");
      console.log(result);
    },
    onError: function(result) {
      alert("Payment failed!");
      console.log(result);
    },
    onClose: function() {
      // Add your own implementation here
      window.location.href = "/order/{{$id_cart_integer}}/cart/{{$id_tenant}}/pembayaran";
    }
  });
};
</script>
</html>
