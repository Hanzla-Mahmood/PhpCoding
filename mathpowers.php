<?php
  $x = $_POST['x'];
  $y = $_POST['y'];

  $total = null;

    $total = pow($x,$y);
    echo $total;
    echo "<hr>";
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Mathpowers.php" method ="post">
     <label >x:</label>
     <input type="text" name="x">
     <label >y:</label>
     <input type="text" name="y">
     <input type="submit" value="total">
    </form>
</body>
</html>