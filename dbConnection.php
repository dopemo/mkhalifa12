<?php
function dbConnection()
{
    $host='localhost';
         $dbname='tcp';
         $username='root';
         $password="";
         //
        
        if(strpos($_SERVER['HTTP_HOST'],'herokuapp')!==false){
            $url=parse_url(getenv("CLEARDB_DATABASE_URL"));
            $host=$url["host"];
            $dbname=substr($url["path"],1);
            $username=$url["user"];
            $password=$url["pass"];
        }
       $dbConn= new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
      
       
        
        
}    
?>