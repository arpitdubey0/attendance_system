<?php
// session_start();
// if(!isset($_SESSION["uname"]))
// {
//   header("location:../login.php");
//   unset($_SESSION['uname']);
// }   

    $con = mysqli_connect("localhost:3306", "root", "", "attendance_system") or
        die('Could not connect: ' . mysqli_error());
        
?>