<?php

include 'includes/header.php';
include 'includes/sidebar.php';
include 'includes/topbar.php';

?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="my-4">Flats</h3>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card pt-1 pb-5">
                <div class="card-body">
                    <h4 class="card-title text-info mb-5">Add Flat</h4>
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary" name="addcourse" data-toggle="modal"
                            data-target="#uploadflat">
                            Upload excel&nbsp;&nbsp;<i class="fas fa-upload"></i>
                        </button>
                    </div>
                    <!-- Modal for importing -->
                    <div class="modal fade" id="uploadflat" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle0" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle0">Upload Your File </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form method="POST" enctype="multipart/form-data" id="bulkUploadInternal">
                                            <label for="">
                                                <h6>Information for mapping Data from excel sheet columns to database
                                                    columns </h6>
                                            </label>
                                            <label for=""><small><b>Note:</b> The following fields should be column
                                                    names in excel sheet</small>
                                            </label>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="rno"><b>Upload Constraint</b></label>
                                                    <select class="form-control" id="upload_constraint"
                                                        name="upload_constraint" required>
                                                        <option value="0">Only insert new Records</option>
                                                        <option value="1">Insert and update Existing</option>
                                                        <option value="2">Only Update existing records</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row mt-4">
                                                <div class="form-group col-md-6">
                                                    <label for="fcode"><b>Block</b></label>
                                                    <input type="text" class="form-control" id="block"
                                                        placeholder="Column name of Block" name="block" value="block"
                                                        required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="eid"><b>Flat Series</b></label>
                                                    <input type="text" class="form-control" id="series"
                                                        placeholder="Column name of Flat Series" name="series"
                                                        value="series" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="name"><b>Flat Area</b></label>
                                                    <input type="text" class="form-control" id="farea"
                                                        placeholder="Column name of Flat Area" name="farea"
                                                        value="farea" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="name"><b>Maintenance Rate per square feet</b></label>
                                                    <input type="text" class="form-control" id="farea"
                                                        placeholder="Column name of Rate per sq feet" name="frateps"
                                                        value="frateps" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group files color">
                                                <!-- <input type="file" class="form-control" accept=".xls,.xlsx"> -->
                                                <script type="text/javascript" language="javascript">
                                                function checkfile(sender) {
                                                    var validExts = new Array(".xlsx", ".xls");
                                                    var fileExt = sender.value;
                                                    fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
                                                    if (validExts.indexOf(fileExt) < 0) {
                                                        alert("Invalid file selected, valid files are of " +
                                                            validExts.toString() + " types.");
                                                        return false;
                                                    } else return true;
                                                }
                                                </script>
                                                <input type="file" name="Uploadfile" class="form-control"
                                                    onchange="checkfile(this);"
                                                    accept="application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                                                    required />
                                                <label for=""><b>Accepted formats .xls,.xlsx only.</b></label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                    name="close">Close</button>
                                                <button type="submit" class="btn btn-primary" name="save_changes"
                                                    id="upload_farea">Upload</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <style type="text/css">
                                .files input {
                                    outline: 2px dashed #92b0b3;
                                    outline-offset: -10px;
                                    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
                                    transition: outline-offset .15s ease-in-out, background-color .15s linear;
                                    padding: 120px 0px 85px 35%;
                                    text-align: center !important;
                                    margin: 0;
                                    width: 100% !important;
                                }

                                .files input:focus {
                                    outline: 2px dashed #92b0b3;
                                    outline-offset: -10px;
                                    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
                                    transition: outline-offset .15s ease-in-out, background-color .15s linear;
                                    border: 1px solid #92b0b3;
                                }

                                .files {
                                    position: relative
                                }

                                .files:after {
                                    pointer-events: none;
                                    position: absolute;
                                    top: 60px;
                                    left: 0;
                                    width: 50px;
                                    right: 0;
                                    height: 56px;
                                    content: "";
                                    background-image: url('https://image.flaticon.com/icons/png/128/109/109612.png');
                                    display: block;
                                    margin: 0 auto;
                                    background-size: 100%;
                                    background-repeat: no-repeat;
                                }

                                .color input {
                                    background-color: #f1f1f1;
                                }

                                .files:before {
                                    position: absolute;
                                    bottom: 10px;
                                    left: 0;
                                    pointer-events: none;
                                    width: 100%;
                                    right: 0;
                                    height: 57px;
                                    display: block;
                                    margin: 0 auto;
                                    color: #2ea591;
                                    font-weight: 600;
                                    text-transform: capitalize;
                                    text-align: center;
                                }
                                </style>
                            </div>
                        </div>
                    </div>
                    <!-- Close upload modal -->
                    <form action="">
                        <div class="form-group">
                            <label for="fno">Flat no:</label>
                            <input type="text" class="form-control" id="fno" name="fno" aria-describedby="fnoHelp"
                                required>
                            <small id="fnoHelp" class="form-text text-muted">Enter the Flat number</small>
                        </div>
                        <div class="form-group">
                            <label for="floorno">Floor no:</label>
                            <input type="text" class="form-control" id="floorno" name="floorno"
                                aria-describedby="floornoHelp" required>
                            <small id="floornoHelp" class="form-text text-muted">Enter the floor number</small>
                        </div>
                        <div class="form-group">
                            <label for="block">Block:</label>
                            <input type="text" class="form-control" id="block" name="block" aria-describedby="blockHelp"
                                required>
                            <small id="blockHelp" class="form-text text-muted">Enter the block name</small>
                        </div>
                        <div class="form-group">
                            <label for="flattype">Flat Type:</label>
                            <select class="form-control" id="flattype">
                                <option>1BHK</option>
                                <option>2BHK</option>
                                <option>3BHK</option>
                                <option>4BHK</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="clear" class="btn btn-primary">Clear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container-fluid -->



<?php

include './includes/footer.php';
include './includes/scripts.php';

?>