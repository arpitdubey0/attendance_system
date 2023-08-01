

<?php
require("../config/config.php");

//   Delete Operation
 if(isset($_GET['subid']))
 {
    $id=$_GET['subid'];
    $query="delete from subject where subject_id='$id'";
    mysqli_query($con,$query);
    header("location:subject.php");
  }
 

?>