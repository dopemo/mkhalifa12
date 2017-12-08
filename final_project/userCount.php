 <?php
 include '../dbConnection.php';
 $conn=dbConnection();
    $sql="SELECT COUNT(*) FROM `f_players`";
     $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);
    json_encode($records);
    echo $records;
?>