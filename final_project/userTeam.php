<?php


include '../dbConnection.php';
$conn = dbConnection();
$namedParameters = array();
$namedParameters[':id'] = $_GET['id'];


$sql = "SELECT * FROM `player_picks` WHERE username = :id"; 





       
        
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetchAll(PDO::FETCH_ASSOC);//expecting only one record

echo json_encode($record);
?>