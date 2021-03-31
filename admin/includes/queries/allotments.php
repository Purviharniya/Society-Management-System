<?php

include '../../../config.php';
// if(isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role']=="admin")
// {
if (isset($_POST['addallotment-btn'])) {

    //define the form input variables and extract their values
    $block = mysqli_escape_string($con, $_POST['block']);
    $fno = mysqli_escape_string($con, $_POST['fno']);
    $oname = mysqli_escape_string($con, $_POST['oname']);
    $ocontact = mysqli_escape_string($con, $_POST['ocontact']);
    $oacontact = mysqli_escape_string($con, $_POST['oacontact']);
    $oemail = mysqli_escape_string($con, $_POST['oemail']);
    $omembers = mysqli_escape_string($con, $_POST['omembers']);
    $isRent = 0;
    // echo $_POST['isRent'];
    if(isset($_POST['isRent'])){
        $isRent = mysqli_escape_string($con, $_POST['isRent']);
    }
    echo $isRent;
    // echo '<script>console.log($isRent)</script>';
    $rname = mysqli_escape_string($con, $_POST['rname']);
    $rcontact = mysqli_escape_string($con, $_POST['rcontact']);
    $racontact = mysqli_escape_string($con, $_POST['racontact']);
    $remail = mysqli_escape_string($con, $_POST['remail']);
    $rmembers = mysqli_escape_string($con, $_POST['rmembers']);
    $updated_at = date("Y-m-d H:i:s");
    // $added_by = $_SESSION['username'];
    $updated_by = 'admin1';

    // echo "hi";

    $check_query = "SELECT * from allotments where BlockNumber='" . $block . "' AND FlatNumber=" . $fno . ";";
    $check_res = mysqli_query($con, $check_query);
    if (mysqli_num_rows($check_res) > 0) {
        $_SESSION['error_message'] = "<strong>Failure!</strong> Record already exists!";
        header("Location: ../../add_allotments.php");
        exit();
    } else {
        $res = mysqli_query($con, "SELECT FlatNumber from flats where FlatNumber = '$fno'");
        if (strlen($ocontact) != 10 || strlen($oacontact) != 10) {
            $_SESSION['error_message'] = "<strong>Failure!</strong> Contact number should be of length 10 !";
            header("Location: ../../add_allotments.php");
        } else if (!is_numeric($fno) && is_numeric($block)) {
            $_SESSION['error_message'] = "<strong>Failure!</strong> Flat Number or block invalid !";
            header("Location: ../../add_allotments.php");
        } else if (mysqli_num_rows($res) == 0) {
            $_SESSION['error_message'] = "<strong>Failure!</strong> Flat does not exist !";
            header("Location: ../../add_allotments.php");
        } else {
            $res2 = mysqli_query($con, "SELECT FlatID from flats where FlatNumber = '$fno'");
            $row2 = mysqli_fetch_assoc($res2);
            $flatid = $row2['FlatID'];
            if ($isRent == 1) {
                if (strlen($rcontact) != 10 || strlen($racontact) != 10) {
                    $_SESSION['error_message'] = "<strong>Failure!</strong> Contact number should be of length 10 !";
                    header("Location: ../../add_allotments.php");
                    exit();
                } else {
                    echo $isRent;

                    // store in the database; check if error doesnt occur while storing
                    $query = "INSERT INTO allotments(`AllotmentID`,`FlatID`,`FlatNumber`, `BlockNumber`, `OwnerName`, `OwnerEmail`, `OwnerContactNumber`, `OwnerAlternateContactNumber`, `OwnerMemberCount`,`isRent`, `RenteeName`, `RenteeEmail`, `RenteeContactNumber`, `RenteeAlternateContactNumber`, `RenteeMemberCount`,  `updated_by`, `updated_at`) VALUES ('' ,'$flatid','$fno', '$block' , '$oname', '$oemail', '$ocontact', '$oacontact','$omembers', '$isRent', '$rname', '$remail', '$rcontact', '$racontact','$rmembers','$updated_by','$updated_at')";
                    echo $query;
                    mysqli_query($con, $query);
                }
            } else {

                echo '<script>console.log($isRent)</script>';
                // store in the database; check if error doesnt occur while storing
                $query = "INSERT INTO allotments(`AllotmentID`,`FlatID`,`FlatNumber`, `BlockNumber`, `OwnerName`, `OwnerEmail`, `OwnerContactNumber`, `OwnerAlternateContactNumber`, `OwnerMemberCount`,`isRent`, `RenteeName`, `RenteeEmail`, `RenteeContactNumber`, `RenteeAlternateContactNumber`, `RenteeMemberCount`, `updated_by`, `updated_at`) VALUES ('' ,'$flatid','$fno', '$block' , '$oname', '$oemail', '$ocontact', '$oacontact','$omembers', '$isRent', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL','$updated_by','$updated_at')";
                // echo '<script>console.log($query)</script>';
                mysqli_query($con, $query);
            }
            $_SESSION['success_message'] = "<strong>Success!</strong> Allotment added successfully!";

            // redirect to the form page again with success message or to the datatable page
            header("Location: ../../add_allotments.php");
            exit();
        }
    }
}

