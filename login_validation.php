


<?php

require("config/config.php");


if($_SERVER["REQUEST_METHOD"] == "POST")
{
 // username and password sent from form 
   $myusername=mysqli_real_escape_string($con,$_POST['admin_username']); 
   $mypassword=mysqli_real_escape_string($con,$_POST['admin_pass']); 

   $sql="SELECT * FROM users WHERE email_id='$myusername' and pass='$mypassword'";
   $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
   $active=$row['active'];

   $count=mysqli_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count==1)
  {
   session_register("myusername");
   $_SESSION['login_user']=$myusername;

   header("location:Admin/index.php");
  }
  else 
  {
  $error="Your Login Name or Password is invalid";
  }
}
?>
