<?php



?>

<?php
    session_start();
    
    include 'inc/functions.php'
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dragon Ball Silver Jack </title>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
    </head>
   <div id="wrapper">
    <header>
         <a href="https://fontmeme.com/dragon-ball-z-font/"><img src="https://fontmeme.com/permalink/170923/0358a1d732c81bcd0c86360050c0aa36.png" alt="dragon-ball-z-font" border="0"></a>
    </header>
    
    <style>
        @import url("css/styles.css");
        
    </style>
 
    <body>
        <?php
            
        
            play();
            
                $start = microtime(true);
                for ($i = 0; $i < 1000000; $i++) {
                $j = rand(1,3000) * rand(1,2000);
            }

                 $elapsedSecs = microtime(true) - $start;
                echo "<div id = 'time'>";
                echo "Time elapsed: " . $elapsedSecs . " secs";
                echo "</div>";
        ?>
        <br/> <br/>
        <form>
           <input type="submit" value="Play Again?" sound="jackpot"/>
        </form>
    </body>
    </div>
</html>