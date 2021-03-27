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
    
    $fetch_query = "SELECT FlatID from flats where BlockNumber='" . $block . "' AND FlatNumber=" . $flatno . ";";
    $result = mysqli_query($con, $fetch_query);
    $flatID = mysqli_fetch_array($result);
    print_r($flatID);
    $flatID['FlatID'] = 1; //FOR NOW, REMOVE IT LATER 



    $check_query = "SELECT * from visitors where BlockNumber='" . $block . "' AND FlatNumber=" . $flatno . " AND VisitorName='" . $vname . "' ;";
    $check_res = mysqli_query($con, $check_query);
    echo $check_query;
    echo "\n";
    echo mysqli_num_rows($check_res);
    //CONDITION PENDING
    if (mysqli_num_rows($check_res) != 0) {
        $_SESSION['error_message'] = "<strong>Failure!</strong> Record for this Block, Flat and the visitor already exists!";
        header("Location: ../../add_visitors.php");
        exit();

    } else {
        // store in the database; check if error doesnt occur while storing
        $query = "INSERT INTO visitors(`VisitorID`,`FlatID`, `VisitorName`,`VisitorContactNo`,`AlternateVisitorContactNo`,`BlockNumber`, `FlatNumber`, `WhomToMeet`, `ReasonToMeet`, `updated_by`, `updated_at`) 
                  VALUES ('' ,".$flatID['FlatID'].",'$vname' , '$contactno' , ' $altcontactno' , '$block' , '$flatno' ,'$whomtomeet' ,'$reasontomeet','$added_by' , '$timestamp' )";
    
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
    }
}

if (isset($_POST['delete_visitors'])) {
    // echo "<script>console.log('well well entered modal wala delete visitor record')</script>";
    $visitorID = mysqli_escape_string($con, $_POST['visitor_id']);
    $sql = "DELETE FROM visitors WHERE VisitorID='$visitorID'";
    mysqli_query($con, $sql);
    // header("Location: ../bla.php");
    exit();
}

if (isset($_POST['update_visitors'])) {
    // echo "hi";
    // echo "<script>console.log('well well entered modal wala update visitor record')</script>";

    $visitorID = mysqli_escape_string($con, $_POST['visitor_id']);
    // echo '<script>console.log('.$visitorID.')</script>';
    $block_new = mysqli_escape_string($con, $_POST['blockno_new']);
    $flatno_new = mysqli_escape_string($con, $_POST['flatno_new']);
    $vname_new = mysqli_escape_string($con, $_POST['vname_new']);
    $vcontact_new = mysqli_escape_string($con, $_POST['vcontact_new']);
    $whom_new = mysqli_escape_string($con, $_POST['whom_new']);
    $reason_new = mysqli_escape_string($con, $_POST['reason_new']);
    $added_by = 'Admin1';
    // $added_by = $_SESSION['username'];
    $timestamp = date("Y-m-d H:i:s");
    $block_old = mysqli_escape_string($con, $_POST['blockno_old']);
    $flatno_old = mysqli_escape_string($con, $_POST['flatno_old']);
    $vname_old = mysqli_escape_string($con, $_POST['vname_old']);
    $vcontact_old = mysqli_escape_string($con, $_POST['vcontact_old']);
    $whom_old = mysqli_escape_string($con, $_POST['whom_old']);
    $reason_old = mysqli_escape_string($con, $_POST['reason_old']);

    // if the admin is changing unique value constraints, we check if they already exist or not
    if (($block_new != $block_old) || ($flatno_new != $flatno_old ) || ($vname_new != $vname_old )) {  
        
        $check_query = "SELECT * from visitors where BlockNumber='$block_new' AND FlatNumber='$flatno_new' AND VisitorName = '$vname_new';";
        // echo $check_query;
        // echo '<script>console.log('.$check_query.' )</script>';
        $check_result = mysqli_query($con, $check_query);
        if (mysqli_num_rows($check_result) != 0) {
            echo "Exists_record";
        } else {
            $sql = "UPDATE visitors
                    SET BlockNumber='$block_new', FlatNumber='$flatno_new',VisitorName = '$vname_new',
                    VisitorContactNo='$vcontact_new', WhomToMeet = '$whom_new', ReasonToMeet = '$reason_new',
                    updated_by='$added_by',updated_at='$timestamp' WHERE VisitorID='$visitorID';";
            echo '<script>console.log('.$sql.' )</script>';
            mysqli_query($con, $sql);
            
            exit();
        }
    }
    //unique value constraints are not changing, so will be update it directly
    else{
    
        $sql = "UPDATE visitors 
                SET BlockNumber='$block_new', FlatNumber='$flatno_new',VisitorName='$vname_new',
                VisitorContactNo='$vcontact_new', WhomToMeet = '$whom_new', ReasonToMeet = '$reason_new',
                updated_by='$added_by',updated_at='$timestamp' WHERE VisitorID='$visitorID';";
            // echo $sql;
            mysqli_query($con, $sql);
            exit();
    }

}
// }