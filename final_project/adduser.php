<?php
include '../dbConnection.php';
$conn = dbConnection();



$sql = "INSERT INTO `f_users` (`userId`, `fname`, `lname`, `username`) VALUES (NULL, :firstname, :lastname, :username)";
$namedParameters = array();
$namedParameters[':firstname'] = $_POST['fname'];
$namedParameters[':lastname'] = $_POST['lname'];
$namedParameters[':username'] = $_POST['username'];


$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
?>