

<?php
require("../config/config.php");

//   Delete Operation
 if(isset($_GET['admissionid']))
 {
    $id=$_GET['admissionid'];
    $query="delete from student where addmission_no='$id' ";
    mysqli_query($con,$query);
    header("location:student.php");
  }
 

?>