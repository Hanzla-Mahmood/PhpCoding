<?php

$username = "Bro Code";

// $username = strtolower($username);
// $username = strtoupper($username);
// $username = trim($username);// will remove extra spaces 
$username = str_pad($username,20,"H");
$username = strrev($username);
$username = str_shuffle($username);


$count = strlen($username);//length 
$count = strpos($username,"r");

echo $count;


echo $username;




?>