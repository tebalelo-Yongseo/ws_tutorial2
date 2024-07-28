<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<form action="functions.php" method="post"> 
    <label>x:</label>
    <input type="text" name="x">
    <label>y:</label>
    <input type="text" name="y">
    <label>z:</label>
    <input type="text" name="z">
    <input type="submit" value="total">
    </form>-->

<!-- activity : radius-->
 <form action="functions.php" method="post">
<label>radius:</label>
<input type= "text" name="radius">
<input type= "submit" value="calculate">
</form>



</body>
</html>

<?php
//$x = $_POST["x"];
//$y = $_POST["y"];
//$z = $_POST["z"];

//$total=null;

//abs() = Returns the absolute (positive) value of a number
//$total = abs($x); 

//round() = Rounds a floating-point number
//$total = round($x);

//floor() = Rounds a number down to the nearest integer
//$total = floor($x);

//ceil() = Rounds a number up to the nearest integer
//$total = ceil($x);

//pow() = Returns x raised to the power of y
//$total = pow($x,$y);

//sqrt = Returns the square root of a number
//$total = sqrt($x);

//max() = Returns the highest value in an array, 
//        or the highest value of several specified values
//$total = max($x, $y, $z);

//min() = Returns the lowest value in an array,
//         or the lowest value of several specified values
//$total = min($x, $y, $z);

//pi() = Returns the value of PI
//$total = pi();

//rand() = Generates a random integer
//$total =  rand();
//$total =  rand(1, 6); //generating number

//echo $total;

//calculating circumference
$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2); // round to 2 decimal place

//calculate the area 
$area = pi() * pow($radius, 2);
$area = round($area, 2);

//calculate volume
$volume = 4/3 * pi() * pow($radiu, 3);
$volume = round($volume, 2);

echo "circumference = {$circumference}cm <br>";
echo "area = {$area}cm^2 <br>";
echo "volume = {$volume}cm^3 <br>";

?>