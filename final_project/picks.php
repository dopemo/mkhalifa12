<?php
include 'header.php';
function getPlayers()
{
include '../dbConnection.php';
$conn = dbConnection();



$sql = "SELECT * FROM `f_players` WHERE 1";
 $stmt = $conn->prepare($sql);
$stmt->execute();
$record = $stmt->fetchAll(PDO::FETCH_ASSOC);//expecting only one record
 
return $record;

}


       
        

?>
<div id="output"></div>
<center>
<?php
        
    $players=getPlayers();
     
        foreach ($players as $player){
             
            
            echo "<a  href='playerInfo.php?id=".$player['playerId']."' id='".$player['playerId'] . "'>" . $player['p_fname'] ." ". $player['p_lname']."</a><br>";
            //"<a target='checkoutHistory' href='checkouthistory.php?Id=".$record['playerI']."'> Checkout History </a> <br />";
        
           
            echo "POS: " . $player['position'] . "<br>";
            echo "<hr><br>";
            
           
            //echo "<div id='d" . $player
            
        }
    ?>
    </center>
<style>

    form{
        text-align:center;
    }
    
    h1{
        text-align:center;
    }
    #list{
        text-align:center;
    }
</style>
<script>
$(document).ready( function(){
        
        $(".players").click( function(){
            
           
              $.ajax({

                type: "GET",
                url: "getAllplayers.php",
                dataType: "json",
                data: { "playerId": $(this).attr('id')},
                success: function(data,status) {
                console.log(data)
                   
                   //var form=prompt("please enter your user name:");
                   //checkUserName(form);
                   //document.getElementById("output").innerHTML=pic;
                   
                
                },
                complete: function(data,status) { //optional, used for debugging purposes
                //alert(status);
                }
                
            });//ajax
            
            
        }); //.getLink click
        
    });//document.ready
        

  function checkUserName(userName){
    
       
            
       $.ajax({

            type: "GET",
            url: "checkuName.php",
            dataType: "json",
            data: {"username": userName},
            success: function(data,status) {
                var available;
                available=" ";
                
               //alert(data);
               
               
               if (!data) {
                   available="please signUp!";
                   event.preventDefault(); 
                var url = $(this).data('target');
                location.replace("signUp.php");
                
                
                   
               } else {
                   available="welcome "+data['username'];
                   
               }
              alert(available);
               
               
               
            
            
            },
            complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
            }
            
            });
  
    }
       

</script>
<div id="list">
    </div>
    
 