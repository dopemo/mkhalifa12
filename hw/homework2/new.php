<!DOCTYPE html>


<html>
    <head>
       <meta charset="uft-8"/>
		<title></title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <header>
     
    </header>
    <body>
        <h1>Welcome to my NFL Team generator</h1>
        <style>
        #new{
                color:yellow;
            }
        </style>

         <h2 class="solid">  
         <?php
            include 'functions.php';
        
            randomPlayer90s();
            ?>
            <form>
           <input type="submit" value="Generate Team" sound="jackpot"/>
            </form>
       </form>

         </h2>
         <h3>
          <nav>
			<a <a id="All" href="index.php">All Players</a> 
			<a id="older" href="older.php">80s Players</a>
			<a id="new" href="new.php">90s Players</a>
			<a id="recent" href="recent.php">Recent Players</a>
			</nav>
			</h3>
   
    </body>
</html>