<?php
function play(){
       
       $randomValue=rand(0,3);
       $randomValue1=rand(0,3);
       $randomValue2=rand(0,3);
       $randomValue3=rand(0,3);
       $randomValue4=rand(0,3);
function displayPoints($randomValue1,$randomValue2,$randomValue3){

          
        echo "<div id='output'>";
           if($randomValue1==$randomValue2 && $randomValue2==$randomValue3){
               switch($randomValue1)
               {
                    case 0:$totalPoints=$totalPoints+1000;
                        echo "<h1> Jackpot!<h1>";
                        break;
                    case 1:$totalPoints=$totalPoints+500;
                        break;
                    case 2 :$totalPoints=$totalPoints+250;
                        break;
                    case 3 :$totalPoints=$totalPoints+900;
                        break;
                }
                    echo "<h2>You Won $totalPoints points!</h2>";
               
            
               }
                 else{
                     echo "<h3> Try again!</h3>";
                   
           }
           echo "</div>";
      }
      function displaySymbol($randomValue,$pos){
           
       
        switch($randomValue)
         {
            case 0:$symbol="seven";
                break;
            case 1: $symbol="cherry";
                break;
            case 2: $symbol="lemon";
                break;
            case 3: $symbol="grapes";
                break;
            
        }
         echo "<img id='reel$pos'src='img/$symbol.png' alt='$symbol' width='70'>";
      }
      
       for($i=1;$i<4;$i++){
           ${"randomValue" . $i } = rand(0,3);
           displaySymbol(${"randomValue" . $i},$i);
       }
       displayPoints($randomValue1,$randomValue2,$randomValue3,$randomValue4);
       

       
    
}
?>