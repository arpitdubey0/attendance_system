

<?php
require("../config/config.php");

//   Delete Operation
 if(isset($_GET['divid']))
 {
    $id=$_GET['divid'];
    $query="delete from divison where div_id='$id'";
    mysqli_query($con,$query);
    header("location:division.php");
  }
 

?>