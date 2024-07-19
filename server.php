<?php

// $_SERVER =SGB that contains headers,paths,script locations
//  the enteries in this array are creaeted by the web server
// show nealry everything you need to know about current web page

foreach($_SERVER as $key => $value){
    echo "{$key} = {$value} <br>";
}



// to check request method
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     echo "POST <br>";
// }
// if()

?>