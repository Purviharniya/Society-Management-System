<?php

include('../../config.php');
if(isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role']=="admin")
{
    if(isset($_POST['addflatarea-btn'])){

        //define the form input variables and extract their values
        $block = mysqli_escape_string($con,$_POST['block']);
        $fseries = mysqli_escape_string($con, $_POST['series']);
        $ftype = mysqli_escape_string($con,$_POST['flattype']);
        $farea = mysqli_escape_string($con,$_POST['area']);
        $rate = mysqli_escape_string($con,$_POST['rate']);
        $timestamp = date("Y-m-d H:i:s");
        // $added_by = $_SESSION['username'];
        $added_by = 'admin1';
        
        // echo "hi";

        // store in the database; check if error doesnt occur while storing
        $query="INSERT INTO flatarea(`FlatAreaID`, `Block Number`, `Flat Series`, `Flat Area`, `Flat Type`, `Added by`, `Created At`, `Updated At`) VALUES ('' , $block , $fseries , $farea , $ftype , $added_by , $timestamp , $timestamp )";
        mysqli_query($con,$query);

        // redirect to the form page again with success message or to the datatable page
        header("Location: ../add_flat_area.php?success=true");

    }
}


?>