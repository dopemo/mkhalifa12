
<!DOCTYPE html>
<html>
    <head>
        <title> Lab 10: Photo Gallery </title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <body>
        <style>
            img {
                    transition: -webkit-transform 0.25s ease;
                    transition: transform 0.25s ease;
                }
                
    img:active {
                    -webkit-transform: scale(4);
                    transform: scale(4);
                }
                body{
                    text-align:center;
                    font-style:italic;
                }
                #main{
                    border-style:solid;
                    width:50;
                    text-align:center;
                    background:black;
                    color:white;
                }
                #forum{
                    background:blue;
                    color:yellow;
                }
                h2{
                    color:green;
                    background:black;
                }
        </style>

    <h2> Photo Gallery </h2>
    <div id='forum'>
    <form method="POST" enctype="multipart/form-data"> 


        <input type="file" name="myFile" /> 
        
        <input type="submit" value="Upload File!" />

    </form>
    </div>
<?php
if($_FILES["myFile"]["size"]<1000000){
    //print_r($_FILES);
  //echo "File size " . $_FILES["myFile"]["size"];
  
  
  move_uploaded_file($_FILES["myFile"]["tmp_name"], "img/" . $_FILES["myFile"]["name"] );
  
  $files = scandir("img/", 1);
  
 //print_r($files);
 echo "<div id='main'>";
 echo "UPloaded photos: <br>";
  
  for ($i = 0; $i < count($files) - 2; $i++) {
      
     
     echo "<img src='img/" .   $files[$i] . "' width='200' ><br>";
      
  
  
 }
 echo "</div>";
}
else{
    echo "ERROR IMAGE TOO LARGE!";
}
  
  
  

?>


    </body>
</html>