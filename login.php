<?php

//include("config.php"); //to access the db connection and setting session if validation returns true
//include("./admin/includes/handlers/login.php"); //write admin validations, functions, etc in this file
//include("./user/includes/handlers/login.php"); //write user validations,functions etc in this file

session_start();
//session_unset();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Custom fonts for this template-->
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="vendor/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link href="vendor/css/login.css" eet" type="text/css"> -->
    <link rel="stylesheet" href="vendor/css/login.css" type="text/css">

    <!-- Custom styles for this page -->
    <link href="vendor/css/fonts.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper" class="login-wrapper">
        <div class="container forms-section mb-4">
            <div class="col-sm-8 ml-auto mr-auto form-container-l1">
                <ul class="nav nav-pills nav-fill " id="pills-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active linker" id="pills-user-tab" data-toggle="pill"
                            href="#pills-user" role="tab" aria-controls="pills-user" aria-selected="true">User</a> </li>
                    <li class="nav-item"> <a class="nav-link linker" id="pills-admin-tab" data-toggle="pill"
                            href="#pills-admin" role="tab" aria-controls="pills-admin" aria-selected="false">Admin</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link linker" id="pills-security-tab" data-toggle="pill"
                            href="#pills-security" role="tab" aria-controls="pills-security"
                            aria-selected="false">Security</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-user" role="tabpanel"
                        aria-labelledby="pills-user-tab">
                        <div class="col-sm-12 border border-dark shadow rounded pt-2">

                            <?php
if (!isset($_SESSION["otp"])) {
    include './user/login.php';
} else {
    include './user/verify.php';

}
?>
                        </div>
                    </div>
                    <div class="tab-pane fade admin-section" id="pills-admin" role="tabpanel"
                        aria-labelledby="pills-admin-tab">
                        <div class="col-sm-12 border border-dark shadow rounded pt-2">
                            <?php include './admin/login.php'?>
                        </div>
                    </div>
                    <div class="tab-pane fade security-section" id="pills-security" role="tabpanel"
                        aria-labelledby="pills-security-tab">
                        <div class="col-sm-12 border border-dark shadow rounded pt-2">
                            <?php include './security/login.php'?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="vendor/js/sb-admin-2.js"></script>

</body>

</html>