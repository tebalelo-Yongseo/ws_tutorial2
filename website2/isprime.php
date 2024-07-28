<?php
function isPrime($num)
{
   /* if($num)
    {
        return false;
    }*/
    for($i= 2; $i <= sqrt ($num); $i++)
    {
        //sreturn false;
        if($num % $i == 0)
        {
            return false;
        }
    }
    return true;
}

$numbers = array(2,3,4,5,6,7,8,9,10);

foreach ($numbers as $num) {
    if (isPrime($num)) {
        echo "$num is prime.<br>";
    } else {
        echo "$num is not prime.<br>";}

      
}
?>