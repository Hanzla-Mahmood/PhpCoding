<?php
// simple way
// echo $_GET["username"];  

// echo $_GET["password"];

// to add break tag in oneline
echo "{$_GET["username"]} <br>"; 
echo "{$_GET["password"]} <br>"; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="getpost_login.php" method="get">
<body>
     <label >username:</label>  
     <input type="text" name ="username">
     <label >password:</label>
     <input type="password" name="password">
     <input type="submit" value="login">
     </form>
</body>
</html>