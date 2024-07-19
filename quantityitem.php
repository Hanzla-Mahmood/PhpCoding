<?php
  $item ="chapati";
  $price = 20;
  $quantity = $_POST["quantity"];
  $total = null;

  $total= $quantity * $price;
   
  echo "You have ordered {$quantity} x {$item} <br>";

  echo "your total is Rs:{$total}";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="quantityitem.php" method="post">
      <label for> quantity:</label><br>
      <input type="text" name="quantity">
      <input type="submit" value="total">
    </form>

</body>
</html>