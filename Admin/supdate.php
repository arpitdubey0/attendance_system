<?php
require("../config/config.php");

if(isset($_GET['admissionid']))
{
    $id=$_GET['admissionid'];
    $query="select * from student where addmission_no='$id'";
    $row=mysqli_query($con,$query);
    $record=mysqli_fetch_array($row);


}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper">
        <div class="inner">
            <form method="post" action="">
                <h3>Update student info</h3>
                <div class="form-group">
                    <input type="text" name="admission" value="<?php echo $record['addmission_no'] ?>" class="form-control">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="name" value="<?php echo $record['name'] ?>" class="form-control">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="rollno" value="<?php echo $record['roll_no'] ?>" class="form-control">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="branch" value="<?php echo $record['branch_name'] ?>" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="year" value="<?php echo $record['year'] ?>" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="divison" value="<?php echo $record['divison'] ?>" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="email" name="email" value="<?php echo $record['email'] ?>" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="semester" value="<?php echo $record['semester'] ?>" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
            
                <button value="submit" name="submit">Update
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>

<?php
if(isset($_POST['submit']))
{
    $userId=$_POST['admission'];
    $userName=$_POST["name"];
    $Rollno=$_POST["rollno"];
    $Branch=$_POST["branch"];
    $Year=$_POST["year"];
    $Divison=$_POST["divison"];
    $Email=$_POST["email"];
    $Semester=$_POST["semester"];
    $query="update student set name='$userName',roll_no='$Rollno',branch_name='$Branch',year='$Year',
    divison='$Divison',email='$Email',semester='$Semester' where addmission_no='$userId'";
    mysqli_query($con,$query);
    header("location:student.php");

}

?>

</body>

</html>

<!-- Styling Css -->
<style>
@font-face {
    font-family: "Poppins-Regular";
    src: url("../fonts/poppins/Poppins-Regular.ttf");
}

@font-face {
    font-family: "Poppins-SemiBold";
    src: url("../fonts/poppins/Poppins-SemiBold.ttf");
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    font-family: "Poppins-Regular";
    color: #333;
    font-size: 13px;
    margin: 0;
}

input,
textarea,
select,
button {
    font-family: "Poppins-Regular";
    color: #333;
    font-size: 13px;
}

p,
h1,
h2,
h3,
h4,
h5,
h6,
ul {
    margin: 0;
}


ul {
    padding-left: 0;
    margin-bottom: 0;
}

a:hover {
    text-decoration: none;
}

:focus {
    outline: none;
}

.wrapper {
    min-height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
}

.inner {
    border-radius:10px;
    padding: 40px;
    background: maroon;
    max-width: 850px;
    margin: auto;
    display: flex;
}



.inner form {
    background: #fff;
    border-radius: 10px;
    border: 1px solid #333;
    width: 100%;
    padding-top: 36px;
    padding-left: 45px;
    padding-right: 45px;
}

.inner h3 {
    text-transform: uppercase;
    font-size: 25px;
    font-family: "Poppins-SemiBold";
    text-align: center;
    margin-bottom: 28px;
}

.form-group {
    display: flex;
}

.form-group input {
    width: 100%;
}



.form-wrapper {
    position: relative;
}

.form-wrapper i {
    position: absolute;
    bottom: 9px;
    right: 0;
}

.form-control {
    border-color: 1px solid #333;
    border-top: none;
    border-right: none;
    border-left: none;
    display: block;
    width: 100%;
    height: 30px;
    padding: 0;
    margin-bottom: 25px;
}


.form-control::-moz-placeholder {
    font-size: 13px;
    color: #333;
    font-family: "Poppins-Regular";
}

.form-control:-ms-input-placeholder {
    font-size: 13px;
    color: #333;
    font-family: "Poppins-Regular";
}

.form-control:-moz-placeholder {
    font-size: 13px;
    color: #333;
    font-family: "Poppins-Regular";
}

select {
    -moz-appearance: none;
    -webkit-appearance: none;
    cursor: pointer;
    padding-left: 20px;
}

select option[value=""][disabled] {
    display: none;
}

button {
    border: none;
    width: 164px;
    height: 51px;
    margin: 40px;
    /* margin-top: 40px; */
    margin-bottom: 20px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    background: #333;
    font-size: 15px;
    color: #fff;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
}

button i {
    margin-left: 10px;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
}

button:hover i,
button:focus i,
button:active i {
    -webkit-animation-name: hvr-icon-wobble-horizontal;
    animation-name: hvr-icon-wobble-horizontal;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
}

@-webkit-keyframes hvr-icon-wobble-horizontal {
    16.65% {
        -webkit-transform: translateX(6px);
        transform: translateX(6px);
    }

    33.3% {
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px);
    }

    49.95% {
        -webkit-transform: translateX(4px);
        transform: translateX(4px);
    }

    66.6% {
        -webkit-transform: translateX(-2px);
        transform: translateX(-2px);
    }

    83.25% {
        -webkit-transform: translateX(1px);
        transform: translateX(1px);
    }

    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes hvr-icon-wobble-horizontal {
    16.65% {
        -webkit-transform: translateX(6px);
        transform: translateX(6px);
    }

    33.3% {
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px);
    }

    49.95% {
        -webkit-transform: translateX(4px);
        transform: translateX(4px);
    }

    66.6% {
        -webkit-transform: translateX(-2px);
        transform: translateX(-2px);
    }

    83.25% {
        -webkit-transform: translateX(1px);
        transform: translateX(1px);
    }

    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@media (max-width: 1199px) {
    .wrapper {
        width: auto;
        background-position: center;
    }
}

@media (max-width: 991px) {
    .inner form {
        width: auto;
        padding-top: 10px;
        padding-left: 20px;
        padding-right: 20px;
    }
}

@media (max-width: 767px) {

    /* .inner {
    display: block; } */
    /* .inner .image-holder {
      width: 100%; } */
    .inner form {
        width: 50%;
        padding: 40px 10px 30px;
    }

    button {
        margin-left: 20px;
        margin-top: 60px;
    }
}
</style>

