<?php

function coot($src, $title, $price,$id){
$car = "
<div class=\"card bg-outline-secondry\" style=\" margin:0 10px\">
<div class=\"card shadow\">
<div>
<img src=\"$src\" alt=\"Image1\" class=\"img-fluid card-img-top\">
</div>
<div class=\"card-body\">
<h5 class=\"card-title\" style=\"text-align: centre;\">$title</h5>
<span class=\"price\"><B><h4>$price EGP</h4></B></span>
</h5>    
<form action=\"index.php\" method = \"POST\">
<button type=\"submit\"class=\"btn btn-outline-primary\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
<input type='hidden' name='product_id' value='$id'><input type='hidden' name='name' value='$title'></form>
</div>
</div>
</div>";
echo $car;
}
?>