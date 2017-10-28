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
return $records;
         


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

    if(isset($_GET['logout']))
    {
        header("Location: index.php");
        exit();
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>admin Page</title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
            text-align:center;
        }
    </style>
    <body>
        <h1>TCP ADMIN PAGE</h1>
         <h2> Welcome <?=$_SESSION['adminFullName']?>! </h2>
         <form>
             <input type="submit" name="submit" value="submit"/>
             <input type="submit" name="logout" value="logout"/>
         </form>
          <form action="addUser.php">
            
            <input type="submit" value="Add new User" />
            
        </form>
        
        <hr>
        <?php
         
        $users =displayUsers();
        
        foreach($users as $user) {
            
            
            echo "[<a href='updateUser.php?userId=".$user['userId']."'>" . $user['firstName']  . " " . $user['lastName'] . " " . $user['userId'] . "</a> ]";
            echo "<br />";
           echo "<form action='deleteUser.php' style='display:inline' onsubmit='return confirmDelete(\"".$user['firstName']."\")'>
                     <input type='hidden' name='userId' value='".$user['userId']."' />
                     <input type='submit' value='Delete'>
                  </form>
                ";
            
            echo "<br />";
        }
        ?>
        <?=logout()?>
        

    </body>
</html>
