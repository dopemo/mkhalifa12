<?php
global $sum;


function yearList($start,$end)
{
    $temp="HAPPY NEW YEAR";
    $animals=array("rat","ox","dog","horse","goat","monkey","rabbit","pig","tiger","dragon","snake","rooster");
    for($i=$start;$i<$end;$i++)
    {
        echo "<li> year $i </li>";
        if($i>=1900&&$i%4==0)
        {
            echo "<img src='$animals[$i].png' alt='$animal[$i]'/>";
        }
      
       
        
    }
     echo "<h2>return $sum=$start+$end</h2>";
   
     
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <h1>Chinese ZODIAC</h1>
         <form>
            <input type="text" name="start" >
            <input type="text" name="end" >
    </form>
        <?php
            $start;
            $end;
            $start=1500;
            $end=2000;
            yearList($start,$end);
            echo $sum;
        ?>
   
    </body>
</html>