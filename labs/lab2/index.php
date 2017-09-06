<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
        
        
            function displaySymbol(){
                
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
            echo "<img src='img/$symbol7.png' alt: '$symbol7' title='$symbol7' width='70px'>";
        }
            $randomValue=rand(0,2);
            displaySymbol($randomValue);
            $randomValue1=rand(0,2);
            displaySymbol($randomValue1);
            $randomValue2=rand(0,2);
            displaySymbol($randomValue2);
            echo $randomValue . " " .$randomValue1 . " " . $randomValue2;
            if($randomValue==$randomValue1&&$randomValue=$randomValue2)
            {
                
                echo "you Won!!";
            }
            
            
        
        ?>
       
      
    </body>
</html>