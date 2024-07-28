<?php
//echo"I like pizza<br>";
//echo"its read goods";
//This is a comment
/*this
is
a
multiline
comment
*/
// string variable
$name ="teba<br>";
$food = "pizza<br>";
$email ="tebaleloma@gmail.com<br>";

//integer variable
$age = 21;    
$users =2; 
$quantity =3;

//float 
$gpa = 2.5; 
$price = 4.99;
$tax_rate = 5.1;

//boolean
$employed = true;
$online = false;
$for_sale = true;

$total = null;
$total = $quantity * $price;


//echo $name;
echo "hello {$name}";
echo "you like {$food}";
echo "your email is {$email}";

echo "you are {$age} years old<br>";
echo "there are {$users} online <br>";
echo "you would like to buy {$quantity} item<br>";

echo "your gpa is: {$gpa}<br>";
echo "your pizza is \${$price} <br>";
echo "the sales tax rate is: {$tax_rate}%<br>";

echo "online status: {$online}<br>";


echo "you have ordered {$quantity} x {$food}s";
echo "your total is: \${$total}";



/*
<!DOTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compat">
        <meta name="viewport"content>
        <tittle>Document</tittle>
    </head>
    <body>
        <button>order pizza</button>
    </body>
</html>
*/
?>