<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="whileloop.php" method="post">
    <input type="sumbit" name="stop" value="stop"> 
    </form>
</body>
</html>

<?php
 //while loop = do spme code infinitely while some 
 //              condition remains true

     /*$count = 0;
   while($count <= 10)
    {
      $count++;
      echo $count ."<br>";
    }
    */

    // example: stop watch
    $sec = 0;
    $running = true;

    while($running)
    {
        if(isset($_POST["stop"]))
        {
            $running = false;
        }

        else
        {
            //wait 1 sec
        $sec++;
        echo $sec . "<br>";
        }
       
    }
   
?>