<?php


include '../dbConnection.php';
$conn = dbConnection();


$sql = "SELECT *
        FROM f_users
        WHERE username = :username"; 

$namedParameters = array();
$namedParameters[':username'] = $_GET['username'];
       
        
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record

//print_r($record);

echo json_encode($record);
?>
