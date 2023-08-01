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

    <title>Student Page</title>

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
                    <a href="sadd.php" class="btn btn-info">Add</a>
                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
                    <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <?php
                   $query="select * from student";
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
                                            <th>Admission No</th>
                                            <th>Name</th>
                                            <th>Roll No</th>
                                            <th>Branch name</th>
                                            <th>year</th>
                                            <th>Division</th>
                                            <th>Email</th>
                                            <th>semester</th>
                                            <th>Update</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Admission No</th>
                                            <th>Name</th>
                                            <th>Roll No</th>
                                            <th>Branch name</th>
                                            <th>year</th>
                                            <th>Division</th>
                                            <th>Email</th>
                                            <th>semester</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>

                                    </tfoot>
                                    <tbody>
                                        <?php 
                    while($row=$result->fetch_assoc()){
                      
                    ?>
                                        <tr>
                                            <td><?php echo $row['addmission_no']?></td>
                                            <td><?php echo $row['name']?></td>
                                            <td><?php echo $row['roll_no']?></td>
                                            <td><?php echo $row['branch_name']?></td>
                                            <td><?php echo $row['year']?></td>
                                            <td><?php echo $row['divison']?></td>
                                            <td><?php echo $row['email']?></td>
                                            <td><?php echo $row['semester']?></td>
                                            <td><a href="supdate.php?admissionid=<?php echo $row['addmission_no']?>"
                                                    class="btn btn-warning">Update</a></td>
                                            <td><a href="sdelete.php?admissionid=<?php echo $row['addmission_no']?>"
                                                    class="btn btn-info">Delete</a></td>
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


</body>

</html>