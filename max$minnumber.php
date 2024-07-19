<?php
  $x = $_POST['x'];
  $y = $_POST['y'];
  $z = $_POST['z'];

  $total = null;
    
//   $total = max($x,$y,$z);  // for max number 
  $total = min($x,$y,$z);   // for min number 
  
//   $total = pi();  // for pi value

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
    <form action="max$minnumber.php" method ="post">
     <label >x:</label>
     <input type="text" name="x">
     <label >y:</label>
     <input type="text" name="y">
     <label >z:</label>
     <input type="text" name="z">
     <input type="submit" value="total">
    </form>
</body>
</html>