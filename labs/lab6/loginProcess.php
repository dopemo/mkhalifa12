

<?php
session_start();
include '../../dbConnection.php';
$conn=dbConnection();
$username=$_POST['username'];
$password=sha1($_POST['password']);
$sql="SELECT * FROM tc_admin
WHERE username = :username
AND password = :password";
$namedParameter=array();
$namedParameter[':username']=$username;
$namedParameter[':password']=$password;
$stmt=$conn->prepare($sql);
$stmt->execute($namedParameter);
$record=$stmt->fetch(PDO::FETCH_ASSOC);

if(empty($record)){
    echo $username . "was not found in database!";
    
}
else{
    //echo "right credentials";
    //new page
    $_SESSION['username']=$record['username'];
    $_SESSION['adminFullName']=$record['firstName'] . " " . $record['lastName'];
    header("Location: admin.php");
    
}
?>