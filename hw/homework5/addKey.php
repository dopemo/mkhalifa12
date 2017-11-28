
<?php


include '../../dbConnection.php';
$conn = dbConnection();
$keyword = $_POST['keyword'];


$sql = "INSERT INTO `tc_keyword` (`keywordId`, `keyword`, `searchDate`) VALUES (NULL, '$keyword', CURRENT_TIMESTAMP)";


  
        
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
//$records = $stmt->fetchAll(PDO::FETCH_ASSOC);//expecting only one record

//print_r($record);

   
     //header("Location: index.html");






?>