<?php
$allowed_roles = array("admin");
// if (isset($_SESSION['username']) && in_array($_SESSION['login_role'], $allowed_roles)) {
include_once '../../../config.php';

$data = json_decode(file_get_contents("php://input"), true);

$block = mysqli_escape_string($con, $data['BlockNumber']);
$flatno = mysqli_escape_string($con, $data['FlatNumber']);
$vname = mysqli_escape_string($con, $data['VisitorName']);
$result = mysqli_query($con, "select * from visitors WHERE BlockNumber='$block' and FlatNumber='$flatno' and VisitorName='$vname'"); //VisitorID,BlockNumber,FlatNumber,VisitorName,VisitorContactNo,WhomToMeet,ReasonToMeet
$row = mysqli_fetch_assoc($result);
$vcontact = $row['VisitorContactNo'];
$whomTomeet = $row['WhomToMeet'];
$reasonTomeet = $row['ReasonToMeet'];
$visitorID = $row['VisitorID'];
$date =  date("Y-m-d H:i:s");

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
                                <form id="delete_visitors">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1"><i class="text-danger">*This will delete all the information related to the flat area</i>
                                            <br>Are you sure you want to delete the record of <br> Block: <i><small><b>' . $block . '</b></small></i>,
                                            Flat Number: <i><small><b>' . $flatno . '</b></small></i>, Visitor Name: <i><small><b>' . $vname . '</small></b></i>
                                            ,Whom to Meet: <i><small><b>' . $whomTomeet . '</b></small></i> ?
                                        </label>
                                        <br>
                                        <input type="hidden" name="visitor_id" value="' . $visitorID . '">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <button type="submit" class="btn btn-primary" id="delete_visitors_btn" name="delete_visitors">Yes</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" name="no">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end Deletion-->


                            <!--Update-->
                            <div class="tab-pane fade" id="nav-update" role="tabpanel" aria-labelledby="nav-update-tab">
                                <form method="POST" id="update_visitors">
                                    <div class="form-row mt-4">
                                        <div class="form-group col-md-6">
                                            <label for="block"><b>Block Number</b></label>
                                            <input type="text" class="form-control"  placeholder="Block Number" name="blockno_new" value="' . $block . '">
                                            <input type="hidden" name="blockno_old" value="' . $block . '">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="flatno"><b>Flat Number</b></label>
                                            <input type="text" class="form-control"  placeholder="Flat Number" name="flatno_new" value="' . $flatno . '">
                                            <input type="hidden" name="flatno_old" value="' . $flatno . '">
                                        </div>
                                        <div class="col-12" id="error_record">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="areaf"><b>Visitor Name</b></label>
                                            <input type="text" class="form-control"  placeholder="Visitor Name" name="vname_new" value="' . $vname . '">
                                            <input type="hidden" name="vname_old" value="' . $vname . '">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="frate"><b>Visitor Contact Number</b></label>
                                            <input type="text" class="form-control" required="required" placeholder="Visitor Contact Number" name="vcontact_new" id="vcontact_new" value="' . $vcontact . '">
                                            <input type="hidden" name="vcontact_old" value="' . $vcontact . '">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="ftyp"><b>Whom to Meet</b></label>
                                            <input type="text" class="form-control" required="required" placeholder="Whom to Meet" name="whom_new" value="' . $whomTomeet . '">
                                        </div>
                                        <input type="hidden" name="whom_old" value="' . $whomTomeet . '">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="ftyp"><b>Reason to Meet</b></label>
                                            <input type="text" class="form-control" required="required" placeholder="Reason to Meet" name="reason_new" value="' . $reasonTomeet . '">
                                        </div>
                                        <input type="hidden" name="reason_old" value="' . $reasonTomeet . '">
                                    </div>
                                    
                                    <input type="hidden" name="visitor_id" value="' . $visitorID . '">
                                    <div class="form-row">
                                        <div class="form-group col-md-6 text-center">
                                            <button type="submit" class="btn btn-primary" id="update_visitors_btn" name="update_visitors">Update</button>
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