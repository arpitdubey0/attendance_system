<?php
include("../config/config.php");
$year = mysqli_query($con,"select * from year order by year_id");
$branch = mysqli_query($con,"select * from branch order by brinch_id");
$sem = mysqli_query($con,"select * from semester order by sem_id");
$div = mysqli_query($con,"select * from divison order by div_id");
// $dept= mysqli_query($mysql,"select dept_name from department");
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
                    <div class="col-xl-12 col-lg-7">
                        <div class="card shadow mb-4">

                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-danger">Get Student Details</h6>


                                <!-- <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> -->
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <form action="studentDetails.php" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Select Year</label>
                                            <select name="year" class="form-control" id="textboxid">
                                                <?php
                                  echo ' <option value="">None</option>';

                                
                                                while($myres=mysqli_fetch_array($year)){
                                                  
                                                    echo '<option>'.$myres['year_name'].'</option>';
                
                                                }
                                
                                                ?>
                                            </select>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Select Branch</label>
                                            <select required name="branch" class="form-control" id="textboxid">
                                                <?php
                                 echo ' <option value="">None</option>';
                                                while($myres=mysqli_fetch_array($branch)){
                                                   
                                                    echo '<option>'.$myres['branch_name'].'</option>';
                
                                                }
                                                
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Select Semester</label>
                                            <select required name="sem" class="form-control" id="textboxid">
                                                <?php
                                 echo ' <option value="">None</option>';
                                                while($myres=mysqli_fetch_array($sem)){
                                                   
                                                    echo '<option>'.$myres['semester_name'].'</option>';
                
                                                }
                                
                                                ?>
                                            </select>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Select Divison</label>
                                            <select required name="div" class="form-control" id="textboxid">
                                                <?php
                                echo ' <option value="">None</option>';
                                                while($myres=mysqli_fetch_array($div)){
                                                    
                                                    echo '<option>'.$myres['div_name'].'</option>';
                
                                                }
                                                
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">get details</span>
                                        </button>
                                    </div>

                                </form>
                                <!-- <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas id="myAreaChart" width="824" height="320" style="display: block; width: 824px; height: 320px;" class="chartjs-render-monitor"></canvas>
                                    </div> -->
                            </div>
                        </div>
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

</body>

</html>