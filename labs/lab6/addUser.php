<?php
include '../../dbConnection.php';
$conn=dbConnection();

function getDepartmentInfo(){

global $conn;
$sql="SELECT deptName, departmentId FROM tc_department ORDER BY deptName";
$namedParameter=array();
 $stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $records;
return $records['deparmentId'];
}
function addUser(){
if(isset($_GET['addUserForm']))
{
    global $conn;
    $firstName=$_GET['firstName'];
    $lastName=$_GET['lastName'];
    $email=$_GET['email'];
    $universityId=$_GET['universityId'];
    $phone=$_GET['phone'];
    $gender=$_GET['gender'];
    $role=$_GET['role'];
    $depId=$_GET['depId'];
    $sql="INSERT INTO tc_user (firstName,lastName,email,universityId,phone,gender,role,deptId)
    VALUES(:fName,:lName,:email,:universityId,:phone,:gender,:role,:deptId)";
    $namedParameter=array();
    $namedParameter[':fName']=$firstName;
    $namedParameter[':lName']=$lastName;
    $namedParameter[':email']=$email;
    $namedParameter[':universityId']=$universityId;
    $namedParameter[':phone']=$phone;
    $namedParameter[':gender']=$gender;
    $namedParameter[':role']=$role;
    $namedParameter[':deptId']=$depId;
    $stmt=$conn->prepare($sql);
    $stmt->execute($namedParameter);
    
    
    //"INSERT INTO `tc_user`(`userId`, `firstName`, `lastName`, `email`, `universityId`, `gender`, `phone`, `role`, `deptId`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9]) "
    
}

}


?>




<!DOCTYPE html>
<html>
    <head>
        <title> Admin: Adding New User </title>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
            text-align:center;
        }
    </style>
    <body>

    <h1> Admin Section </h1>
    <h2> Adding New Users </h2>

    <fieldset>
        
        <legend> Add New User </legend>
        
        <form>
            
            First Name: <input type="text" name="firstName"/> <br>
            Last Name: <input type="text" name="lastName"/> <br>
            Email: <input type="text" name="email"/> <br>
            University Id: <input type="text" name="universityId"/> <br>
            Phone: <input type ="text" name="phone"/><br>
            Gender: <input type="radio" name="gender" value="F" id="genderF" required/>
                    <label for="genderF">Female</label>
                    <input type="radio" name="gender" value="M" id="genderM" required/> 
                    <label for="genderM">male</label>
            Role: <select name="role">
                <option value="">Select one</option>
                <option value="Facualty">Facualty</option>
                <option value="Student">Student</option>
                <option value="Staff">Staff</option>
                </select>
            Department: <select name="depId">
                <option value=""> Select One</option>
                <?php
              $departments = getDepartmentInfo();
                                foreach ($departments as $record) {
                                    echo "<option value='$record[departmentId]'>$record[deptName]</option>";
                                }
                ?>
                </select>
                <input type="submit" name="addUserForm" value="Add User!"/>
                
            
        </form>
        
    </fieldset>

    <?=addUser()?>
    </body>
</html>