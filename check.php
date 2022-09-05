<?php
$no = 0;
    if (isset($_POST['submit'])){ $no = 0;} else {
      header('location: index.php');
    }
include ("comp.php");
include ("headwtout.php");
include ("foot.php");
include ("conn.php");
$s = $_POST['tl'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>check out page</title>
    <?php echo $footstyle; ?>
</head>
<body>
<form action="lan.php" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text"  name="first" required placeholder ="First Name" class="form-control" />
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="last" required placeholder="Last Name"class="form-control" />
      </div>
    </div>
  </div>
<input type="hidden" name="total"value="$total">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email"  name="email" required class="form-control"placeholder="Email Adress" />
  </div>
  <div class="form-outline mb-4">
    <input type="text"  name="phone" required class="form-control"placeholder="Phone Number" />
  </div>
  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="location"  name="location" required class="form-control"placeholder="location" />
  </div>

  <!-- Checkbox -->

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">order now</button>
  <input type="hidden" name="tl" value="$s">

  <!-- Register buttons -->
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php echo $foot; ?>
</body>

</html>



