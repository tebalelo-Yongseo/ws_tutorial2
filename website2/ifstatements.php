<?php
//if statement = if some condition is true, can do something
//               if condition is false, don't do it


//examples

//if statement
//$age = 14;
//$age = 23;
//$age = 0;
//$age = -1;
//$age = 101;

/*if ($age >= 18)                      //if  the condition is true, we can execute some 
{                                    // code inside the {}
  echo "you may enter this site ";   //if the condition is false we going toskip we over the code.   
 
}

elseif($age == 0)
{
    echo "you were just born";
}

elseif($age <= -1)
{
   echo "that wasn't a vaild age";
}

elseif($age >= 100 )
{
   echo  "you are to old to enter this  site";
}

else
{
    echo "you must be 18+ to enter";
}


$adult = true;

if ($adult)    // can also write it this way
//if ($adult == true)
{
    echo "you may enter this site";
}

else
{
    echo "must be an adult to enter";
}
*/

// activity: calculating someone's pay
$hours = 50;
$rate = 15;
$weekly_pay = null;

if($hours <= 0)
{
  $weekly_pay = 0;
}

elseif($hours <= 40)
{
   $weekly_pay = $hours * $rate;
}

else
{
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}

  echo "you made \${$weekly_pay} this week";