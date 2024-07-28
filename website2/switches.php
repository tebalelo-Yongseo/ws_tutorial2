<?php
//switches = replacement to using many elseif statemennts
//          more efficients, less code to write.

//example: if statements
/**$grade = "A";

if($grade == "A")
{
    echo "you did great";
}
elseif($grade == "B")
{
    echo "you did good";
}
elseif($grade == "C")
{
    echo "you did okay";
}
elseif($grade == "D")
{
    echo "you did poorly";
}
elseif($grade == "F")
{
    echo "you failed";
}
else
{
    echo "{$grade} is not a vaild grade";
}
**/

//example1: swicth statements
/**$grade = "Fade";

switch($grade)
{                          // within the switch we gonna create cases
  case "A";                //one case for each match that we are looking up
  echo "you did great";                         //what are we comparing $grade too?
     break;                              // lets compare our $grade to "A"

  case "B";
  echo "you did good";
  break;

  case "C";
  echo "you did okay";
  break;
  
  case "D";
  echo "you did poorly";
  break;

  case "F";
  echo "you failed";
  break;
     
  default:               // if ther are no matching we add default case
  echo "{$grade} in not vaild grade";
}   
**/

//example2:switches
$date = date("l");
//echo $date;

$date = "sun";

switch($date)
{
    case "monday":
        echo "i hate monday";
        break;
    case "tuesday":
            echo "yoga day";
            break;

   case "wednsday":
           echo "almost there";
           break;

    case "thursday":
           echo "the weekend is near";
           break;

    case "friday":
            echo " thee weekend";
            break;

    case "saturday":
           echo "party time";
           break;

    case "sunday":
            echo "church";
            break;

    default:
           echo "{$date} is not a day";

}

?>                        