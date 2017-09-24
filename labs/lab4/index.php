<?php
        
    $backgroundImage='img/sea.jpg';
    if (isset($_GET['keyword']))
    {
        echo "you searched for : " . $_GET['keyword'];
        include 'api/pixabayAPI.php';
        $imageURLs=getImageURLs($_GET['keyword']);
        print_r($imageURLs);
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <form>
            <input type="text" name="keyword" placeholder="Keyword">
            <input type="submit" value="Submit"/>
        </form>
        <style>
        @import url("css/style.css");
        body{
            background-image:url('<?=$backgroundImage?>');
        }
    </style>
        <?php
            if(!isset($imageURLs)){
                echo "<h2> type a keyword to display a slideshow<br /> with random image from Pixabay.com</h2>";
                
            }else{
                for($i=0;$i<5;$i++)
                {
                    
                    do{
                       $randomIndex=rand(0,count($imageURLs));
                        }
                    
                     while(!isset($imageURLs[$randomIndex]));
                    
                    
                    echo "<img src='" . $imageURLs[rand(0,count($imageURLs))] . "'  width='200' >";
                    unset($imageURLs[$randomIndex]);
                    
                
                    }
            }
        
        
        ?>
       
        
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
        
         <?php   
            for($i=0;$i<5;$i++)
            {
                
            //  do{
            //     $randomIndex=rand(0,count($imageURLs));
            
        
            //     }
                     
            // while(!isset($imageURLs[$randomIndex]));
            echo '<div class="item ';
            echo ($i==0)?"active": "";
            echo '">';
            echo '<img src="' . $imageURLs[$randomIndex] . '">';
            echo '</div>';
            unset($imageURLs[$randomIndex]);
            
            
        }
        
        
        
    ?>
    </div>

    </div>
    
    
    </body>
</html>