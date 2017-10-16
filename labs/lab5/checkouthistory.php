<?php




function deviceHistory()
{
    
    include '../../dbConnection.php';
    $conn = dbConnection();
    
    
    $sql = "SELECT * 
            FROM tc_checkout 
            NATURAL JOIN tc_device
            NATURAL JOIN tc_user 
            WHERE deviceId = :deviceId";
    
    $namedParam = array(":deviceId"=>$_GET['deviceId']);
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParam);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record)
    {
        
        echo  $record['firstName'] . " " . $record['lastName'] . "<br />";
        
    }
    

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Checkout History</title>
    </head>
    <h1>CHECK OUT HISTORY</h1>
    <body>
    <?=deviceHistory()?>
    </body>
</html>