if (isset($_POST['delete_allotments'])) {
    $recordID = mysqli_escape_string($con, $_POST['record_id']);
    $sql = "DELETE FROM allotments WHERE AllotmentID='$recordID'";
    mysqli_query($con, $sql);
    // header("Location: ../bla.php");
    exit();
}


if (isset($_POST['update_allotments'])) {
    // echo "hi";
    $block = mysqli_escape_string($con, $_POST['BlockNumber']);
    //$_POST['allotments'];
    $fno = mysqli_escape_string($con, $_POST['FlatNumber']);
    $isRent = mysqli_escape_string($con, $_POST['isRent']);
    if ($isRent == 'Yes') {
        $isRent = 1;
    } else {
        $isRent = 0;
    }
    $id = mysqli_escape_string($con, $_POST['record_id']);
    /*
    $oname = mysqli_escape_string($con, $_POST['OwnerName']);
    $ocontact = mysqli_escape_string($con, $_POST['OwnerContactNumber']);
    $oacontact = mysqli_escape_string($con, $_POST['OwnerAlternateContactNumber']);
    $oemail = mysqli_escape_string($con, $_POST['OwnerEmail']);
    $omembers = mysqli_escape_string($con, $_POST['OwnerMemberCount']);
    */

    /*
    $rname = mysqli_escape_string($con, $_POST['RenteeName']);
    $rcontact = mysqli_escape_string($con, $_POST['RenteeContactNumber']);
    $racontact = mysqli_escape_string($con, $_POST['RenteeAlternateContactNumber']);
    $remail = mysqli_escape_string($con, $_POST['RenteeEmail']);
    $rmembers = mysqli_escape_string($con, $_POST['RenteeMemberCount']);
    */
    $q = mysqli_query($con, `SELECT OwnerName, OwnerEmail, OwnerContactNumber, OwnerAlternateContactNumber, OwnerMemberCount, RenteeName, RenteeEmail, RenteeContactNumber, RenteeAlternateContactNumber, RenteeMemberCount from allotments where AllotmentID = '$id'`);
    $row = mysqli_fetch_assoc($result);
    $oname = $row['OwnerName'];
    $ocontact = $row['OwnerContactNumber'];
    $oacontact = $row['OwnerAlternateContactNumber'];
    $oemail = $row['OwnerEmail'];
    $omembers = $row['OwnerMemberCount'];
    $rname = $row['RenteeName'];
    $rcontact = $row['RenteeContactNumber'];
    $racontact = $row['RenteeAlternateContactNumber'];
    $remail = $row['RenteeEmail'];
    $rmembers = $row['RenteeMemberCount'];
    $updated_by = 'admin1';
    // $added_by = $_SESSION['username'];
    $timestamp = date("Y-m-d H:i:s");
    //$block_old = mysqli_escape_string($con, $_POST['blockno_old']);
    //$series_old = mysqli_escape_string($con, $_POST['series_old']);

    // if the admin is changing unique value constraints, we check if they already exist or not
    /*if (($block_new != $block_old) || ($series_new != $series_old)) {

        $check_query = "SELECT * from allotments where BlockNumber='$block' AND FlatSeries='$series_new';";
        // echo $check_query;
        $check_result = mysqli_query($con, $check_query);
        if (mysqli_num_rows($check_result) != 0) {
            echo "Exists_record";
        } else {
            $sql = "UPDATE allotments SET BlockNumber='$block_new', FlatSeries='$series_new',allotments='$area_new',FlatType='$flattype_new',Ratepsq='$rate_new',Updatedby='$added_by',UpdatedAt='$timestamp' WHERE allotmentsID='$recordID';";
            // echo $sql;
            mysqli_query($con, $sql);
            exit();
        }
    /*}
    //and agar exist nahi karta toh it will be unique and we can directly update
    else {*/
    $sql = "UPDATE allotments SET AllotmentID= '$id',FlatID= '$flatid', FlatNumber='$fno', BlockNumber='$block',OwnerName='$oname',OwnerEmail='$oemail',OwnerContactNumber='$ocontact',OwnerAlternateContactNumber='$oacontact',OwnerMemberCount='$omembers' ,isRent='$isRent',RenteeName='$rname',RenteeEmail='$remail',RenteeContactNumber='$rcontact',RenteeAlternateContactNumber='$racontact',RenteeMemberCount='$rmembers',updated_by='$updated_by',updated_at='$timestamp' WHERE AllotmentID='$id';";
    echo $sql;
    mysqli_query($con, $sql);
    exit();
    //}
}