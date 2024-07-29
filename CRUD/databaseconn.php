<?php

$servername = "localhost";
$username = "root";
$password="";

try{
    $conn = mysqli_connect($servername, $username, $password);
}


catch(mysqli_sql_exception){
    echo "Could not connect <br>";
}

if ($conn){
    echo "You are connected <br>";
}

?>