<?php
include('../../../config.php');
if (isset($_POST["flat"])) {

    $fno = mysqli_real_escape_string($con, $_POST["fno"]);
    $floor = mysqli_real_escape_string($con, $_POST["floorno"]);
    $block = mysqli_real_escape_string($con, $_POST["blockname"]);
    $flattype = mysqli_real_escape_string($con, $_POST["flattype"]);

    $queryy  = "SELECT * from flats";
    $records = mysqli_query($con, $queryy);
    foreach ($records as $rec) {
        if ($rec["FlatNumber"] == $fno && $rec["BlockNumber"] == $block) {
            //$_SESSION['error_message'] = "<strong>Failure!</strong> Record for this flat number already exists!";
            //header("Location: ../../add_flat.php");
            echo "flat number";
            $error = 1;
            break;
        } else {
            $error = 0;
        }
    }
    if ($error == 0) {
        //$contactno = mysqli_real_escape_string($con, $_POST["contactno"]);
        //$econtactno = mysqli_real_escape_string($con, $_POST["econtactno"]);

        //extracting the flat series
        $flatseries = $fno - 100 * $floor;
        $queryforeign = "SELECT * FROM `flatarea` WHERE (FlatSeries = $flatseries and BlockNumber = '$block')";
        $record = mysqli_query($con, $queryforeign);
        if ($record) {
            foreach ($record as $r) {
                $flatareaid = $r["FlatAreaID"];
                $flatarea = $r["FlatArea"];
                $rate = $r["Ratepsq"];
            }
            $maintenance = $flatarea * $rate;
            $query = "INSERT INTO flats(`FlatID`, `FlatNumber`, `FlatType`, `Maintenance`, `BlockNumber`, `Floor`, `FlatAreaID`) VALUES ('' , '$fno', '$flattype', '$maintenance', '$block', '$floor', '$flatareaid')";
            mysqli_query($con, $query);
            $_SESSION['success_message'] = "<strong>Success!</strong> Flat record added successfully!";
            header("Location: ../../add_flat.php");
        } else {
            echo "no record";
        }
        /**/
    }
}
if (isset($_POST['delete_flats'])) {
    $recordID = mysqli_escape_string($con, $_POST['record_id']);
    $sql = "DELETE FROM flats WHERE flatID='$recordID'";
    mysqli_query($con, $sql);
    // header("Location: ../bla.php");
    exit();
}

if (isset($_POST['update_flats'])) {

    $block_new = mysqli_escape_string($con, $_POST['blockno_new']);
    $flatnumber_new = mysqli_escape_string($con, $_POST['number_new']);
    $floor_new = mysqli_escape_string($con, $_POST['floor_new']);
    $rate_new = mysqli_escape_string($con, $_POST['rate_new']);
    $recordID = mysqli_escape_string($con, $_POST['recordID']);
    $flattype_new = mysqli_escape_string($con, $_POST['flattype_new']);

    $flatareaid = mysqli_query($con, "SELECT FlatAreaID FROM `flatarea` WHERE (FlatSeries = ($flatnumber_new-100*$floor_new) and BlockNumber = '$block')");
    // $added_by = $_SESSION['username'];        
    $updated_at = date("Y-m-d H:i:s");

    $check_query = "SELECT * from flats where BlockNumber='$block_new' AND FlatNumber='$flatnumber_new';";
    // echo $check_query;
    $check_result = mysqli_query($con, $check_query);
    if (mysqli_num_rows($check_result) != 0) {
        echo "Exists_record";
    } else {
        $sql = "UPDATE flats SET FlatNumber='$flatnumber_new',FlatType='$flattype_new',Maintenance='$rate_new',BlockNumber='$block_new',Floor='$floor_new',FlatAreaID='$flatareaid',updated_at='$updated_at' WHERE flatID='$recordID';";
        mysqli_query($con, $sql);
        exit();
    }
}
?>
<!-- -->