<?php 
include "esewa_controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <title>E-Sewa</title>
</head>
<body>

<div class="card ms-2 mt-2" style="width: 18rem;">
    <div class="text-center" style="border-bottom: 2px solid whitesmoke;">
        <img src="a.png" alt="belt" class="cart-img w-75">
    </div>
    <div class="card-body">
        <div class="cart-title fw-bold">WWE Universal Championship Title</div>
        <div class="cart-text"><span> The WWE Universal Championship is a world heavyweight championship created and promoted by the American professional wrestling promotion WWE, representing the SmackDown brand division.</span></div>
    </div>
    <div class="text-center mb-2">
    <form action="<?php echo $ePay_url ?>" method="POST">
        <input value="100" name="tAmt" type="hidden">
        <input value="90" name="amt" type="hidden">
        <input value="5" name="txAmt" type="hidden">
        <input value="2" name="psc" type="hidden">
        <input value="3" name="pdc" type="hidden">
        <input value="<?php echo $merchant_code ?>" name="scd" type="hidden">
        <input value="<?php echo $pid ?>" name="pid" type="hidden">
        <input value=<?php echo $successUrl ?> type="hidden" name="su">
        <input value=<?php echo $failedUrl ?> type="hidden" name="fu">
        <input value="Purchase" type="submit" class="btn btn-primary w-50">
    </form>
    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
<?php
//  we need to go  website to get esewa developer tools 
   //  https://developer.esewa.com.np/#/epay
 ?>