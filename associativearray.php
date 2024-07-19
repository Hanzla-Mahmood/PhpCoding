<?php
// associative array = An array made of key=>value pairs

$capitals = array("Pakistan"=>"Islamabad",
                   "Japan"=>"Tokyo",
                   "South Korea"=>"Seoul",
                   "USA"=>"Washington D.C.");
                  
                  
                //    echo  $capitals["Pakistan"];
                //    echo  $capitals["Japan"];
                //    echo  $capitals["South Korea"];
                //    echo  $capitals["USA"];
                   
       foreach($capitals as $key => $value){
          echo"{$key} = {$value} <br>";
       }


?>