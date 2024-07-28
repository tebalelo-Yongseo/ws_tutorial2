<?php

//associative array = an array made of key=> value pairs

// countries => capital
// id => username
// item => price

$capitals = array("USA"=> "D.C",
                  "Japan"=> "Kyoto",
                "South Korea"=> "seoul","
                 india"=> "ND");



                 $capitals["USA"] = "LV"; // Changing the capital
                 $capitals["china"] = "bj"; // added new capital
                 //echo $capitals["USA"];
                 //print all use:
                 foreach($capitals as $key => $value)
                 {
                 echo "{$key} {$value} . <br>";
                 }
?>