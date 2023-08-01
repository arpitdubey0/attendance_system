

<?php
require("../config/config.php");

//   Delete Operation
 if(isset($_GET['bid']))
 {
    $id=$_GET['bid'];
    $query="
    delete from branch where branch_id='$id'";
    mysqli_query($con,$query);
    header("location:branch.php");
  }
 

?>