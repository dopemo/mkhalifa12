<?php
include '../dbConnection.php';
function displayUsers()
{
    

$conn=dbConnection();

$sql="SELECT * FROM `tc_user`";
$namedParameter=array();
 $stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($records); 
         


}

if($_SERVER['REQUEST_METHOD']=="GET"){
   displayUsers();
   if($_GET['url']=="auth"){
       
       
   }
   else if($_GET['url']=="users"){
       
   }
}
else if($_SERVER['REQUEST_METHOD']=="POST")
{
   if($_GET['url']=="auth")
   {
        $postBody=file_get_contents("php://input");
        echo $postBody;
       
       
   }
}
else
{
    http_response_code(405);
}


?>