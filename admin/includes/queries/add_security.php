<?php

include '../../../config.php';
// if(isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role']=="admin")
// {
if (isset($_POST['addsecurity-btn'])) {

    //define the form input variables and extract their values
    $securityid = mysqli_escape_string($con, $_POST['securityid']);
    $name = mysqli_escape_string($con, $_POST['name']);
    $contactnumber = mysqli_escape_string($con, $_POST['contactnumber']);
    $shift = mysqli_escape_string($con, $_POST['shift']);
    $timestamp = date("Y-m-d H:i:s"); // created at

    $check_query = "SELECT * from security where SecurityID='" . $securityid . "';";
    $check_res = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_res) != 0) {
        $_SESSION['error_message'] = "<strong>Failure!</strong> Record for this ID already exists!";
        header("Location: ../../add_security.php");
        exit();

    } else {
        // store in the database; check if error doesnt occur while storing
        $query = "INSERT INTO security(`SecurityID`, `Name`, `ContactNumber`, `Shift`,`created_at`,`updated_at`) VALUES ('$securityid' , '$name' , '$contactnumber' , '$shift' , '$timestamp','' )";
        mysqli_query($con, $query);

        //Start the session if already not started.
        $_SESSION['success_message'] = "<strong>Success!</strong> Details added successfully!";

        // redirect to the form page again with success message or to the datatable page
        header("Location: ../../add_security.php");
        exit();
    }
}

// :)


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