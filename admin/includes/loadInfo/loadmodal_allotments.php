<?php
// echo 'Hi';
$allowed_roles = array("admin");
// if (isset($_SESSION['username']) && in_array($_SESSION['login_role'], $allowed_roles)) {
// echo 'Hi';
include_once '../../../config.php';

$data = json_decode(file_get_contents("php://input"), true);
$block = mysqli_escape_string($con, $data['BlockNumber']);
$fno = mysqli_escape_string($con, $data['FlatNumber']);
$isRent = mysqli_escape_string($con, $data['isRent']);
//$rname = mysqli_escape_string($con, $_POST['rname']);
//$rcontact = mysqli_escape_string($con, $_POST['rcontact']);
//$racontact = mysqli_escape_string($con, $_POST['racontact']);
//$remail = mysqli_escape_string($con, $_POST['remail']);
//$rmembers = mysqli_escape_string($con, $_POST['rmembers']);
$result = mysqli_query($con, "select AllotmentID, FlatNumber, BlockNumber, OwnerName, OwnerEmail, OwnerContactNumber, OwnerAlternateContactNumber, OwnerMemberCount, updated_by, updated_at from allotments WHERE BlockNumber='$block' and FlatNumber='$fno' ");
//isRent, RenteeName, RenteeEmail, RenteeContactNumber, RenteeAlternateContactNumber, RenteeMemberCount,
$row = mysqli_fetch_assoc($result);
$oname = $row['OwnerName'];
$ocontact = $row['OwnerContactNumber'];
$oacontact = $row['OwnerAlternateContactNumber'];
$oemail = $row['OwnerEmail'];
$omembers = $row['OwnerMemberCount'];
$recordID = $row['AllotmentID'];
$date =  date("Y-m-d H:i:s");
//, Rentee name <i><small><b> ' . $isRent == 1 ? $rname : "-" . '</b></small></i>
echo '<div class="modal fade mymodal" id="update-del-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle1">Action</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <div class="modal-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-delete-tab" data-toggle="tab" href="#nav-delete" role="tab" aria-controls="nav-delete" aria-selected="true">Deletion</a>
                                <a class="nav-item nav-link" id="nav-update-tab" data-toggle="tab" href="#nav-update" role="tab" aria-controls="nav-update" aria-selected="false">Update</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!--Deletion-->
                            <div class="tab-pane fade show active" id="nav-delete" role="tabpanel" aria-labelledby="nav-delete-tab">
                                <form id="delete_allotments">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1"><i class="text-danger">*This will delete all the information related to the flat area</i>
                                            <br>Are you sure you want to delete the record of <br> Block <i><small><b>' . $block . '</b></small></i>
                                            ,Flat Number <i><small><b>' . $fno . '</small></b></i> , Rented Flat? <i><small><b>' . $isRent . ' </b></small></i>
                                            ,Owner name <i><small><b> ' . $oname . '.</b></small></i> 
        
                                        </label>
                                        <br>
                                        <input type="hidden" name="record_id" value="' . $recordID . '">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <button type="submit" class="btn btn-primary" id="delete_allotments_btn" name="delete_allotments">Yes</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" name="no">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end Deletion-->


                            <!--Update-->
                            <div class="tab-pane fade" id="nav-update" role="tabpanel" aria-labelledby="nav-update-tab">
                                <form method="POST" id="update_allotments">
                                    <div class="form-row mt-4">
                                        <div class="form-group col-md-6">
                                            <label for="block"><b>Block Number</b></label>
                                            <input type="text" class="form-control"  placeholder="Block Number" name="blockno_new" value="' . $block . '">
                                            <input type="hidden" name="blockno_old" value="' . $block . '">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="fno"><b>Flat Number</b></label>
                                            <input type="text" class="form-control" id="fno" placeholder="Flat Number" name="fno_new" value="' . $fno . '">
                                            <input type="hidden" name="fno_old" value="' . $fno . '">
                                        </div>
                                        <div class="col-12" id="error_record">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="isRent"><b>Flat on rent?</b></label>
                                            <input type="text" class="form-control" id="isRent" placeholder="on rent?" name="isRent" value="' . $isRent . '">
                                            <input type="hidden" class="form-control"  name="recordID" id="recordID" value="' . $recordID . '">
                                        </div>                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 text-center">
                                            <button type="submit" class="btn btn-primary" id="update_allotments_btn" name="update_allotments">Update</button>
                                        </div>
                                        <div class="form-group col-md-6 text-center">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" name="close">Close</button>
                                        </div>
                                    </div>
                                </form>
                                <br>
                            </div>
                            <!--end Update-->

                        </div>
                    </div>
                    </div>
                </div>
            </div>';
// echo 'Hi';

// }