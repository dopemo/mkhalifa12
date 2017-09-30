<?php
        $backgroundImage="img/sea.jpg";
    if (isset($_GET['keyword']))
    {
        // echo "you searched for : " . $_GET['keyword'];
        include 'api/pixabayAPI.php';
        $keyword=$_GET['keyword'];
       
        if(!empty($_GET['category']))
        {
            $keyword=$_GET['category'];
        }
        
        
         if(isset($_GET['layout']))
        {
            $imageURLs=getImageURLs($keyword,$_GET['layout']);
        }
     else{
            
            $imageURLs=getImageURLs($keyword);
        }
        
        $backgroundImage=$imageURLs[array_rand($imageURLs)];
    }  
        // $orientaton=array("vertical","horizitonal");
        // $orientatoin=getImageURLs($_GET['orientation'][0]);
        // echo "orientation " . $orientatoin;
    function checkIfSelected($options){
        if($options=$_GET['category']){
            return "selected";
        }
    }

    
    


?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <h1>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        </h1>
        <style>
            h2{
                font-size:100%;
                border-style:solid;
                text-align:center;
            }
        </style>
            <h2>
            <form>
            <!--<input type="text"value="keyword">-->
            <input type="submit" value="Submit"/>
            <br>
            <input type="radio"id="lhorizitonal"name="layout" value="horizitonal"><label for=lhorizitonal>Horizontal
             <input type="radio"id="lverical" name="layout" value="vertical"><label for=lverical>Vertical
             <?php
              if($_GET['layout']=="vertical")
              {
                  echo "checked";
              }
              if($_GET['layout']=="horizitonal")
              {
                  echo "checked";
              }
             ?>
             <input type="text" name="keyword" placeholder="" value="<?=$_GET['keyword']?>">
             <select name="category">
                <option value="">select one</option>
                <option <?=checkIfSelected('mountains')?>value="mountains">Mountains</option>
                <option <?=checkIfSelected('oceans')?>value="oceans">Ocean</option>
             <select/>
            </form>
            </h2>
        <style>
        @import url("css/style.css");
        body{
            background-image:url('<?=$backgroundImage?>');
        }
    </style>
        <?php
            if(!isset($imageURLs))  //form has not been submitted
            {
                echo "<h2> Type a keyword to display a slideshow<br /> with random image from Pixabay.com</h2>";
                
            }
            else{  //form has been submitted
                
                 
            if(empty($_GET['keyword']) && empty($_GET['category']))
            {
                echo "<h2>YOU MUST ENTER A KEYWORD OR CATEGORY</h2>";
                exit;
            }
                
                
                for($i=0;$i<5;$i++)
                    {
                    
                        do
                        {
                                 $randomIndex=rand(0,count($imageURLs));
                        }
                         while(!isset($imageURLs[$randomIndex]));
                         
                        
                         
                        
                        
                        echo "<img src='" . $imageURLs[rand(0,count($imageURLs))] . "'  width='200' >";
                        unset($imageURLs[$randomIndex]);
                    
                    }//endFor
          ?>
       
        
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            for($i=0;$i<5;$i++)
            {
                echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                echo ($i==0)?" class='active'":"";
                echo "></li>";
            }
            
            
            ?>
        </ol>
        <div class="carousel-inner" role="listbox">
        
         <?php   
            for($i=0;$i<5;$i++){
        
              
             do{
                $randomIndex = rand(0,count($imageURLs));
             }
            while(!isset($imageURLs[$randomIndex]));
        
            
            
            
            
            
            
            echo '<div class="item ';
            echo ($i==0)?"active": "";
            echo '">';
            echo '<img src="' . $imageURLs[$randomIndex] . '">';
            echo '</div>';
            unset($imageURLs[$randomIndex]);
            
            }
           
            
            
        ?>
    
    
    
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <?php
    
            }//endElse
        
    ?>

    </body>
</html>