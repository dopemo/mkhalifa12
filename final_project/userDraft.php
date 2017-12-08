<?php
include 'header.php';

?>
<script>
$(document).ready(function() {
        $('button').click(function() {
            document.getElementById("master").innerHTML=" ";
        var firstName;
        firstName=$("#username").val();
         $.ajax({

            type: "GET",
            url: "userTeam.php",
            dataType: "json",
            data: {"id": firstName},
            success: function(data,status) {
                for(var i=0;i<data.length;i++){
                document.getElementById("master").innerHTML+=data[i]['playerName']+"<br>";
                playerImage(data[i]['playerName'])
                }

            },
            complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
            }
            
            });
            
      
        });
});
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
       
        
           document.getElementById("master").innerHTML+="<img src='" + data.images[0].display_sizes[0].uri + "'/>";
        
       
    })
    .fail(function(data){
        alert(JSON.stringify(data,2))
    });
    }
    
</script>
<center>
<input type="text" placeholder="username" id="username"><br><button>button</button>
<div id="master"> </div>
</center>