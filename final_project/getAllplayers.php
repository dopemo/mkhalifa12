<?php


include '../dbConnection.php';
$conn = dbConnection();



$sql = "SELECT * FROM `f_players` WHERE playerId = :id"; 
$namedParameters = array();
$namedParameters[':id'] = $_GET['id'];




       
        
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetchAll(PDO::FETCH_ASSOC);//expecting only one record

echo json_encode($record);
?>