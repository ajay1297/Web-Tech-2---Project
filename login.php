<?php 
 include("config.php");
 
if(isset($_POST['username'])){
    
   $username=$_POST['username'];
   $password=$_POST['password'];
    //echo $username;
    //echo $password;
   $sql="SELECT * FROM members WHERE username = '".$username."' AND password = '".$password."' limit 1";
    
   $result=mysqli_query($con , $sql);
   //echo $result;
   if(mysqli_num_rows($result)>0)
   {
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysqli_error($con));
      //echo $row["username"];
      //echo $row["password"];
      if($row["username"] == $username && $row["password"] == $password)
      {
         echo " You Have Successfully Logged in";
         exit();
      }
   } 
   else
   {
      echo " You Have Entered Incorrect Password";
      exit();
   }
        
   }
?>
