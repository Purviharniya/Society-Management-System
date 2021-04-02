<?php

// if (isset($_POST['block_select']) && isset($_POST['flat_select']) && $_POST['block_select'] != '' && $_POST['flat_select'] != '') {
//     $block = $_POST['block_select'];
//     $flat = $_POST['flat_select'];
    
//     $flat_series = substr($flat,-2); //to get the series to which the flat belongs to
// }

if(isset($_POST['searchallotment-btn'])){


    $block = mysqli_escape_string($con, $_POST['block_select']);
    $flat = mysqli_escape_string($con, $_POST['flat_select']);
    $flat_series = substr($flat,-2);  //to get the series to which the flat belongs to
    $sql_allotment = "SELECT * from allotments where FlatNumber='$flat' and BlockNumber='$block'";
    $res_allotment = mysqli_query($con,$sql_allotment);
    $row = mysqli_fetch_assoc($res_allotment);
}