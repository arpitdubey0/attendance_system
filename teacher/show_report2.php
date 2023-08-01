<?php
include("../config/config.php");

$Year=$_POST["year"];
$Branch=$_POST["branch"];
$Div=$_POST["div"];
$subject=$_POST["subject"];
$fdate=$_POST["form_date"];
$tdate=$_POST["to_date"];

$sql = "Select add_no,name,count(*)'PresentDays' FROM attendance INNER JOIN student ON attendance.add_no = student.addmission_no WHERE present_absent=1 and  att_date between '".$fdate."' and '".$tdate."' and attendance.subject_name='".$subject."' GROUP BY attendance.add_no;";
    
$Total_Lecture = mysqli_query($con,"Select DISTINCT count(*)'Total Lectures' FROM attendance INNER JOIN student ON attendance.add_no = student.addmission_no WHERE student.year='".$Year."' and branch_name='".$Branch."' and divison='".$Div."' and att_date between '".$fdate."' and '".$tdate."' and attendance.subject_name='".$subject."' GROUP BY attendance.add_no;");

$result = mysqli_query($con,$sql);

$Total_Lecture_count = mysqli_fetch_array($Total_Lecture)["Total Lectures"];



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
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>  


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
                 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-danger">Attendance Report</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Roll No</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Present / Total</th>
                                        <th>Percentage</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    <?php
                                   while($row = mysqli_fetch_array($result)){
                                    $percentage=($row["PresentDays"]*100)/$Total_Lecture_count;
                                        echo "
                                            <tr>
                                                <td>" . $row["add_no"] . "</td>
                                                <td>" . $row["name"] . "</td>
                                                <td>" . $subject . "</td>
                                                <td><b>" . $row["PresentDays"] ." </b>/ " . $Total_Lecture_count . "</td>
                                                <td>" . number_format((float)$percentage, 2, '.', '') . " %</td>
                                            </tr>
                                        ";
                                }
                            


                                    ?>

                                   </tbody>
                                </table>
                                <div class="text-center">
                                        <button type="button" id="export_button1" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-down"></i>
                                            </span>
                                            <span class="text">Download Pdf</span>
                                        </button>
                                        <button type="button" id="export_button" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-down"></i>
                                            </span>
                                            <span class="text">Download Excel</span>
                                        </button>
                                    </div>
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
    <script>
    function html_table_to_excel(type) {
            var c = 'Attendance.';
            console.log(c);

            var data = document.getElementById('dataTable');

            var file = XLSX.utils.table_to_book(data, { sheet: "sheet1" });

            XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

            XLSX.writeFile(file, c + type);
        }

        const export_button = document.getElementById('export_button');

        export_button.addEventListener('click', () => {
            html_table_to_excel('xlsx');
        });

        function generate() {  
    var doc = new jsPDF('p', 'pt', 'letter');  
    var htmlstring = '';  
    var tempVarToCheckPageHeight = 0;  
    var pageHeight = 0;  
    pageHeight = doc.internal.pageSize.height;  
    specialElementHandlers = {  
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function(element, renderer) {  
            // true = "handled elsewhere, bypass text extraction"  
            return true  
        }  
    };  
    margins = {  
        top: 150,  
        bottom: 60,  
        left: 40,  
        right: 40,  
        width: 600  
    };  
    var y = 20;  
    doc.setLineWidth(2);  
    doc.text(200, y = y + 30, "<?php echo $Year.' - '.$Branch.' - '.$Div.'.' ;?>");  
    doc.text(200, y = y + 18, "<?php echo $fdate.' To '.$tdate.'.' ;?>");  
    
    doc.autoTable({  
        html: '#dataTable',  
        startY: 80,  
        theme: 'grid',  
        columnStyles: {  
            0: {  
                cellWidth: 150,  
            },  
            1: {  
                cellWidth: 150,  
            },  
            2: {  
                cellWidth: 150,  
            }  
        },  
        styles: {  
            minCellHeight: 20  
        }  
    })  
    doc.save('Attendance.pdf');  
}
        const export_buttonpdf = document.getElementById('export_button1');

        export_buttonpdf.addEventListener('click', () => {
            generate();
        });
    </script>
</body>

</html>