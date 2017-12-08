<?php
include 'header.php';

         
?>
<script>
    function moveToIndex()
    {        var firstName;
            var lastName;
           
            var userName;
        
            firstName=$("#firstName").val();
            lastName=$("#lastName").val();
            userName=$("#userName").val();
        
        $.ajax({
         
            type: 'POST',
             data:{"fname":firstName,"lname":lastName,"username":userName},
            url:"index.php",
           
            success: function(data){
                console.log(data);
                
                
            }
            
        });
        
    }

   function checkUserName(){
    
            var firstName;
            var lastName;
           
            var userName;
            firstName=$("#firstName").val();
            lastName=$("#lastName").val();
            userName=$("#userName").val();
            if(userName.length!=0&&firstName.length!=0&&lastName.length!=0)
            {
           
        $.ajax({
            type: 'POST',
             data:{"fname":firstName,"lname":lastName,"username":userName},
            url:"adduser.php",
           
            success: function(data){
                console.log(data);
                document.getElementById("info").innerHTML+="<br>Welcome "+userName;
                 moveToIndex();
                 event.preventDefault(); 
                var url = $(this).data('target');
                location.replace("index.php");
                
            }
            
        });
            }
            else{
                 document.getElementById("test").innerHTML="please fill out all fields";
                 console.log("please fill out all fields")
            }
                
            }
        
            
   

$(document).ready(function() {
        $('button').click(function() {
            var firstName;
            var lastName;
             document.getElementById("test").innerHTML="";
            
           
            var userName;
            firstName=$("#firstName").val();
            lastName=$("#lastName").val();
            userName=$("#userName").val();
            if(userName.length!=0&&firstName.length!=0&&lastName.length!=0)
            {
        //alert("hello")
        $.ajax({

            type: "GET",
            url: "checkuName.php",
            dataType: "json",
            data: {"username": $("#userName").val()},
            success: function(data,status) {
                var available;
                available=" ";
                
               //alert(data);
               
               
               if (!data) {
                   available="username Available";
                   checkUserName();
                   
                 
                   
               } else {
                   available="username not Available";
                   
               }
              document.getElementById("info").innerHTML=available;
               
               
               
            
            
            },
            complete: function(data,status) { //optional, used for debugging purposes
            //alert(status);
            }
            
            });
            }
            else{
                document.getElementById("test").innerHTML="please fill out all fields";
                 console.log("please fill out all fields")
                
            }//ajax
});
});
</script>
<style>
    body{
        text-align:center;
        font-style:italic;
    }
    #test{
        color:red;
    }
</style>
<fieldset>
        
        <legend> Profile info </legend>
            
            First Name* <input type="text" id="firstName"/> <br>
            Last Name* <input type="text" id="lastName"/> <br>
            Username* <input type="text" id="userName"/> <br>
             <button>signUp!</button>
             
          
                
            
        </form>
         </fieldset>
          <div id="info">
              
          </div>
          <div id="test">
              
          </div>
        