<?php
        
        include 'api/api.php';
        
         if(isset($_GET['result'])=="products")
        {
            if (isset($_GET['interest']))
          {
        // echo "you searched for : " . $_GET['keyword'];
             //include 'api/api.php';
            if(!empty($_GET['category'])&&empty($_GET['interest']))
            {
                $interest=$_GET['category'];
                $products=findBooks($interest);
            }
            else
            {
                
                $interest=$_GET['interest'];
                $products=findBooks($interest);
            }
        
   
    }
    
            echo "checked";
        }
         if(isset($_GET['result'])=="movies")
        {
            if (isset($_GET['interest']))
          {
        // echo "you searched for : " . $_GET['keyword'];
             //include 'api/api.php';
            if(!empty($_GET['category'])&&empty($_GET['interest']))
            {
                $interest=$_GET['category'];
                $imageURLs=test($interest);
            }
            else
            {
                
                $interest=$_GET['interest'];
                $imageURLs=test($interest);
            }
        
   
    }
        echo "checked";
        }
    
        // echo "orientation " . $orientatoin;
    function checkIfSelected($options)
    {
        if($options=$_GET['category']){
            return "selected";
        }
            
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Fill your interest </title>
      
    </head>
    <style>
    body{
        background-image: url("img/bround.png");
    }
    </style>
    <body>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <h1>FILL YOUR INTEREST</h1>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <h2>
        <form>
            <input type="text" name="interest" Placeholder="interest"value="<?=$_GET['interest']?>">
            <input type="submit" name="Generate">
            <input type="radio" name="result" value="movies">Movies
            <input type="radio" name="result" value="products">Products
            <select name="category">
                <option value="">Subgenres</option>
                <option <?=checkIfSelected('comedy')?>value="comedy">Comedy</option>
                <option <?=checkIfSelected('drama')?>value="drama">Drama</option>
                <option <?=checkIfSelected('sports')?>value="sports">Sports</option>
                <option <?=checkIfSelected('documentary')?>value="documentary">Documentary</option>
             </select>
            
        </form>
        </h2>
         <?php
            if(isset($interest))  //form has not been submitted
            {
                
            
                 for($i=0;$i<10;$i++)
                {
                     
               if($_GET['result']=="products")
               {
                    echo "<div style='background-color:red;color:white;padding:20px'>
                     <h3>
                     <ul>
                     <li>$products[$i]</li>
                     </ul>
                     </h3>
                </div>";
               }
             else if($_GET['result']=="movies")
              {
                echo "<div style='background-color:red;color:white;padding:20px'>
                     <h3>
                     <ul>
                     <li><img src=$imageURLs[$i] width='200' ></li>
                     </ul>
                     </h3>
                </div>";
              }
             
              
                
                
                       // unset($imageURLs[$randomIndex]);
                
                }
                
                
            }
            
            ?>
            
        <img src="img/buddy_verified.png" width='200' >
    </body>
</html>