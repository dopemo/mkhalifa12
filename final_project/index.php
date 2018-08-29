<?php

include'header.php';
$username=$_POST['username'];
echo $username;


?>
    <script>
    
    function check_player(firstname,lastname,fantasyscore,position){ 
        var i=0;
    $.ajax({

            type: "GET",
            url: "checkplayer.php",
            dataType: "json",
            data: {"firstname": firstname,"lastname":lastname},
            success: function(data,status) {
                var available;
                available=" ";
                
               //alert(data);
               
               
               if (!data) {
                   addPlayer(firstname,lastname,fantasyscore,position);
                   
               } 
               else
               { 
                    i++;
                   document.getElementById("userName").innerHTML=i;
                   
               }
               
               
               
            
            
            },
            complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
            }
            
            });
    }
    $(document).ready(function() {
        $('button').click(function() {
            document.getElementById("test").innerHTML=" ";
        
    $.ajax({
            url: "http://api.fantasy.nfl.com/v1/players/advanced?season=2012&format=json",
            dataType: 'jsonp',
            jsonpCallback: 'apiStatus',
            crossDomain: true,
            
           
            
           success: function (data) {
        console.log(data);
        var position;
        position=$("#position").val();
        for(var i=0;i<6;i++){
             document.getElementById("test").innerHTML+="<a href= '#' class=f_player id="+data[position][i]['id']+">"+data[position][i]['firstName']+" "+data[position][i]['lastName']+" "+data[position][i]['stats']['FanPtsAgainstOpponentPts']+" "+data[position][i]['position']+"</a>";
             var player;
             //"<a href='#' class='petLink' id=
             if(data[position][i]['lastName']=="Griffin"){
                 player=data[position][i]['firstName']+" "+data[position][i]['lastName']+" III"; 
            
                 
             }
             else{
        player=data[position][i]['firstName']+" "+data[position][i]['lastName'];
             }
             /*
         var flag;
         flag=check_player(data[position][i]['firstName'],data[position][i]['lastName']);
         */
        var flag;
        check_player(data[position][i]['firstName'],data[position][i]['lastName'],data[position][i]['stats']['FanPtsAgainstOpponentPts'],data[position][i]['position']);
        
             
        
         
        
        //document.getElementById("test").innerHTML+=playerImage(player);
        document.getElementById("test").innerHTML+="<br>";
      
              
          
        }
        
        console.log(player)
        
        
        
        
        
            },
             error:function(jqXHR, textStatus, errorThrown){
                console.log("jqXHR",jqXHR);
                console.log("textStatus",textStatus);
                console.log("errorThrown",errorThrown);
}
        });
        });
         
        
    });
    function playerImage(position){
        var apiKey='8fxfpzbt2s3efn8awehqafc3';
        
        
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
         for(var i = 0;i<1;i++)
        {
           document.getElementById("test").innerHTML+="<img src='" + data.images[i].display_sizes[0].uri + "'/>"+"<br>";
        }
       
    })
    .fail(function(data){
        alert(JSON.stringify(data,2))
    });
    }
    function addPlayer(playerFname,playerLname,fScore,position){
         $.ajax({
            type: 'POST',
             data:{"fname":playerFname,"lname":playerLname,"fscore":fScore,"p_position":position},
            url:"addPlayers.php",
           
            success: function(data){
                console.log(data);
                
            }
            
        });
    }
     
     
    </script>
    <style>
        body{
            text-align:center;
        }
       
        img {
                    transition: -webkit-transform 0.25s ease;
                    transition: transform 0.25s ease;
                }
                
    img:active {
                    -webkit-transform: scale(4);
                    transform: scale(4);
                }
    </style>
    <button>SEARCH</button>
    <select id="position">
        <option value='QB'>QuarterBack</option>
        <option value='RB'>RunningBack</option>
        <option value='WR'>Wide Reciever</option>
        <option value='DEF'>Defense</option>
        <option value='K'>Kickers</option>
    </select>
    <div id="test">
            
        </div>
        
<div id="userName"></div>
</html>