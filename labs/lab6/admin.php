<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("Location: index.php");
    exit();
}

function displayUsers()
{
    
include '../../dbConnection.php';
$conn=dbConnection();
$sql="SELECT * FROM `tc_user`";
$namedParameter=array();
 $stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
 foreach ($records as $record)
{
            
        echo $record['firstName'] . " " . $record['lastName'] . "user ID: " . $record['userId'] . "<br/>";
            
    }
         


}
function searchUser()
{
        include '../../dbConnection.php';
        $conn=dbConnection();
        $sql="SELECT * FROM `tc_user` WHERE 1";
    if(isset($_GET['submit']))
    {
        
        $sql .= " AND firstName LIKE :firstName OR lastName LIKE :firstName ";
        //using named parameters
        $namedParameters[':firstName'] = "%" . $_GET['firstName'] . "%";
        
            
        $namedParameter=array();
        $stmt = $conn->prepare($sql);
        $stmt->execute($namedParameters);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record)
        {
                    
             echo $record['firstName'] . "  " . $record['lastName'] . " user ID: " . $record['userId'] . "<br/>";
            
        }
         
        
    }
        
    
}
function logout()
{
    if(isset($_GET['logout']))
    {
        header("Location: index.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>admin Page</title>
    </head>
    <body>
        <h1>TCP ADMIN PAGE</h1>
         <h2> Welcome <?=$_SESSION['adminFullName']?>! </h2>
         <form>
             <input type="text" name="firstName" placeholder="searchuser"/>
             <input type="submit" name="submit" value="submit"/>
             <input type="submit" name="logout" value="logout"/>
         </form>
        
        <hr>
        <?php
        echo "<strong>SEARCHED FOR:  " . $_GET['firstName']. "</strong><br>";
        echo "results: <br>";
        ?>
        <?=searchUser()?>
        <?=logout()?>
        

    </body>
</html>