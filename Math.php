<?php
  $x = $_POST['x'];

  $total = null;
//   $total = abs($x);  // for absolute value
//   $total = round($x) ;  // for round off
//   $total = floor($x);
//   $total = ceil($x);

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
    <form action="Math.php" method ="post">
     <label >x:</label>
     <input type="text" name="x">
     <input type="submit" value="total">
    </form>
</body>
</html>