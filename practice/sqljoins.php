<?php

        
        function getUsersAndDepartments(){
            global $dbConn;
            $sql="SELECT firstName, lastName, deptId FROM `tc_user` INNER JOIN tc_department ON tc_user.deptId=tc_department.departmentId";
            $stmt=$dbConn->prepare($sql);
            $stmt->execute();
           $records =$stmt ->fetchAll(PDO::FETCH_ASSOC);

    foreach($records as $record)
    {
        echo $record['firstName'] . ' '. $record['lastName'] . ' '. $record['deptname'] . '<br/>';
    }
                
        }
?>





<!DOCTYPE html>
<html>
    <head>
        <title>SQL Joins </title>
    </head>
    <body>
    <h2>Users and Their corresponding departments</h2>
    <?=getUsersAndDepartments()?>
    </body>
</html>