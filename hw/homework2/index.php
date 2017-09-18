<!DOCTYPE html>


<html>
    <head>
       <meta charset="uft-8"/>
		<title></title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Welcome to my NFL Team generator</h1>

         <h2 class="solid">  
         <?php
            include 'functions.php';
        
            randomPlayer();
            ?>
            <form>
           <input type="submit" value="Generate Team" sound="jackpot"/>
       </form>

         </h2>
   
    </body>
</html>