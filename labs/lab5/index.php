<?php
include '../../dbConnection.php';
$conn=dbConnection();
   function getDeviceTypes() {
    global $conn;
    $sql = "SELECT DISTINCT(deviceType)
            FROM `tc_device` 
            ORDER BY deviceType";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
        $namedParameters = array();
     foreach ($records as $record)
        {
            
            echo "<option> "  . $record['deviceType'] . "</option>";
            
        }
    }


//function displayDevices()
function displayDevices(){
    global $conn;
    
    $sql = "SELECT * FROM tc_device WHERE 1 ";
    
    
    
    if (isset($_GET['submit'])){
        
        $namedParameters = array();
        
        
         if (!empty($_GET['deviceName'])&&empty($_GET['deviceType'])) {
            
            //The following query allows SQL injection due to the single quotes
            //$sql .= " AND deviceName LIKE '%" . $_GET['deviceName'] . "%'";
            
            
                 $sql .= " AND deviceName LIKE :deviceName"; //using named parameters
                $namedParameters[':deviceName'] = "%" . $_GET['deviceName'] . "%";
            
            

         }
         
         if(!empty($_GET['deviceType'])&&empty($_GET['deviceName']))
         {
             $sql .= " AND deviceType = :dType";
             $namedParameters[':dType'] =  $_GET['deviceType'] ;
             
         }
         else 
         {
              $sql .= " AND deviceName LIKE :deviceName"; //using named parameters
            $namedParameters[':deviceName'] = "%" . $_GET['deviceName'] . "%";
         }
         
            
         
        
    }
     if($_GET['orderBy']=="name")
    {
                $sql .= " ORDER BY deviceName";
    }
     if($_GET['orderBy']=="price")
    {
                $sql .= " ORDER BY price";
     }
   
        
   
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
     foreach ($records as $record) {
        
        echo  $record['deviceName'] . " " . $record['deviceType'] . " " .
              $record['price'] .  "  " . $record['status'] . 
              "<a target='checkoutHistory' href='checkouthistory.php?deviceId=".$record['deviceId']."'> Checkout History </a> <br />";
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5: Device Search </title>
    </head>
    <body>
        
        <h1> Technology Center: Checkout System </h1>
         <link href="css/style.css" rel="stylesheet" type="text/css" />
        
        <form>
            Device: <input type="text" name="deviceName" placeholder="Device Name"/>
            Type: 
            <select name="deviceType">
                <option>Select One</option>
                <?=getDeviceTypes()?>
            </select>
            
            <input type="checkbox" name="available" id="available">
            <label for="available"> Available </label>
            
            <br>
            Order by:
            <input type="radio" name="orderBy" id="orderByName" value="name"/> 
             <label for="orderByName"> Name </label>
            <input type="radio" name="orderBy" id="orderByPrice" value="price"/> 
             <label for="orderByPrice"> Price </label>
            
            
            
            <input type="submit" value="Search!" name="submit" >
        </form>
        
        
        
        <hr>
        <h3>
        
        <?=displayDevices()?>
        
        
        
        <iframe name="checkoutHistory" width="400" height="400"></iframe>
        
        </h3>


    </body>
</html>

