

<?php
require("../config/config.php");

//   Delete Operation
 if(isset($_POST['addno']))
 {
  $id=$_POST['addno'];
  $date=$_POST['date'];
  $sub=$_POST['sub'];
 
  $query="delete from attendance where add_no='$id' and subject_name='$sub' and att_date='$date'";
  $row=mysqli_query($con,$query);
  

    header("location:attendance.php");
  }
 

?>