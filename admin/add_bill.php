<?php

include 'includes/shared/header.php';
include 'includes/shared/sidebar.php';
include 'includes/shared/topbar.php';

?>

<?php   

if(isset($_POST['block_select']) && isset($_POST['flat_select'])){
    $block = $_POST['block_select'];
    $flat = $_POST['flat_select'];

    $allotment_sql = "SELECT * from allotments where FlatNumber='$flat' and BlockNumber='$block'";
    $res_allotment = mysqli_query($con,$allotment_sql);
    $row = mysqli_fetch_assoc($res_allotment);
    $flat_series = substr($flat,-2); //to get the series to which the flat belongs to
    
    $oname = $row['OwnerName'];
    $isRent = $row['isRent'];
    $ocontact = $row['OwnerContactNumber'];
    $oacontact = $row['OwnerAlternateContactNumber'];
    $oemail = $row['OwnerEmail'];
    $omembers = $row['OwnerMemberCount'];
    
    $rname = $rcontact = $racontact = $remail = $rmembers = '';
    if($isRent == '1'){
        $rname = $row['RenteeName'];
        $rcontact = $row['RenteeContactNumber'];
        $racontact = $row['RenteeAlternateContactNumber'];
        $remail = $row['RenteeEmail'];
        $rmembers = $row['RenteeMemberCount'];
    }

    //get the maintenance charges
    $rate_sql = "SELECT * from flatarea where BlockNumber='$block' and FlatSeries='$flat_series'";
    $rate_res = mysqli_query($con,$rate_sql);
    $row2 = mysqli_fetch_assoc($rate_res);

    $ftype = $row2['FlatType'];
    $flatarea = $row2['FlatArea'];
    $rpsq = $row2['Ratepsq'];
    $maintenance = $flatarea * $rpsq;
    
}else{
    $_SESSION["error_message"] = "Please fill the form first";
    header("Location: add_bills.php");
    exit();
}
?>
<div class="container-fluid">
    <h3 class="my-4">Bills</h3>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card shadow pt-1 pb-5">
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <h4 class="font-weight-bold text-primary">Add Bill</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="col"> Block Number: </th>
                                        <td> <?php echo $block;?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Flat Number: </th>
                                        <td> <?php echo $flat;?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Flat Type: </th>
                                        <td> <?php echo $ftype;?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Owner's Name: </th>
                                        <td> <?php echo $oname;?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Owner's Contact Number: </th>
                                        <td> <?php echo "+91 " .$ocontact . ", +91 " . $oacontact ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Owner's Email ID: </th>
                                        <td> <?php echo $oemail;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Total Members in the family: </th>
                                        <td> <?php echo $omembers;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Flat on Rent? </th>
                                        <td> <?php echo $isRent=='1'?"Yes":"No";?> </td>
                                    </tr>
                                    <?php 
                                    if($isRent=='1'){?>
                                    <tr>
                                        <th scope="col"> Rentee Name: </th>
                                        <td> <?php echo $rname; ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Rentee Contact Number: </th>
                                        <td> <?php echo $rcontact . ", " . $racontact ;?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Rentee Email ID: </th>
                                        <td><?php echo $remail ;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Rentee Member Count: </th>
                                        <td> <?php echo $rmembers ;?></td>
                                    </tr>
                                    <?php } ?>

                                    <tr>
                                        <th scope="col"> Flat Area: </th>
                                        <td><?php echo $flatarea ;?> sq.ft.</td>
                                    </tr>
                                    <tr>
                                        <th scope="col"> Rate per square feet: </th>
                                        <td>Rs. <?php echo $rpsq ;?> /sq.ft.</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Maintenance Charges: </th>
                                        <th>Rs. <?php echo $maintenance ;?></th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Any Additional Charges: </th>
                                        <th><input class="form-control" type="text" name="additional charges"
                                                placeholder="Rs..."> </th>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-danger">
                                <strong>Note:</strong> Bill once generated cannot be modified!
                            </div>
                            <button class="btn btn-primary" name="generate_bill">Generate Bill</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php

include './includes/shared/footer.php';
include './includes/shared/scripts.php';

?>