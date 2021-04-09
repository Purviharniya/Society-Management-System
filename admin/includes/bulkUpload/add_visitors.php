<?php
// include_once('../../verify.php');
include_once '../../../config.php';

$block = $_POST['block'];
$flatno = $_POST['flatno'];
$vname = $_POST['vname'];
$contact = $_POST['contact'];
$contact1 = $_POST['contact1'];
$people = $_POST['people'];
$whomToMeet = $_POST['whomToMeet'];
$reasonToMeet = $_POST['reasonToMeet'];
$startdate = $_POST['startdate'];
$duration = $_POST['duration'];
// $role = $_POST['role'];
$upload_constraint = mysqli_escape_string($con, $_POST['upload_constraint']);
// $login_role = $_SESSION['role'];
// $addedby = $_SESSION['username'];
$login_role = 'admin';
$addedby = "Admin1";
$file_name = $_FILES['Uploadfile']['name'];

$ext = pathinfo($_FILES["Uploadfile"]["name"])['extension'];

// $target_location = $base_dir . $file_name;
$rel_dir_path = "visitors";
$target_location_dir = $base_dir . $rel_dir_path;

if (!is_dir($base_dir)) {
    mkdir($base_dir, 0777, true);
}

if (!is_dir($target_location_dir)) {
    mkdir($target_location_dir, 0777, true);
}

$rel_file_path = $rel_dir_path . '/' . $file_name . "." . $ext;
$target_location = $base_dir . $rel_file_path;

move_uploaded_file($_FILES['Uploadfile']['tmp_name'], $target_location);
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("Y-m-d H:i:s");
$cmd = 'python addvisitors.py "' . $addedby . '" "' . $timestamp . '" "' . $vname . '" "' . $contact . '" "' . $contact1 . '" "' . $block . '" "' . $flatno . '" "' . $people . '" "' . $whomToMeet . '" "' . $reasonToMeet . '" "' . $startdate . '" "' . $duration . '" "' . $servername . '" "' . $target_location . '" "' . $username . '" "' . $dbname . '" "' . $password . '" "' . $upload_constraint . '" "' . $login_role . '" ';
echo $cmd;
$output = shell_exec($cmd);
echo $output;
//  if(strpos($output,"Duplicate entry")){
//     echo "Import Unsuccessful as adding caused duplicate entries";
// }else{
//     echo $output;
// }