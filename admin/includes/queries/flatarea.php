<?php

include('../../../config.php');
// if(isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role']=="admin")
// {
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

        $check_query = "SELECT * from flatarea where BlockNumber='" . $block . "' AND FlatSeries=" . $fseries . ";";
        $check_res = mysqli_query($con, $check_query);

        if(mysqli_num_rows($check_res) !=0){
            $_SESSION['error_message'] = "<strong>Failure!</strong> Record for this series and block already exists!";
            header("Location: ../../add_flat_area.php");
            exit();

        }
        else{
        // store in the database; check if error doesnt occur while storing
        $query="INSERT INTO flatarea(`FlatAreaID`, `BlockNumber`, `FlatSeries`, `FlatArea`, `FlatType`, `Ratepsq` , `Updatedby`, `UpdatedAt`) VALUES ('' , '$block' , '$fseries' , '$farea' , '$ftype' , '$rate' , '$added_by' , '$timestamp' )";
        mysqli_query($con,$query);

        //Start the session if already not started.
        $_SESSION['success_message'] = "<strong>Success!</strong> Area added successfully!";
        
        // redirect to the form page again with success message or to the datatable page
        header("Location: ../../add_flat_area.php");
        exit();
        }
    }
// }


?>