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

    // echo "hi";
    //define the default status, 
    
    $query = ""; //add the insert query
    mysqli_query($con, $query);
   
}

// }