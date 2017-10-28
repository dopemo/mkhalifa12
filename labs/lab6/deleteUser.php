<?php
include ("../../dbConnection.php");
$conn=dbConnection();
$sql="DELETE FROM tc_user 
            WHERE userId = " . $_GET['userId'];
$stmt=$conn->prepare($sql);
$stmt->execute();
header("Location: admin.php");


?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>