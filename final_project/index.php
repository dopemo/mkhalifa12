<!DOCTYPE html>
<html>
    <head>
        <title>Fantasy Foot Ball</title>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>FANTASY FOOTBALL</h1>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">NFL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
     <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adoption.php">Picks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutUs.php">Sign Up</a>
      </li>
    </ul>
  </div>
  </nav>
  <br>
    <script>
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
        document.getElementById("test").innerHTML=" ";
        position=$("#position").val();
        for(var i=0;i<5;i++){
             document.getElementById("test").innerHTML+=data[position][i]['firstName']+" "+data[position][i]['lastName']+" "+data[position][i]['stats']['FanPtsAgainstOpponentPts'];
             var player;
        player=data[position][i]['firstName']+" "+data[position][i]['lastName'];
        playerImage(player);
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
        var apiKey='9jmnxw9jk78xu8fzdrgzccd8';
        
        
        $.ajax(
    {
        type:'GET',
        url:"https://api.gettyimages.com/v3/search/images/editorial?phrase="+position+" american football",
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
    </script>
    <style>
        body{
            text-align:center;
        }
       
    </style>
    <button>SEARCH</button>
    <select id="position">
        <option value='QB'>QuarterBack</option>
        <option value='RB'>RunningBack</option>
        <option value='WR'>Wide Reciever</option>
    </select>
    <div id="test">
            
        </div>
        <div id="output"></div>
    </body>
</html>