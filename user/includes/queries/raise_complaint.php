<?php

include '../../../config.php';
// if(isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role']=="user")
// {
if (isset($_POST['addcomplaint-btn'])){

    //define the form input variables and extract their values
    $ctype = mysqli_escape_string($con, $_POST['complaint_type']);   
    $cdesc = mysqli_escape_string($con, $_POST['complaint_desc']);
    $timestamp = date("Y-m-d H:i:s");
    // $added_by = $_SESSION['flatno'];
    $added_by = '802';
    // $contactno = $_SESSION['contactno'];
    $contactno = '9029996333';
    $admin_remark="no remark";
    // echo "hi";
    //define the default status, 0- unresolved, 1-in progress, 2- resolved
    $query = "INSERT INTO `complaints`(`RequestID`, `ComplaintType`, `Description`,`FlatNumber`, `ContactNumber`, `RaisedDate`, `AdminRemark`, `Status`, `ResolvedDate`, `updated_at`) VALUES ('','$ctype','$cdesc','$added_by' ,'$contactno','$timestamp','$admin_remark','0','0','$timestamp')"; //add the insert query
    mysqli_query($con, $query);
    $_SESSION['success_message'] = "Complaint has been raised!";
    header("Location: ../../raise_complaint.php");
    exit();
}

// }