<?php
    

 function myFirst()
 {
    
    $randCard1=rand(0,4);
    $randCard2=rand(0,4);
    echo $randomCard1;
    echo $randomCard2;
    switch($randCard1)
    {
        case 0:$symb="ace";
            break;
        case 1:$symb="jack";
            break;
        case 2:$symb="ten";
            break;
        case 3:$symb="ace";
            break;
        case 4:$symb="queen";
            break;
    }

    echo "<img src='img/cards/clubs/$symb.png' alt='$symb' width='70'>";
    switch($randCard2)
    {
        case 0:$symb1="ace";
            break;
        case 1:$symb1="jack";
            break;
        case 2:$symb1="ten";
            break;
        case 3:$symb1="ace";
            break;
        case 4:$symb1="queen";
            break;
    }
    echo "<img src='img/cards/clubs/$symb1.png' alt='$symb1' width='70'>";
    echo"<div id='winner'>";
    if($randCard1>$randCard2)
    {
        echo "Human Wins!";
    }
    else if($randCard2>$randCard1){
        
        echo "Computer Wins!";
    }
    else{
        
        echo "try again!";
    }
    echo "</div>";

    

}


?>