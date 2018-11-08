<?php
   include("config.php");

   if(isset($_POST['username']))
   {
        $fullname = $_POST['fullname']; 
        $username = $_POST['username']; 
        $email = $_POST['email']; 
        $password = $_POST['password'];
        $sql = mysqli_query($con,"SELECT * FROM members WHERE username = '$_POST[username]' ") or die(mysqli_error($con));
        $row = mysqli_fetch_array($sql,MYSQLI_ASSOC) or die(mysqli_error($con)); 
        if($username == $row["username"])
        { 
            echo " Already registered";
            exit();
        } 
        $query = "INSERT INTO members (fullname,username,email,password) VALUES ('$fullname','$username','$email','$password')"; 
        $data = mysqli_query ($con,$query)or die(mysqli_error($con)); 
        if($data) 
        {
             echo "YOUR REGISTRATION IS COMPLETED..."; 
        }         
    }
?>
