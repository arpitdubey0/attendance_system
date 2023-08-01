<?php
require("../config/config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Attendance Page</title>

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


                    <h1>Dashboard</h1>
                    <!-- <a href="index.php"><button type="button" class="btn btn-primary">Add</button></a> -->
                    <a href="attd_add.php" class="btn btn-info">Add</a>
                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
                    <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <?php
                   $query="select * from attendance";
                   $result=mysqli_query($con,$query);
                   
                   if (!$result){
                    die("invalid query". mysqli_error());
                  }
               ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>

                                        <tr>
                                            <th>Addmission Number</th>
                                            <th>Attendance Date</th>
                                            <th>Prsent/Absent</th>
                                            <th>Subject name</th>                                    
                                            <th>Update</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Addmission Number</th>
                                            <th>Attendance Date</th>
                                            <th>Prsent/Absent</th>
                                            <th>Subject name</th>                                    
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>

                                    </tfoot>
                                    <tbody>
                                        <?php 
                    while($row=$result->fetch_assoc()){
                      
                    ?>
                                        <tr>
                                            <td><?php echo $row['add_no']?></td>
                                            <td><?php echo $row['att_date']?></td>
                                            <td>
                                            <?php
                                            if($row['present_absent']==1){
                                                echo "Present";

                                            }
                                            else{
                                                echo "Absent";
                                            }
                                            
                                            
                                            ?>  
                                        
                                        </td>
                                            <td><?php echo $row['subject_name']?></td>  
                                            <form action="attd_update.php" method="post">
                                                <input type="hidden" value="<?php echo $row['add_no']?>" name="addno">
                                                <input type="hidden" value="<?php echo $row['subject_name']?>" name="sub">
                                                <input type="hidden" value="<?php echo $row['att_date']?>" name="date">

                                               <td> <button type="submit" class="btn btn-warning">Update</button></td>

                                            </form>
                                            <form action="attd_delete.php" method="post">
                                                <input type="hidden" value="<?php echo $row['add_no']?>" name="addno">
                                                <input type="hidden" value="<?php echo $row['subject_name']?>" name="sub">
                                                <input type="hidden" value="<?php echo $row['att_date']?>" name="date">

                                               <td> <button type="submit" onclick="return checklogout()" class="btn btn-info">Delete</button></td>

                                            </form>


                                        </tr>
                                        <?php
                    }

                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>

  function checklogout(){
    return confirm("Are you sure you want to Delete this Record?")
  }
</script>


</body>

</html>