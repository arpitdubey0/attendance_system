

<?php
require("../config/config.php");

//   Delete Operation
 if(isset($_GET['semid']))
 {
    $id=$_GET['semid'];
    $query="delete from semester where sem_id='$id'";
    mysqli_query($con,$query);
    header("location:semester.php");
  }
 

?>