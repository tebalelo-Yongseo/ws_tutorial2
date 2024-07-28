
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="forloop.php"  method= "post">
    <lable>Enter a number to count to: </lable>
    <input type = "text" name ="counter">
    <input type ="submit" value ="start">
</body>
</html>
<?php

     //for loop j= repeat some code a certain #(amount) of times
/*
for($i = 0;$i < 5; $i ++ )
{
    echo "hello .<br>";
}
*/

//example
/*for($i = 0;$i < 5; $i ++ )
{
    echo $i."<br>";
}
   */  

//exampless
   $counter = $_POST["counter"];

   for($i = 0;$i<=$counter;$i++ )
   {
     echo $i."<br>";
   }
?>