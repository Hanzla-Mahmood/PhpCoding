<?php
   
   include("databaseconn.php");

   $sql = "USE PHP_CRUD";
   mysqli_query($conn,$sql);
   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <hr>
    <form action="index.php" method="post">
     Id: <input type="text" name= "Id"/> 
     Name: <input type="text" name ="name" /> 

     <input type="submit" name ="Database" value= "createDatabase">
     <input type="submit" name ="createTable" value= "createTable">
     <input type="submit" name ="Insert" value= "Insert">
     <input type="submit" name ="Read" value= "Read">
     <input type="submit" name ="Update" value= "Update">
     <input type="submit" name ="Delete" value= "Delete">

    </form>
</body>
</html>
<?php

$Id =$_POST['Id'];
$name = $_POST['name'];


if($_SERVER["REQUEST_METHOD"] == "POST"){
   

    if(isset($_POST["Database"])){
        $sql = "DROP DATABASE IF EXISTS PHP_CRUD";
        mysqli_query($conn,$sql);

        $sql = "CREATE DATABASE PHP_CRUD";
        mysqli_query($conn,$sql);
        echo "Database created successfully<br>";

    }
    
    if(isset($_POST["createTable"])){
      
        $sql = "DROP TABLE IF EXISTS crud";
        mysqli_query($conn,$sql);


        $sql ="CREATE TABLE crud (Id INT NOT NULL , name VARCHAR(40) NOT NULL , PRIMARY KEY (Id))";
        mysqli_query($conn,$sql);
        echo "Table created successfully<br>";
    }
    
    if(isset($_POST["Insert"])){
     
         try{
        $sql ="INSERT INTO crud (Id, name) VALUES ('$Id', '$name');";
        mysqli_query($conn,$sql);
        echo "Inserted successfully<br>";
         }

            catch(mysqli_sql_exception){
                echo " <br>";
            }
         }
    }

    if(isset($_POST["Read"])){

        $sql = "SELECT Id,  name FROM crud WHERE  Id = '$Id'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Roll No: " . $row["Id"] . "<br>";
            echo "Name: " . $row["name"] . "<br>";
     
        }
    }

    if(isset($_POST['Update'])){

     $sql = "UPDATE crud set  name ='$name' where Id ='$Id'";
     mysqli_query($conn,$sql);
     echo "Updated successfully<br>";


    }
    
    if(isset($_POST['Delete'])){

    $sql = "DELETE FROM crud WHERE Id = '$Id'";
    mysqli_query($conn, $sql);
    echo "Deleted successfully<br>";

    }


