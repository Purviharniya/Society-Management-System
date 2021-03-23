<?php

include '../../../config.php';

if (isset($_POST['addvisitors-btn'])) {

    //define the form input variables and extract their values
    $vname = mysqli_escape_string($con, $_POST['name']);
    $contactno = mysqli_escape_string($con, $_POST['contact']);
    $altcontactno = mysqli_escape_string($con, $_POST['contact1']);
    $block = mysqli_escape_string($con, $_POST['block']);
    $flatno = mysqli_escape_string($con, $_POST['fno']);

    $whomtomeet = mysqli_escape_string($con, $_POST['whomToMeet']);
    $reasontomeet = mysqli_escape_string($con, $_POST['reasonToMeet']);
    $timestamp = date("Y-m-d H:i:s");
    // $added_by = $_SESSION['username'];
    $added_by = 'admin1';
    echo $timestamp;
    echo "\n";
    echo $vname."  ".$contactno."  ".$altcontactno."  " .$block. "  ", $flatno." ".$whomtomeet." ".$reasontomeet;
    

    // $check_query = "SELECT * from flatarea where BlockNumber='" . $block . "' AND FlatSeries=" . $fseries . ";";
    // $check_res = mysqli_query($con, $check_query);

    //CONDITION PENDING
    // if (mysqli_num_rows($check_res) != 0) {
    //     $_SESSION['error_message'] = "<strong>Failure!</strong> Record for this series and block already exists!";
    //     header("Location: ../../add_flat_area.php");
    //     exit();

    // } else {
        // store in the database; check if error doesnt occur while storing
        $query = "INSERT INTO visitors(`VisitorID`,`FlatID`, `VisitorName`,`VisitorContactNo`,`AlternateVisitorContactNo`,`BlockNumber`, `FlatNumber`, `WhomToMeet`, `ReasonToMeet`, `updated_by`, `updated_at`) VALUES ('' ,'','$vname' , '$contactno' , ' $altcontactno' , '$block' , '$flatno' ,'$whomtomeet' ,'$reasontomeet','$added_by' , '$timestamp' )";
    
        echo "\n".$query;
        echo "\n";
        if(mysqli_query($con, $query)){
            echo "Visitor Added successfully\n";
            //Start the session if already not started.
            $_SESSION['success_message'] = "<strong>Success!</strong> Visitor added successfully!";

            // redirect to the form page again with success message or to the datatable page
            header("Location: ../../add_visitors.php");

            exit();
        
        } else{
            $_SESSION['error_message'] = "<strong>Failure!</strong>Could not able to execute the query!";
            header("Location: ../../add_visitors.php");
            exit();
            // echo "ERROR: Could not able to execute " .mysqli_error($con);
        }
    // }
}

if (isset($_POST['delete_flatarea'])) {
    $recordID = mysqli_escape_string($con, $_POST['record_id']);
    $sql = "DELETE FROM flatarea WHERE FlatAreaID='$recordID'";
    mysqli_query($con, $sql);
    // header("Location: ../bla.php");
    exit();
}

if (isset($_POST['update_flatarea'])) {
    // echo "hi";
    $block_new = mysqli_escape_string($con, $_POST['blockno_new']);
    $series_new = mysqli_escape_string($con, $_POST['series_new']);
    $area_new = mysqli_escape_string($con, $_POST['area_new']);
    $rate_new = mysqli_escape_string($con, $_POST['rate_new']);
    $recordID = mysqli_escape_string($con, $_POST['recordID']);
    $flattype_new = mysqli_escape_string($con, $_POST['flattype_new']);
    $added_by = 'Admin1';
    // $added_by = $_SESSION['username'];
    $timestamp = date("Y-m-d H:i:s");
    $block_old = mysqli_escape_string($con, $_POST['blockno_old']);
    $series_old = mysqli_escape_string($con, $_POST['series_old']);

    // if the admin is changing unique value constraints, we check if they already exist or not
    if (($block_new != $block_old) || ($series_new != $series_old) ) {  
        
        $check_query = "SELECT * from flatarea where BlockNumber='$block_new' AND FlatSeries='$series_new';";
        // echo $check_query;
        $check_result = mysqli_query($con, $check_query);
        if (mysqli_num_rows($check_result) != 0) {
            echo "Exists_record";
        } else {
            $sql = "UPDATE flatarea SET BlockNumber='$block_new', FlatSeries='$series_new',FlatArea='$area_new',FlatType='$flattype_new',Ratepsq='$rate_new',Updatedby='$added_by',UpdatedAt='$timestamp' WHERE FlatAreaID='$recordID';";
            // echo $sql;
            mysqli_query($con, $sql);
            exit();
        }
    }
    //and agar exist nahi karta toh it will be unique and we can directly update
    else{
        $sql = "UPDATE flatarea SET BlockNumber='$block_new', FlatSeries='$series_new',FlatArea='$area_new',FlatType='$flattype_new',Ratepsq='$rate_new',Updatedby='$added_by',UpdatedAt='$timestamp' WHERE FlatAreaID='$recordID';";
            // echo $sql;
            mysqli_query($con, $sql);
            exit();
    }

}
// }