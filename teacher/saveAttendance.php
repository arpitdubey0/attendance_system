<?php
include("../config/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include("sidebar.php");?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include("navbar.php");?>

                <!-- Begin Page Content -->
                <div class="container-fluid">




                    <?php
 if($_SERVER['REQUEST_METHOD'] =='POST') {
    $att=$_POST['attend'];
    $sub=$_POST['sub'];
    // echo $sub;

$date=date('Y-m-d');

// $sql = "select distinct att_date from attendance WHERE att_date='".$date."'";
//     $result = mysqli_query( $con,$sql);
//     $rowcount = mysqli_num_rows( $result);
//     if($rowcount>0){
//        echo  '<div  class="alert alert-danger" role="alert">
//        Attendance Already Taken !
//    </div>';
    
//  }
//  else{
   
    foreach($att as $key => $value){
        if($value==1){
            // echo $key;
            $querry= "INSERT INTO `attendance`(`add_no`, `present_absent`, `subject_name`) VALUES ('$key',$value,'$sub');";
            $insertResult =$con->query($querry);
        }
        elseif ($value==0) {
            $querry= "INSERT INTO `attendance`(`add_no`, `present_absent`, `subject_name`) VALUES ('$key',$value,'$sub');";
            $insertResult =$con->query($querry);
        }
    }
    if($insertResult){
        echo' <div  class="alert alert-success " role="alert">
        Attendance Taken Successfuly !
    </div>';
    }
    else{
        echo' <div  class="alert alert-danger " role="alert">
        Erroe Occured '.mysqli_error($con).' !
    </div>';
    }

//  }
}
?>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <a href="takeAttendaceForm.php" style="color:white;">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-left"></i>
                                </span>
                                <span class="text">Back</span>
                            </a>
                        </button>
                    </div>






                </div>
                <!-- /.container-fluid -->

            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
    var a = document.getElementById("myalert");
    a.style.display = "none";

    function myAlert(message, type) {
        a.innerHTML = message;
        a.classList.add(type);
        a.style.display = "flex";
    }
    </script>

</body>

</html>