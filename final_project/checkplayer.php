<?php


include '../dbConnection.php';
$conn = dbConnection();


$namedParameters = array();
$namedParameters[':fname'] = $_GET['firstname'];
$namedParameters[':lname'] = $_GET['lastname'];
$sql = "SELECT * FROM `f_players` WHERE `p_fname`= :fname AND `p_lname`= :lname"; 




       
        
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record

echo json_encode($record);
?>