            <?php
                            
                            
                            
                            
                            
                            
                            
                function randomPlayer(){
   
                     $players_LBs=array("L.Taylor","R.Lewis","S.Mills");
                     $players_QBs=array("T.Brady","B.Favre","J.Montana");
                     $players_DBs=array("D.Green","R.Sherman","R.Lott");
                     $players_LM=array("W.Jones","L.Allen","A.Munoz");
                     $players_WRs=array("J.Rice","R.Moss","C.Johnson");
                     $players_RBs=array("B.Sanders","W.Payton","A.Peterson");
                     $randomPlayer=rand(0,2);
    
         
                    
                         
                        
                            echo "<img src='nfl_players/$players_QBs[$randomPlayer].png' title='$players_QBs[$randomPlayer]' alt='hello' width='70'>";
                            echo "<br/>";
                            echo "<img src='nfl_players/$players_LBs[$randomPlayer].png' title='$players_LBs[$randomPlayer]' alt='hello' width='70'>";
                            echo "<br/>";
                            echo "<img src='nfl_players/$players_LM[$randomPlayer].png' title='$players_LM[$randomPlayer]' alt='hello' width='70'>";
                            echo "<br/>";
                            echo "<img src='nfl_players/$players_RBs[$randomPlayer].png' title='$players_RBs[$randomPlayer]' alt='hello' width='70'>";
                            echo "<br/>";
                            echo "<img src='nfl_players/$players_WRs[$randomPlayer].png' title='$players_WRs[$randomPlayer]' alt='hello' width='70'>";
                            echo "<br/>";
                            echo "<img src='nfl_players/$players_DBs[$randomPlayer].png' title='$players_DBs[$randomPlayer]' alt='hello' width='70'>";
                            echo "<br/>";
                        
                            
                            
                        
                            
                            
                }
                    
         
   
    function displaySymbol($symbol)
    {
        echo "<img src='../labs/lab2/img/$symbol.png' width='70'/>";
    }
    


           ?>