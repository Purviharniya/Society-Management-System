<?php

include('../../config.php');
if(isset($_SESSION['username']) && isset($_SESSION['role'])){
    if($_SESSION['role']=='admin'){
        if(isset($_POST['addflatarea-btn'])){

            //define the form input variables and extract their values
            $block = mysqli_escape_string($con,$_POST['block']);
            $fseries = mysqli_escape_string($con, $_POST['series']);
            $ftype = mysqli_escape_string($con,$_POST['flattype']);
            $farea = mysqli_escape_string($con,$_POST['area']);
            $rate = mysqli_escape_string($con,$_POST['rate']);

            // store in the database; check if error doesnt occur while storing

            // redirect to the form page again with success message or to the datatable page

            header("Location: ../add_flat_area.php");



        }
    }
}


?>