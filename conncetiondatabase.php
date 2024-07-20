<?php
echo "Connecting with database <br>";

//Ways to connect with MySQL database :

// MySQLi extension (the "i" stands for improved)
// PDO (PHP Data Objects)


$servername = "localhost";
$username = "root";
$password = "";


// Create a connection 

$conn = mysqli_connect($servername,$username,$password);

// Die if conncetion was not successful

if (!$conn){

    die("Sorry we failed to connect ".mysqli_connect_error());
}


echo "Connetion was successful";




?>