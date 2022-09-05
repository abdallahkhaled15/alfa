<?php
session_start();


if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            if(in_array($_POST['name'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            }
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id'],
                'name' => $_POST['name']
        );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{ 

        $item_array = array(
                'product_id' => $_POST['product_id'],
                'name' => $_POST['name']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>
<style>
body {
    font-family: "Lato", sans-serif;
    font-family: Arial, Helvetica, sans-serif;

}

.bt {
    height: 6vh;
}

.imo {
    height: 15vh;
    padding: 0%;
    margin: 0%;
    margin-left: 80px;

}

.is {
    width: 400px;
}

.sb {
    margin-left: 100px;
    align-items: center;
    align-content: center;
    align-self: center;
}

.home {
    margin-left: 0px;
    margin-top: 15px;
    height: 9vh;
    width: 100px;
    align-items: center;
    align-content: center;
    align-self: center;
    color: white;
}

.affix {
    top: 0;
    width: 100%;
    z-index: 9999 !important;
}

.affix+.container-fluid {
    padding-top: 70px;
}

.sup {
    margin-left: 200px;
    color: black;

}

.col {

    width: 200px;
}

.containar {

    margin-left: 100px;
    margin-right: 200px;
}

#alf {
    color: black;
}

.con {

    width: 100%;
}

.navbara {
    background-color: #254877;
    overflow: hidden;
    width: 100%;
    top: 0px;
    /* Hide the navbar 50 px outside of the top view */
    transition: top 0.3s;
    position: fixed;
    /* Make it stick/fixed */
    text-align: center;
    z-index: 2;

}

.navbar a {
    /*float: left;*/
    padding: 12px;
    color: #254877;
    display: inline-block;
    text-decoration: teal;
    font-size: 18px;
    text-align: center;
}

.navbar a:hover {
    background-color: #000;
}

.oc {
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    position: relative;
    background-color: white !important;

}

.item {
    background-color: #97969D !important;
    align-items: center;
}

.h3 {
    align-items: end;
    margin-left: 400px;
    color: black;
}

.active {
    background-color: #254877;
}

@media screen and (max-width: 500px) {
    .navbar a {
        float: none;
    }
}

.b {
    margin-top: 100px;
}

.carousel {
    width: 98%;
    margin-top: 10px;
    margin-left: 15px;
}

.ci {
    height: 500px;
    width: 100%;
}
.botn{
    margin-left:50px;
}
</style>

<body>
<nav class="navbar navbs navbar-expand-lg navbar-light bg-light">
  
  <div class="navbar-brand">
 
     <div class="nav-item">
     
         <button class="nav-item" type="button" style="border:none;Background:none">
         <a class="nav-link active home btn-outline-success" aria-current="page" href="index.php"
                                       style="color: white;">Home</a>
         </button>
     </div>
   </div>
  </div>
  
 <div class="navbar-brand">
 
  <div class="nav-item">
 
     <form class="d-flex sb" action="search.php" method="GET">
                           <button class="btn btn-outline-success bt" type="submit">Search</button>
                           <input class="form-control me-2 is" name="se" type="search" placeholder="Search"
                               aria-label="Search">
                       </form>
  </div>
 </div>
 <div class="navbar-brand">
  <div class="nav-item">
 
     <a href="cart.php" class="primary" style="background-color:white ; height: 3rem; border-radius:8px">
                                <h6 style="margin-top:5px;">
                                    <i class="fas fa-shopping-cart"></i> Cart
                                    <?php if (isset($_SESSION['cart'])){$count = count($_SESSION['cart']);echo "<span id=\"cart_count\" >$count</span>";}else{echo "<span id=\"cart_count\" style=\"color:black;\">0</span>";}?>
                                </h6>
                            </a>
  </div>
 </div>
 <div class="navbar-brand">
       
  <div class="nav-item">
     <a href="index.php">
         <img src="uploads/logo.jpg" class="imo " alt="alfa group logo">
     </a>
 
  </div>
 </div>
 
  
  
 </nav>
    <nav class="navbar  b navbar-expand-lg navbar-light navbar-dark bg-dark">
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="allgategories.php">All Gategories</a>
                <a class="nav-item nav-link" href="officetool.php">Office Tools</a>
                <a class="nav-item nav-link" href="art.php">Art</a>
                <a class="nav-item nav-link" href="schoolpr.php">School Products</a>
                <a class="nav-item nav-link" href="engineering.php">Engineering</a>
                <a class="nav-item nav-link" href="gifts.php">Gifts</a>
                <a class="nav-item nav-link" href="paper.php">Paper</a>
                <a class="nav-item nav-link" href="promotion.php">Promotion</a>
                <a class="nav-item nav-link" href="newarrival.php">New Arrivals</a>
                <a class="nav-item nav-link" href="healthandpersonalcare.php">Health and personal care</a>
            </div>
        </div>
    </nav>

    <br>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>

</html>