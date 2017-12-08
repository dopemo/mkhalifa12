<?php


    include '../dbConnection.php';
    $conn=dbConnection();
   $namedParameter=array();
   $namedParameter[':userid']=$_GET['id'];
    $sql="DELETE FROM `f_users` WHERE `f_users`.`userId` = :userid";
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameter);
   
   

?>