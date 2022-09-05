<?php
function cot($src,$title,$price,$id){

    $ca = "

    <div class=\"item\" style=\"height: 21rem; border-radius:8px;\">
    <img src=\"$src\"  style=\"height: 13rem;border-top-right-radius:8px; border-top-left-radius:8px;\" alt=\"$title\">
    <h4 class=\"item\"style=\"text-align: center;\">$title</h4> 
    <h5 class=\"item\" style=\"text-align: center;\">$price EGP<br>  
    <form action=\"index.php\" method = \"POST\">
    <input type='hidden' name='product_id' value='$id'><input type='hidden' name='name' value='$title'>
    <button type=\"submit\" class=\"btn btn-outline-primary my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
    </h5></form>
    </div>";
    echo $ca;
}
?>