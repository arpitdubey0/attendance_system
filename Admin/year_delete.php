

<?php
require("../config/config.php");

//   Delete Operation
 if(isset($_GET['yid']))
 {
    $id=$_GET['yid'];
    $query="delete from year where year_id='$id'";
    mysqli_query($con,$query);
    header("location:year.php");
  }
 

?>