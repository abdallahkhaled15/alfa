<?php
include ("comp.php");
include ("head.php");
include ("foot.php");
include ("conn.php");

function cb ($im, $nam){
    $cb = "<div class=\"card\" style=\"width: 18rem;\">
    <img class=\"card-img-top\" src=\" $im\">
    <div class=\"card-body\">
      <h5 class=\"card-title\"style=\"text-align: center;\">$nam</h5>
    </div>
  </div>";
  echo $cb;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Brands of alfa group</title>
    <?php echo $footstyle; ?>
</head>
<body>
    <?php cb("uploads/nike.png","nike"); ?>
<?php echo $foot; ?>
</body>
</html>