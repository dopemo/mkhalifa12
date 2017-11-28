
<?php


include '../../dbConnection.php';
$conn = dbConnection();


$sql = "SELECT *
        FROM tc_keyword"; 

       
        
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);//expecting only one record

//print_r($record);

    echo json_encode($records);
     //header("Location: index.html");






?>