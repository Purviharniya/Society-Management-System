<?php
include '../../../config.php';
?>

<!-- Adding charges for a particular flat -->
<?php

if (isset($_POST['generate_bill'])) {
    // echo "hi";
    $flat = mysqli_escape_string($con, $_POST['flatno']);
    $block = mysqli_escape_string($con, $_POST['blockno']);
    $flatid = mysqli_escape_string($con, $_POST['flat_id']);
    $bill_month = mysqli_escape_string($con, $_POST['bill_month']);
    $charges = mysqli_escape_string($con, $_POST['additional_charges']);
    $reason = mysqli_escape_string($con, $_POST['charges_reason']);
    $timestamp = date("Y-m-d H:i:s");
    $added_by = $_SESSION['username'];

//check for flatid correct for the given flat
    $check_sql = mysqli_query($con, "SELECT FlatID from flats where FlatNumber='$flat' and BlockNumber='$block'");
    $check_row = mysqli_fetch_assoc($check_sql);
    $flatid_check = $check_row['FlatID'];
    //check if charges are greater than 0
    if ($charges <= 0) {
        $_SESSION['error_message'] = "Additional Charges cannot be negative";
        header("Location: ../../add_bills.php");
    } elseif ($flatid != $flatid_check) {
        $_SESSION['error_message'] = "Flat does not exist";
        header("Location: ../../add_bills.php");
    } else {
        $sql = "INSERT INTO additional_charges(`ChargeID`, `FlatID`, `Amount`, `Reason`, `Bill_month`, `Updated_at`, `Updated_by`) VALUES ('','$flatid','$charges','$reason','$bill_month','$timestamp','$added_by')";
        mysqli_query($con, $sql);

        $_SESSION['success_message'] = "Additional Charges for " . $block . '-' . $flat . ' inserted successfully!';
        header("Location: ../../add_bills.php");
    }

}

?>