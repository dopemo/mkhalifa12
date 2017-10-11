<?php
function db_talk(){
         $host='localhost';
         $dbname='tcp';
         $username='root';
         $password="";
         $dbConn= new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $totalRows = $dbConn->query('SELECT * FROM tc_user')->fetchColumn(); 
            echo  $totalRows . "<br><br>";
}
        
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5: Device Search </title>
    </head>
    <body>
       <h1> Technology Center: Checkout System</h1>
       <form>
           <input type="text" name="deviceName" placeholder="Device Name"/>
           Type
           <select name="deviceType">
               <options>Tablets</options>
           </select>
       </form>

    </body>
</html>