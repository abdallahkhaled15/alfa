<?php

if (true) {

       include ("conn.php");
       session_start();
      
       $first = $_POST['first'];
       $last = $_POST['last'];
       $phone = $_POST['phone'];
       $email = $_POST['email'];
       $t = $_POST['tl'];
       $addrress = $_POST['location'];
       $name = $first." ".$last;
       $cart=$_SESSION['cart'];
       $orderidall=array();
       $i=0;
       foreach($cart as $value) {
            
            $orderidall[$i]=$value;
          $i++;
        }
        $realides = implode(',',$orderidall);
        echo $realides+'dd'+$name+$addrress+$t+$cart;

 $sql = "INSERT INTO `order` (`id`, `name`, `tlprice`, `email`, `phonenumber`, `location`, `product_id`, `product_num`) VALUES
  (NULL, '$name', '$t', '$email','$phone', '$addrress',' $realides','')";
 mysqli_query($conn,$sql)or exit(mysqli_error($conn)); 
       session_unset();
       session_destroy();   
       
       echo"<script>alert('your order has been sent');</script>";

      //  header('location: index.php'); 
      
}else {
      echo'error';
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