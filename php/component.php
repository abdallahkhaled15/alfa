<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "
<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
<form action=\"index.php\" method=\"post\">
<div class=\"card shadow\">
<div>
<img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
</div>
<div class=\"card-body\">
<h5 class=\"card-title\">$productname</h5>
<h6>
<i class=\"fas fa-star\"></i>
<i class=\"fas fa-star\"></i>
<i class=\"fas fa-star\"></i>
<i class=\"fas fa-star\"></i>
<i class=\"far fa-star\"></i>
</h6>
<p class=\"card-text\">
Some quick example text to build on the card.
</p>
<h5>
<small><s class=\"text-secondary\">$519</s></small>
<span class=\"price\">$$productprice</span>
</h5>
<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
<input type='hidden' name='product_id' value='$productid'>
</div>
</div>
</form>
</div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $val = 1;
    $element = "

    <?php  ?>
  <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
<div class=\"border rounded\">
<div class=\"row bg-white\">
<div class=\"col-md-3 pl-0\">
<img src=$productimg alt=\"Image1\" class=\"img-fluid\">
</div>
<div class=\"col-md-5\">
<h5 class=\"pt-2\">$productname</h5>
<h5 class=\"pt-2\">$$productprice</h5>
<button type=\"submit\" class=\"btn btn-danger  mx-2\" name=\"remove\"style=\"margin-left:500px;\">Remove</button>
</div>
<div class=\"col-md-2 py-4\">
<div>

<div class=\"qty\">
<span class=\"minus bg-dark\">-</span>
<input type=\"number\" class=\"count\" name=\"qty\" value=\"1\">
<span class=\"plus bg-dark\">+</span>
</div></div>
</div>
</div>
</div>
</form>";
    echo  $element;
}

















