




<?php
    function randomCard(){
        
        
        $human=rand(0,4);
        $computer=rand(0,4);
        
        
    
       switch($human){
           case 0: $symbol1="ace";
                break;
            case 1: $symbol1="king";
                break;
            case 2: $symbol1="queen";
                break;
            case 3: $symbol1="jack";
                break;
            case 4: $symbol1="ten";
                break;
           
       }
       echo "<div id= 'human'>";
       echo "<p>human</p>";
       
       echo "<img src='img/cards/diamonds/$symbol1.png' alt='$symbol1' width='70'>";
       echo "</div>";
       switch($computer){
           case 0: $symbol="ace";
                break;
            case 1: $symbol="king";
                break;
            case 2: $symbol="queen";
                break;
            case 3: $symbol="jack";
                break;
            case 4: $symbol="ten";
                break;
           
       }
       echo "<div id ='computer'>";
       echo "<p>computer</p>";
       echo "<img src='img/cards/diamonds/$symbol.png' alt='$symbol' width='70'>";
       echo "</div>";
       echo "<div id='winner'>";
      if($human<$computer){
          
          
          echo "Human Winns!!";
      }
      else if($human>$computer)
      {
          echo 'Computer Winns!!';
      }
      else{
          echo 'TIE! you both loose';
      }
      echo "</div>";
          
      
        
        
        
    }






    
?>