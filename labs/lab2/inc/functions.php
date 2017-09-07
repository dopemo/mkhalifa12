<?php
function displaySymbol($randomValue,$pos)
      {
                
               $random=rand(0,3);
               switch($random){
                case 0: $symbol7="seven";
                    break;
                case 1: $symbol7="grapes";
                    break;
                case 2: $symbol7="cherry";
                    break;
                case 3: $symbol7="bar";
                    break;
                case 4: $symbol7="lemon";
                    break;
                
                    
            }
            echo "<img id='reel$pos' src='img/$symbol7.png' alt: '$symbol7' title='$symbol7' width='70px'>";
        } 
    
        function play(){
            for($i=1;$i<4;$i++){
                ${"randomValue" . $i}=rand(0,2);
                displaySymbol(${"randomValue" . $i},$i);
            }
         function displayPoints($randomValue,$randomValue1,$randomValue2){
            echo "<div id='output'>";
            if($randomValue==$randomValue1&&$randomValue1==$randomValue2){
                switch($randomValue){
                    case 0:$totalPoints=1000;
                        echo "<h1>Jackpot!</h1>";
                        break;
                    case 1:$totalPoints=500;
                        break;
                    case 2:$totalPoints=250;
                        break;
                }
                
                echo "<h2>You won $totalPoints points!<h2>";
            }else{
                    echo "<h3> Try Again!</h3>";
            }
            echo "</div>";
     }
      
    }

?>