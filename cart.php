<?php
include ("comp.php");
include ("headwtout.php");
include ("foot.php");
include ("conn.php");

require_once ("php/component.php");


if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>
  
  
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Shopping Cart</title>
    <?php echo $footstyle; ?>
<script>
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
<style>.qty .count {
    color: #000;
    display: inline-block;
    font-size: 25px;
    font-weight: 500;
    line-height: 30px;
    min-width: 35px;
    text-align: center;
 
 }
 .qty .plus {
    cursor: pointer;
    display: inline-block;
    color: white;
    width: 20px;
    height: 20px;
    font: 20px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    }
 .qty .minus {
    cursor: pointer;
    display: inline-block;
    color: white;
    width: 20px;
    height: 20px;
    font: 20px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-clip: padding-box;
 }
 div {
    text-align: center;
 }
 .minus:hover{
    background-color: #717fe0 !important;
 }
 .plus:hover{
    background-color: #717fe0 !important;
 }
 /*Prevent text selection*/
 span{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
 }
 input{  
    border: 0;
    width: 2%;
 }
 nput::-webkit-outer-spin-button,
 input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
 }
 input:disabled{
    background-color:white;
 }  </style>
</head>
<body>
<div class="container-fluid">
 <div class="row px-5">
 <div class="col-md-7">
 <div class="shopping-cart">
 <h6>My Cart</h6>
 <hr>
 <?php $val = 0; ?>
 <?php
     $total = 0;
     if (isset($_SESSION['cart'])){
     $product_id = array_column($_SESSION['cart'], 'product_id');
    $ssql = "SELECT * FROM allgategories";

    $reesult = mysqli_query($conn, $ssql);

    if(mysqli_num_rows($reesult) > 0){
        function fu(){
             echo '<button class="btn btn-outline-success bt" type="submit" name= "submit">checkout</button>';
        }
        while($row = mysqli_fetch_assoc($reesult)) {
            foreach ($product_id as $id){
              
            if ($row['id'] == $id){
            cartElement($row['image'], $row['name'],$row['price'], $row['id']);
    
        $total = $total + (int)$row['price'];}}}
        
    }    else{
    return $reesult;
    echo 'hey';}}else{echo "<h5>Cart is Empty</h5>";}
    ?>

</div>
</div>
<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

<div class="pt-4">
<h6>PRICE DETAILS</h6>
<hr>
<div class="row price-details">
<div class="col-md-6">
 <?php
    if (isset($_SESSION['cart'])){ $count  = count($_SESSION['cart']); 
    echo "<h6>Price ($count items)</h6>";}
    else{echo "<h6>Price (0 items)</h6>";}
 ?>
<h6>Delivery Charges</h6>
<hr>
<h6>Amount Payable</h6>
</div>
<div class="col-md-6">
<br>
<form action= "check.php" method = "POST">

<h6>$<?php echo $total; ?></h6>
<h6 class="text-success">FREE</h6>
<hr>
<h6>$<?php 
echo $total;
?></h6>
<hr>
<input type="hidden" name="tl" value="$total">
<?php    if (isset($_SESSION['cart'])){ $counnt  = count($_SESSION['cart']); if($counnt > 0 ){fu(); }}?>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
    <?php echo $foot; ?>
