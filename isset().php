<?php
// isset() = returns True if a variable is declared and not null

$useraname = "Hanzla";

echo isset($useraname);

echo "<br>";
// 1 means true and 0 means false or null varibale
   
  $lastname =null;

if (isset($lastname)){

    echo "This varibale is set";
}

else {
    echo "This varibale is not set";
}
?>