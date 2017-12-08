<?php
include 'header.php';



function getPlayer()
{
    
    include '../dbConnection.php';
    $conn = dbConnection();
    
    
    $sql = "SELECT * FROM `f_players` 
            WHERE playerId = :Id";
    
    $namedParam = array(":Id"=>$_GET['id']);
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParam);
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    
        
        echo "<div id='player'>". $record['p_fname'] . " " . $record['p_lname'] . "</div><br>";
         echo "<div id='fscore'>Fanstasy score: " .$record['fantasy score'] . "<br><button>Draft<button><br></div>";
         echo "<div id='playerid'>". $record['playerId'] . "</div><br>";
         
        
        
    
    

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>playerinfo</title>
    </head>
    <center>
    <h1>Player information</h1></center>
    <body>
        
    <?=getPlayer()?>
  
    </body>
    <script>
  
    var temp;
        var test=document.getElementById("player").innerHTML;
        console.log(test);
        temp=test;
        test+=" NFL";
        playerImage(test)
        
         function playerImage(position){
        var apiKey='9jmnxw9jk78xu8fzdrgzccd8';
        
        
        $.ajax(
    {
        type:'GET',
        url:"https://api.gettyimages.com/v3/search/images/editorial?phrase="+position+" NFL",
         beforeSend: function (request)
            {
                request.setRequestHeader("Api-Key", apiKey);
            }})
             .done(function(data){
        console.log("Success with data")
        console.log(data)
       
        
           document.getElementById("playerPics").innerHTML+="<img src='" + data.images[0].display_sizes[0].uri + "'/>"+"<br>";
        
       
    })
    .fail(function(data){
        alert(JSON.stringify(data,2))
    });
    }
     $(document).ready(function() {
        
         
        $('button').click(function() {
            var p_id;
         p_id=document.getElementById("playerid").innerHTML;
             $.ajax({

            type: "GET",
            url: "draftPics.php",
            dataType: "json",
            data: {"id": p_id},
            success: function(data,status) {
                var available;
                available=" ";
                
               //alert(data);
               
               
               if (!data) {
                   console.log("you can draft this player")
                   username=prompt("please Enter your user name");
                   checkUserName(username);
                       
                   
                  
                   
                 
                   
               } else {
                  alert("player has already been drafted!");
                   
               }
            
               
               
               
            
            
            },
            complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
            }
            
            });
            
        });
     });
     function checkUserName(username)
     {
          var p_id;
         p_id=document.getElementById("playerid").innerHTML;
         var player;
         player=document.getElementById("player").innerHTML;
         $.ajax({

            type: "GET",
            url: "checkuName.php",
            dataType: "json",
            data: {"username": username},
            success: function(data,status) {
                var available;
                available=" ";
                
               //alert(data);
               
               
               if (!data) {
                  
                   alert("you will need to signUp to pick players!")
                   event.preventDefault(); 
                var url = $(this).data('target');
                location.replace("signUp.php");
                   
                   
                 
                   
               } else {
                   draftPlayer(p_id, data['userId'], username,player);
                   alert("Player Picked!")
                   event.preventDefault(); 
                var url = $(this).data('target');
                location.replace("picks.php");
                   
                   
               }
            
               
               
               
            
            
            },
            complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
            }
            
            });
         
     }
     function draftPlayer(playerId,userId,username,playername){
          $.ajax({
            type: 'POST',
             data:{"playerId":playerId,"userid":userId,"username":username,"playerName":playername},
            url:"addPick.php",
           
            success: function(data){
                console.log(data);
                
            }
            
        });
         
     }
    
    </script>
    <div id='playerPics'></div>
    <style>
        #playerPics{
            text-align:center;
        }
        #player{
            text-align:center;
        }
         #fscore{
            text-align:center;
        }
    </style>
</html>