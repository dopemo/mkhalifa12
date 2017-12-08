<?php
include 'header.php';
?>
<style>

    form{
        text-align:center;
    }
    
    h1{
        text-align:center;
    }
</style>
<h1>Please Enter Commissioner credentials</h1>
        <form method="POST" action="loginProcess.php">
            
            
            Username:<input type="text" name="username"/>
            <br>
            Password:<input type="password" name="password"/>
            <br>
            
            <input type="submit" name="login" value="Login"/>
        </form>