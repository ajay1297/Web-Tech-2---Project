<?php 
 include("config.php");
 
if(isset($_POST['username'])){
    
   $username=$_POST['username'];
   $password=$_POST['password'];
    
   $sql="SELECT * FROM members WHERE username = '".$username."' AND password = '".$password."' limit 1";
    
   $result=mysqli_query($con , $sql) or die(mysqli_error($con));
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($con)); 

   if($row["username"] == $username && $row["password"] == $password)
   {
     echo " You Have Successfully Logged in";
     exit();
   }
   else
   {
      echo " You Have Entered Incorrect Password";
      exit();
   }
        
   }
?>