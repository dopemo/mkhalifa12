<?php

// data: {"fname":firstname,"lname":lastname,"userName":username},

    include '../dbConnection.php';
    $conn=dbConnection();
    $namedParameter=array();
   $namedParameter[':userId']=$_POST['userid'];
   $namedParameter[':firstname']=$_POST['fname'];
   $namedParameter[':lastname']=$_POST['lname'];
   $namedParameter[':username']=$_POST['userName'];
  
    $sql="UPDATE `f_users` SET `fname`= :firstname,`lname`= :lastname,`username`= :username WHERE `userId`= :userId ";
     
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameter);
   
   


?>