<?php
include "esewa_controller.php";
 echo "<h1>Payment Success </h1>";

 $oid = $_GET['oid'];
 $amt = $_GET['amt'];
 $refId = $_GET['fefId'];

 echo '<br>';
 echo "Order Id :".$oid . '<br>';
 echo "Amount :".$amt . '<br>';
 echo "Refrence ID :".$refId . '<br>';


//  verification
$data =[
    'amt'=> $actualAmount,
    'rid'=> $refId,
    'pid'=> $pid,
    'scd'=> $merchant_code
];

    $curl = curl_init($fraudCheckUrl);// taken from esewa_controller.php
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
  if(strpos($response,"Success")!==false){
    header('Location: abc.php');
  }
  else{
    header('Location: cde.php');
  }
    curl_close($curl);
 ?>