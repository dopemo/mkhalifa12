 <?php
 
    function displayScore($value){
        switch($value)
        {
            case 0: $symbol=10;
                break;
            case 1: $symbol=9;
                break;
            case 2: $symbol=8;
                break;
            case 3: $symbol=7;
                break;
            case 4: $symbol=6;
                break;
            case 5: $symbol=5;
                break;
        }
        return $symbol;
       
    }
    function displayStuff($value)
    {
        echo $value;
    }
    function display_year($value)
    {
       $value=($value/6);
       if ($value>=9&&$value<10)
       {
           echo 'Your team is mostly in the 80s';
       }
       else if ($value>=8&&$value<9)
       {
           echo 'Your team is mostly in the 80s';
       }
       else if ($value>=7&&$value<8)
       {
           echo 'Your team is mostly in the 90s';
       }
       else if ($value>=6&&$value<7)
       {
           echo 'Your team is mostly in the 90s';
       }
       else if ($value>=5&&$value<6)
       {
           echo 'Your team is mostly is still around';
       }
       else if ($value==5)
       {
           echo 'Your team is mostly is still around';
       }
      
    }
        
    
                            
                            
    function randomPlayerAll()
    {
   
    $players_LBs=array("L.Taylor","R.White","D.Thomas","S.Mills","R.Lewis","P.Willis");
    $players_QBs=array("J.Montana","D.Marino","B.Favre","W.Moon","T.Brady","P.Manning");
    $players_DBs=array("D.Green","L.Hayes","R.Lott","D.Sanders","R.Sherman","D.Revis");
    $players_LM=array("A.Munoz","J.Upshaw","L.Allen","W.Roaf","W.Jones","O.Pace");
    $players_WRs=array("J.Rice","M.Irvin","R.Moss","T.Owens","C.Johnson","S.Smith");
    $players_RBs=array("B.Sanders","E.Smith","W.Payton","B.Jackson","A.Peterson","L.Tomlinson");
    $randomPlayer=rand(0,5);
    $randomPlayer2=rand(0,5);
    $randomPlayer3=rand(0,5);
    $randomPlayer4=rand(0,5);
    $randomPlayer5=rand(0,5);
    $randomPlayer6=rand(0,5);
    $score=displayScore($randomPlayer);
    $score=$score+displayScore($randomPlayer2);
    $score=$score+displayScore($randomPlayer3);
    $score=$score+displayScore($randomPlayer4);
    $score=$score+displayScore($randomPlayer5);
    $score=$score+displayScore($randomPlayer6);
        echo $players_QBs[$randomPlayer];
        echo " ";
        echo "<img src='nfl_players/$players_QBs[$randomPlayer].png' title='$players_QBs[$randomPlayer]' alt='hello' width='70'>";
        echo "<br/>";
        echo "<br/>";
        echo $players_LBs[$randomPlayer2];
        echo " ";
        echo "<img src='nfl_players/$players_LBs[$randomPlayer2].png' title='$players_LBs[$randomPlayer2]' alt='hello' width='70'>";
        echo "<br/>";
        echo "<br/>";
        echo $players_LM[$randomPlayer3];
        echo " ";
        echo "<img src='nfl_players/$players_LM[$randomPlayer3].png' title='$players_LM[$randomPlayer3]' alt='hello' width='70'>";
        echo "<br/>";
        echo "<br/>";
        echo $players_RBs[$randomPlayer4];
        echo " ";
        echo "<img src='nfl_players/$players_RBs[$randomPlayer4].png' title='$players_RBs[$randomPlayer4]' alt='hello' width='70'>";
        echo "<br/>";
        echo "<br/>";
        echo $players_WRs[$randomPlayer5];
        echo " ";
        echo "<img src='nfl_players/$players_WRs[$randomPlayer5].png' title='$players_WRs[$randomPlayer5]' alt='hello' width='70'>";
        echo "<br/>";
        echo "<br/>";
        echo $players_DBs[$randomPlayer6];
        echo " ";
        echo "<img src='nfl_players/$players_DBs[$randomPlayer6].png' title='$players_DBs[$randomPlayer6]' alt='hello' width='70'>";
        echo "<br/>";
        echo "your teams overall score ";
        displayStuff($score);
        echo'<br>';
        display_year($score);

                            
        }
        function randomPlayer80s(){
   
    $players_LBs=array("L.Taylor","R.White","D.Thomas","S.Mills","R.Lewis","P.Willis");
    $players_QBs=array("J.Montana","D.Marino","B.Favre","W.Moon","T.Brady","P.Manning");
    $players_DBs=array("D.Green","L.Hayes","R.Lott","D.Sanders","R.Sherman","D.Revis");
    $players_LM=array("A.Munoz","J.Upshaw","L.Allen","W.Roaf","W.Jones","O.Pace");
    $players_WRs=array("J.Rice","M.Irvin","R.Moss","T.Owens","C.Johnson","S.Smith");
    $players_RBs=array("B.Sanders","E.Smith","W.Payton","B.Jackson","A.Peterson","L.Tomlinson");
    $randomPlayer=rand(0,1);
    $randomPlayer2=rand(0,1);
    $randomPlayer3=rand(0,1);
    $randomPlayer4=rand(0,1);
    $randomPlayer5=rand(0,1);
    $randomPlayer6=rand(0,1);
    $score=$score+displayScore($randomPlayer);
    $score=$score+displayScore($randomPlayer2);
    $score=$score+displayScore($randomPlayer3);
    $score=$score+displayScore($randomPlayer4);
    $score=$score+displayScore($randomPlayer5);
    $score=$score+displayScore($randomPlayer6);
    echo $players_QBs[$randomPlayer];
        echo " ";
    echo "<img src='nfl_players/$players_QBs[$randomPlayer].png' title='$players_QBs[$randomPlayer]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_LBs[$randomPlayer2];
        echo " ";
    echo "<img src='nfl_players/$players_LBs[$randomPlayer2].png' title='$players_LBs[$randomPlayer2]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_LM[$randomPlayer3];
        echo " ";
    echo "<img src='nfl_players/$players_LM[$randomPlayer3].png' title='$players_LM[$randomPlayer3]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_RBs[$randomPlayer4];
        echo " ";
    echo "<img src='nfl_players/$players_RBs[$randomPlayer4].png' title='$players_RBs[$randomPlayer4]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_WRs[$randomPlayer5];
        echo " ";
    echo "<img src='nfl_players/$players_WRs[$randomPlayer5].png' title='$players_WRs[$randomPlayer5]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_DBs[$randomPlayer6];
        echo " ";
    echo "<img src='nfl_players/$players_DBs[$randomPlayer6].png' title='$players_DBs[$randomPlayer6]' alt='hello' width='70'>";
    echo "<br/>";
    
    echo "Your teams overall score: ";
        displayStuff($score);
                            
        }
        function randomPlayer90s(){
   
    $players_LBs=array("L.Taylor","R.White","D.Thomas","S.Mills","R.Lewis","P.Willis");
    $players_QBs=array("J.Montana","D.Marino","B.Favre","W.Moon","T.Brady","P.Manning");
    $players_DBs=array("D.Green","L.Hayes","R.Lott","D.Sanders","R.Sherman","D.Revis");
    $players_LM=array("A.Munoz","J.Upshaw","L.Allen","W.Roaf","W.Jones","O.Pace");
    $players_WRs=array("J.Rice","M.Irvin","R.Moss","T.Owens","C.Johnson","S.Smith");
    $players_RBs=array("B.Sanders","E.Smith","W.Payton","B.Jackson","A.Peterson","L.Tomlinson");
    $randomPlayer=rand(2,3);
    $randomPlayer2=rand(2,3);
    $randomPlayer3=rand(2,3);
    $randomPlayer4=rand(2,3);
    $randomPlayer5=rand(2,3);
    $randomPlayer6=rand(2,3);
    $score=$score+displayScore($randomPlayer);
    $score=$score+displayScore($randomPlayer2);
    $score=$score+displayScore($randomPlayer3);
    $score=$score+displayScore($randomPlayer4);
    $score=$score+displayScore($randomPlayer5);
    $score=$score+displayScore($randomPlayer6);
    echo $players_QBs[$randomPlayer];
        echo " ";
    echo "<img src='nfl_players/$players_QBs[$randomPlayer].png' title='$players_QBs[$randomPlayer]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_LBs[$randomPlayer2];
        echo " ";
    echo "<img src='nfl_players/$players_LBs[$randomPlayer2].png' title='$players_LBs[$randomPlayer2]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_LM[$randomPlayer3];
        echo " ";
    echo "<img src='nfl_players/$players_LM[$randomPlayer3].png' title='$players_LM[$randomPlayer3]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_RBs[$randomPlayer4];
        echo " ";
    echo "<img src='nfl_players/$players_RBs[$randomPlayer4].png' title='$players_RBs[$randomPlayer4]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_WRs[$randomPlayer5];
        echo " ";
    echo "<img src='nfl_players/$players_WRs[$randomPlayer5].png' title='$players_WRs[$randomPlayer5]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_DBs[$randomPlayer];
        echo " ";
    echo "<img src='nfl_players/$players_DBs[$randomPlayer6].png' title='$players_DBs[$randomPlayer6]' alt='hello' width='70'>";
    echo "<br/>";
    echo "Your teams overall score: ";
        displayStuff($score);
                            
        }
        function randomPlayer00s(){
   
    $players_LBs=array("L.Taylor","R.White","D.Thomas","S.Mills","R.Lewis","P.Willis");
    $players_QBs=array("J.Montana","D.Marino","B.Favre","W.Moon","T.Brady","P.Manning");
    $players_DBs=array("D.Green","L.Hayes","R.Lott","D.Sanders","R.Sherman","D.Revis");
    $players_LM=array("A.Munoz","J.Upshaw","L.Allen","W.Roaf","W.Jones","O.Pace");
    $players_WRs=array("J.Rice","M.Irvin","R.Moss","T.Owens","C.Johnson","S.Smith");
    $players_RBs=array("B.Sanders","E.Smith","W.Payton","B.Jackson","A.Peterson","L.Tomlinson");
    $randomPlayer=rand(4,5);
    $randomPlayer2=rand(4,5);
    $randomPlayer3=rand(4,5);
    $randomPlayer4=rand(4,5);
    $randomPlayer5=rand(4,5);
    $randomPlayer6=rand(4,5);
    $score=$score+displayScore($randomPlayer);
    $score=$score+displayScore($randomPlayer2);
    $score=$score+displayScore($randomPlayer3);
    $score=$score+displayScore($randomPlayer4);
    $score=$score+displayScore($randomPlayer5);
    $score=$score+displayScore($randomPlayer6);
   echo $players_QBs[$randomPlayer];
        echo " ";
    echo "<img src='nfl_players/$players_QBs[$randomPlayer].png' title='$players_QBs[$randomPlayer]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_LBs[$randomPlayer2];
        echo " ";
    echo "<img src='nfl_players/$players_LBs[$randomPlayer2].png' title='$players_LBs[$randomPlayer2]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_LM[$randomPlayer3];
        echo " ";
    echo "<img src='nfl_players/$players_LM[$randomPlayer3].png' title='$players_LM[$randomPlayer3]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_RBs[$randomPlayer4];
        echo " ";
    echo "<img src='nfl_players/$players_RBs[$randomPlayer4].png' title='$players_RBs[$randomPlayer4]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_WRs[$randomPlayer5];
        echo " ";
    echo "<img src='nfl_players/$players_WRs[$randomPlayer5].png' title='$players_WRs[$randomPlayer5]' alt='hello' width='70'>";
    echo "<br/>";
    echo $players_DBs[$randomPlayer];
        echo " ";
    echo "<img src='nfl_players/$players_DBs[$randomPlayer6].png' title='$players_DBs[$randomPlayer6]' alt='hello' width='70'>";
    echo "<br/>";
     echo "Your teams overall score ";
        displayStuff($score);
                            
        }
        
                    


           ?>