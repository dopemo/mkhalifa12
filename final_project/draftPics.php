<?php


include '../dbConnection.php';
$conn = dbConnection();


$namedParameters = array();
$namedParameters[':playerId'] = $_GET['id'];

$sql = "SELECT * FROM `player_picks` WHERE `playerId`= :playerId"; 




       
        
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record

echo json_encode($record);
?>