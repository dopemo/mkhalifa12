
<?php
include 'header.php';
include '../dbConnection.php';
$conn=dbConnection();
function logout()
{

if(isset($_GET['logout']))
    {
        header("Location: index.php");
        exit();
    }
}

function displayUsers()
{
    
global $conn;
$sql="SELECT * FROM `f_users`";
$namedParameter=array();
 $stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($records as $record)
{
 echo "Name: ";
            echo  $record['username'] . "<br>";
           echo "<button class='delete' id='" . $record['userId'] . "'>remove</button><br>";
            echo "<hr><br>";
            
}         
}

  
    
?>
<style>
    #userSection{
        text-align:center;
    }
    #logu{
        text-align:right;
    }
</style>

<script>

        $(document).ready(function() {
        $(".delete").click( function(){
            
            //console.log(test);
           
              $.ajax({

                type: "GET",
                url: "deleteUser.php",
                dataType: "json",
                data: { "id": $(this).attr('id')},
                success: function(data,status) {
                console.log(data)
                   
                   //var form=prompt("please enter your user name:");
                   //checkUserName(form);
                   //document.getElementById("output").innerHTML=pic;
                   
                
                },
                complete: function(data,status) { //optional, used for debugging purposes
                alert("user has been successfully removed")
                }
                
            });//ajax
            
            
            
        }); //.getLink click
        });
   //document.ready
function checkPlayer()
{
            var firstName=$("#firstName").val();
            var lastName=$("#lastName").val();
             var fscore=$("#fscore").val();
             var pos=$("#position").val();
      $.ajax({

            type: "GET",
            url: "checkplayer.php",
            dataType: "json",
            data: {"firstname": firstName,"lastname":lastName},
            success: function(data,status) {
                var available;
                available=" ";
                
               //alert(data);
               
               
               if (!data) {
                   console.log("username Available");
                   addPlayer(firstName,lastName,fscore,pos);
             
                   
                  
                   
                 
                   
               } else {
                   //alert("player is Already in Database!")
                   console.log("username not Available");
                   
               }
              
               
               
                document.getElementById("firstName").innerHTML=" ";
            
            
            },
            complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
            }
            
            });
}
  function logout(){
        event.preventDefault(); 
                var url = $(this).data('target');
                location.replace("index.php");
                
  }
   function addPlayer(playerFname,playerLname,fScore,position){
         $.ajax({
            type: 'POST',
             data:{"fname":playerFname,"lname":playerLname,"fscore":fScore,"p_position":position},
            url:"addPlayers.php",
           
            success: function(data){
                console.log(data);
                alert("player Succefully added!");
                 
                
            }
            
        });
       
    }
     
</script>

<button type="button" class="btn btn-primary" onclick="logout()">Logout</button>
<br><center>
            First Name* <input type="text" id="firstName"/> <br>
            Last Name* <input type="text" id="lastName"/> <br>
            fantasy score* <input type="text" id="fscore"/> <br>
           Position:<select id="position">
                <option value='QB'>QuarterBack</option>
                <option value='RB'>RunningBack</option>
                <option value='WR'>Wide Reciever</option>
                <option value='DEF'>Defense</option>
                <option value='K'>Kickers</option>
                </select><br>
             <button onclick="checkPlayer()">add Player!</button>
            </center>

<div id="userSection">
    <h1> Team Owners</h1>
    <br>
    
    <?php
    displayUsers();
    ?>
    
</div>

