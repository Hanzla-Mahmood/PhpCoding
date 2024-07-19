<?php
  if(isset($_POST["login"])){

    // $username=$_POST["username"];

    $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

    echo "Hello {$username} <br>";

    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    
    echo "age is {$age}<br>";

    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
    
    echo "Your email  is {$email}";

  }

?>

  <!-- <script>            for testing sanitization and validation 
alert("You have a VIRUS!");
  </script> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitizeandvalidate.php" method="post">
      username: <br>
      <input type="text"  name="username"> <br>
      age: <br>
      <input type="text"  name="age"> <br>
      email: <br>
      <input type="text"  name="email"> <br>
      <input type="submit"  name="login" value="login"> <br>

    </form>
</body>
</html>