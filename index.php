<?php
include ("comp.php");
include ("head.php");
include ("foot.php");
include ("conn.php");
include ("owl.php");
if (isset($_POST['submit'])) {
 if (isset($_SESSION['cart'])) {
   $item_array_id = array_column($_SESSION['cart'], "product_id");
   $item_array_name = array_column($_SESSION['cart'], "name");
    if (in_array($_POST['product_id'],$item_array_id)) {
        echo "<script>alert('Product is already added in the cart..!')</script>";

    }else {
        $count = count($_SESSION['cart']);
        $item_array = array(
        'id' => $_POST['product_id'],
        'name' => $_POST['name']);
        $_SESSION['cart'][$count] = $item_array;
    }
 }else {
    $item_array = array(
        'id' => $_POST['product_id'],
        'name' => $_POST['name']);
        $_SESSION['cart'][0] = $item_array;
 }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <?php echo $footstyle; ?>
</head>

<body>
    <div class="text">

        <a href="promotion.php"  class="h33">Promotion</a>
    </div>
    <div class="owl-carousel oc owl-theme " style="color: black;">
        <?php
$sql = "Select * From allgategories where dis='promotion'";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
  cot($im,$nam,$pric,$id);}}?></div><br>
<div class="text">
        
    <a href="newarrival.php"  class="h33">New Arrival</a>
        </div>
    <div class="owl-carousel oc owl-theme " style="color: black;">
        <?php
$sql = "Select * From allgategories where dis='newarrival'";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
  cot($im,$nam,$pric,$id);}}?></div><br>
<div class="text">
        
    <a href="officetool.php"  class="h33">office Tool</a>
        </div>
    <div class="owl-carousel oc owl-theme" style="color: black;">
        <?php
$sql = "Select * From allgategories where dis='officetool'";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
  cot($im,$nam,$pric,$id);}}?></div><br>
<div class="text">
        
    <a href="art.php"  class="h33">Art</a>
        </div>

    <div class="owl-carousel oc owl-theme " style="color: black;">
        <?php
$sql = "Select * From allgategories where dis='art'";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
  cot($im,$nam,$pric,$id);}}?></div><br>
<div class="text">
        
    <a href="schoolpr.php"  class="h33">School Products</a>
        </div>
    <div class="owl-carousel oc owl-theme " style="color: black;">
        <?php
$sql = "Select * From allgategories where dis='schoolproducts'";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
  cot($im,$nam,$pric,$id);}}?></div><br>
<div class="text">
        
    <a href="engineering.php"  class="h33">Engineering</a>
        </div>
    <div class="owl-carousel oc owl-theme " style="color: black;">
        <?php
$sql = "Select * From allgategories where dis='engenering'";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
  cot($im,$nam,$pric,$id);}}?></div><br>
<div class="text">
    
    <a href="gifts.php"  class="h33">Gifts</a>
    </div>
    <div class="owl-carousel oc owl-theme " style="color: black;">
        <?php
$sql = "Select * From allgategories where dis='gifts'";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
  cot($im,$nam,$pric,$id);}}?></div><br>
<div class="text">
        
    <a href="paper.php"  class="h33">Paper</a>
        </div>
    <div class="owl-carousel oc owl-theme " style="color: black;">
        <?php
$sql = "Select * From allgategories where dis='paper'";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
  cot($im,$nam,$pric,$id);}}?></div><br>
  <div class="text">
        
      <a href="healthandpersonalcare.php"  class="h33">Health and Personal Care</a>
        </div>
    <div class="owl-carousel oc owl-theme " style="color: black;">
        <?php
$sql = "Select * From allgategories where dis='healthandpersonalcare'";
 $result = mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];  $nam = $row['name'];$im = $row['image'];$pric =  $row['price'];
  cot($im,$nam,$pric,$id);}}?></div><br>
    <?php echo $foot;  ?>
    <script src="js/owl.carousel.min.js"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        rtl: false,
        loop: false,
        margin: 10,
        nav: true,
        index: 2,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    </script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>

</html>