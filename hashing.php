<?php

// hashing = transforming sensitive data(paasword) into letters, numbers or symbols
;

$password = "hanzla595877";

$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;

?>