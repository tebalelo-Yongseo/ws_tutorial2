<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- <form action="index2.php" method="get">--> 
   <!-- <form action="index2.php" method="post">   
    <label>username</label><br>
    <input type="text" name="username"><br>
    <label>password</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value= "log in">-->


    <form action="index2.php" method="post">
     <label>quantity: </label>
    <input type="text" name="quantity">
    <input type="submit"  value="total">


</form>
</body>
</html>

<?php
//$_GET, $POST = special variable used to collect data from an HTML form
//               data is sent to the file in the action attribute of <form>
//               <form action="some_file.php" method="get">


//$_GET = Data is appended to the url
//        NOT SECURE 
//        char limit
//        Bookmark is possible w/ values
//        GET request can be cached
//        Better for a search page 

// $_POST = Data is packaged inside the body of the HTML request
//          MORE SECURE 
//          No data limit 
//          Cannot requests are not cahed 
//          request are not cached
//          Better for submtting credentials

//echo $_GET["username"] ."<br>"; // . "<br> is the line break
//echo "{$_GET["password"]} <br>";// line breaks


//echo $_POST["username"] ."<br>"; // . "<br> is the line break
//echo "{$_POST["password"]} <br>";// line breaks

$iteam ="pizza";
$price = 5.99;
$quantity = $_POST["quantity"]; //local variable
$total = null;
$total = $quantity * $price;

echo "have ordered {$quantity} x {$item}/s <br>";
echo "your total is:\${$total}";


?>