<html>
<head>
<title>WAL MART</title>

        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
<script type="text/javascript">
$(document).ready(function() {
    var url = 'https://api.walmartlabs.com/v1/',
    mode = 'search',
    input,
    movieName,
    key = '?apiKey=d5stkbf6kze5gbq2va7pmjvu';

    $('button').click(function() {
        document.getElementById("movies").innerHTML=" ";
        var input;
        input = $('#catagories').val();
        
        if(input==" ")
        {
            input=$('#movie').val();
        }
        
       
            movieName = encodeURI(input);
        $.ajax({
            url: url + mode + key + '&query='+movieName ,
            dataType: 'jsonp',
            success: function(data) {
             console.log(data);
             for(var i=0;i<10;i++){
                 var single="'";
                
                 
             document.getElementById("movies").innerHTML+= data.items[i].name+"<br><img src="+single+data.items[i].thumbnailImage+single+"class=pic width='200'><br><br><br>";
             
             document.getElementById("movies").innerHTML+="<button id="+single+data.items[i].itemId+single+" class='success' >info</button><br>";
             checkUsername();
             $(".success").click(function(){
                getinfo($(this).attr("id"));
                
            });
            
               
             }
             addKeyWord();
///"<img src='$products[$i] width='5'>"
            }
        });
    });
});

function getinfo(moviename){
    $.ajax({
            url: 'https://api.walmartlabs.com/v1/search/?apiKey=d5stkbf6kze5gbq2va7pmjvu&query='+moviename,
            dataType: 'jsonp',
            success: function(data) {
             console.log(data.items[0].offerType);
            alert("AVAILABILITY: "+data.items[0].offerType+"\n"+data.items[0].shortDescription+"\n Price: $"+data.items[0].salePrice);

            }
        });
    
}
function checkUsername() {
        var input;
        input=$("#movie").val();
        if(input.length<2)
        {
            input=$("#catagories").val();
        }
        
        $.ajax({

            type: "GET",
            url: "keyWords.php",
            dataType: "json",
            data: { "keyword": input},
            success: function(data,status) {
                var available=" ";
                var count=0;
                //available=" ";
                
               //alert(data);
               
            //   document.getElementById("keyword").innerHTML+=available;
               for(var i=0;i<data.length;i++){
               if (data[i].keyword!=$("#movie").val()&&data[i].keyword!=$("#catagories").val()) {
                   available+=" ";
                 
                   
               } else {
                   
                   
                   available+="<br> date keyword searched: </strong>"+data[i].searchDate+"<br>";
                   count++;
                   
               }
              }
              // available="";
            document.getElementById("keyword").innerHTML="The key word: "+input+" has been searched: "+"("+count+") times "+available;
           // available=" ";
            },
            complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
            }
            
            });//ajax
    }
    function addKeyWord()
    {
        var input;
        input=$("#movie").val();
        if(input.length<2)
        {
            input=$("#catagories").val();
        }
        $.ajax({
            type: 'POST',
             data:{"keyword":input},
            url:"addKey.php",
           
            success: function(data){
                console.log(data);
            }
            
        });
    }

function getCategories()
{
    var input2=$("#catagories").val();
    $("movie").val=input2;
     $.ajax({
            url: 'https://api.walmartlabs.com/v1/search/?apiKey=d5stkbf6kze5gbq2va7pmjvu&query='+input2,
            dataType: 'jsonp',
            success: function(data) {
             console.log(data.items[0].offerType);
             for(var i=0;i<10;i++){
                 var single="'";
                
                 
             document.getElementById("movies").innerHTML+= data.items[i].name+"<br><img src="+single+data.items[i].thumbnailImage+single+"class=pic width='200'><br><br><br>";
             
             document.getElementById("movies").innerHTML+="<button id="+single+data.items[i].name+single+" class='success' >info</button><br>";
             
             $(".success").click(function(){
                getinfo($(this).attr("id"));
                
            });
               
             }
            
            
            
             
// When the user clicks anywhere outside of the modal, close it

             
///"<img src='$products[$i] width='5'>"
            }
        });
    
    
        
        
}
    




</script>
</head>
<h1>Shop Walmart</h1>
<br><br>
<style>
    body{
        text-align:center;
        /*width:50%;*/
        /*float:center;*/
        
    }

    .pic:hover
        {
            transition: all .2s ease-in-out; 
                transform: scale(1.1); 
            }
            #movies{
                border-style:double;
                color:black;
                background:orange;
                /*width:50%;*/
                float:center;
                text-align:center;
                border-width:80%;
            }
            #keyword{
                border-style:solid;
                background:brown;
                color:white;
            }
            

</style>
<body>
 
<input id="movie" type="text" placeholder="search item" name="key"/>

<button>SEARCH</button>
Categories:<select id="catagories">
    <option value=" ">select one</option>
    <option value="movies">movies</option>
     <option value="Kitchen ">Kitchen</option>
      <option value="video games">Video Games</option>
    </select>
<br><br>

<div id="keyword">
    
</div>

<div id="movies">
    
</div>
<div id='abc'>
    
</div>

</body>
<img src="buddy_verified.png">
</html>