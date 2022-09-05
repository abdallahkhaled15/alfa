<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
       include ("conn.php");
       mysqli_query($conn,"set character_set_server='utf8'");
      


 $first = $_POST['first'];
 $last = $_POST['last'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $addrress = $_POST['location'];
 $name = $first.' '.$last;
 $counnt  = count($_SESSION['cart']);
 
 $sqlll = "INSERT INTO `order`
  (`id`, `name`, `tlprice`, `email`, `phonenumber`, `location`, `product_1_id`, `product_1_num`, `product_2_id`, `product_2_name`, `product_3_id`, `product_3_name`, `product_4_id`, `product_4_name`, `product_5_id`, `product_5_name`, `product_6_id`, `product_6_name`, `product_7_id`, `product_7_name`, `product_8_id`, `product_8_name`, `product_9_id`, `product_9_name`, `product_10_id`, `product_10_name`, `product_11_id`, `product_11_name`, `product_12_id`, `product_12_name`, `product_13_id`, `product_13_name`, `product_14_id`, `product_14_name`, `product_15_id`, `product_15_name`, `product_16_id`, `product_16_name`, `product_17_id`, `product_17_name`, `product_18_id`, `product_18_name`, `product_19_id`, `product_19_name`, `product_20_id`, `product_20_name`) 
 VALUES (NULL, '$name',  '$t', '$email','$phone', '$addrress', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
 if (mysqli_query($conn,$sqlll)) {
       session_start();
       session_unset();
       session_destroy();   
       
       echo"<script>alert('your order has been sent');</script>";

       function Fun(){   header('location: index.php'); }
       Fun();

 }
       else {
              echo"<script>alert('there is something wrong please try again')</script>";
               header('location: index.php');
 }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>

</head>

<body>
</body>

</html>