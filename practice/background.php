<?php

        function getRandomColor(){
                                    $red=rand(0,255);
                            $green=rand(0,255);
                            $alpha=rand(0,100)/100;
                            echo "background-color:rgba( ".rand(0,255).",".rand(0,250). ",".rand(0,255). ",".(rand(0,100)/100) .");";
            
            
            
        }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Random backgroud color </title>
        <meta charset="utf-8"/>
        
        <style>
            body 
            {
                  
                    <?php
                    getRandomColor();
                           
                    
                    ?>
                }
                h2{
                    <?php
                    getRandomColor();
                           
                    
                    ?>
                    
                }
        </style>
    </head>
    <body>
 <h2>
     ello!
 </h2>
</body>
</html>