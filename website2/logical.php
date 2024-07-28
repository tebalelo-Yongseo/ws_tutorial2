<?php
//logical operators =  combine conditional statement 
//      if(condition1 && condition2)

// && (AND)=  true if both conditions are true
// || (OR)= true if at least one condition  is true
// ! (NOT)= true if false. false if true

//example: && (AND) Logical operator
/**$temp = 25;

if($temp >= 0 && $temp <=30)
{
  echo "the weather is good.";
}

else
{
  echo "the weather is bad.";
}
**/

//example: || (OR) Logical operator
/**$temp = 25;

if($temp < 0 || $temp > 30)
{
  echo "the weather is bad.";
}

else
{
  echo "the weather is good.";
}
**/

//example: ! (NOT) Logical operator
/**$temp = 15;
$cloudy = true;

if($temp < 0 || $temp > 30)
{
  echo "the weather is bad.<br>";
}

else
{
  echo "the weather is good.<br>";
}

if(!$cloudy)
{
    echo "it's cloudy";
}

else
{
    echo "it's sunny";
}
**/

//example: voting
/**$age = 23;
$citizen = true;

if($age >= 18 && $citizen)     //if(!$age >=18 || !$citizen)
{                             //{
   echo "you can vote";      //   echo "you cannot vote";
}                            // }

else                          // else
{                             // {
  echo "you cannot vote";     //  echo "you can vote";
}                             // }
**/

//example: movie ticket
 $child = false;
 $senior  = false;
 $ticket = null;

 if($child  || $senior)
 {
   $ticket = 10;
 }
else
{
    $ticket = 15;
}

   echo "the ticket price is R{$ticket}";  

?>