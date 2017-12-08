<?php
include '../dbConnection.php';
$conn = dbConnection();


$sql = "INSERT INTO `player_picks` (`pickId`, `playerId`, `userId`, `username`,  `playerName`) VALUES (NULL, :playerId, :userId, :username,  :playername)";
$namedParameters = array();
$namedParameters[':playerId'] = $_POST['playerId'];
$namedParameters[':userId'] = $_POST['userid'];
$namedParameters[':username'] = $_POST['username'];
$namedParameters[':playername'] = $_POST['playerName'];


$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
?>