<?php
include '../dbConnection.php';
$conn = dbConnection();





$sql = "INSERT INTO `f_players` (`playerId`, `p_fname`, `p_lname`, `fantasy score`, `position`) VALUES (NULL, :firstname, :lastname, :fScore, :position)";
$namedParameters = array();
$namedParameters[':firstname'] = $_POST['fname'];
$namedParameters[':lastname'] = $_POST['lname'];
$namedParameters[':fScore'] = $_POST['fscore'];
$namedParameters[':position'] = $_POST['p_position'];


$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
?>