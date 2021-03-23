<?php

include 'includes/header.php';
include 'includes/sidebar.php';
include 'includes/topbar.php';

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) {
    ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['success_message']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php
unset($_SESSION['success_message']);
}
?>

<?php
if (isset($_SESSION['error_message']) && !empty($_SESSION['error_message'])) {
    ?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['error_message']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php
unset($_SESSION['error_message']);
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="my-4">Visitors</h3>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card shadow pt-1 pb-5">
                <div class="card-body">
                    <h4 class="card-title text-info mb-5">Add Visitors</h4>
                    <div class="col text-center">
                        <button type="button" class="btn btn-themeblack" name="addcourse" data-toggle="modal"
                            data-target="#uploadarea">
                            Upload excel&nbsp;&nbsp;<i class="fas fa-upload"></i>
                        </button>
                    </div>
                    <!-- Modal for importing -->
                    <div class="modal fade" id="uploadarea" tabindex="-1" role="dialog"
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
                                                    <label for="block">Block:</label>
                                                    <input type="text" class="form-control" id="block" name="block"
                                                        value="block" placeholder="Column name of Block" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="fno">Flat no:</label>
                                                    <input type="text" class="form-control" id="fno" name="fno"
                                                        value="fno" placeholder="Column name of Flat number" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="name">Name:</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="name" placeholder="Column name of Owner" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="contact col-md-6">Contact No.:</label>
                                                    <input type="text" class="form-control" id="contact" name="contact"
                                                        value="contact" placeholder="Column name of Contact no"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="contact1">Alternate Contact No.:</label>
                                                    <input type="text" class="form-control" id="contact1"
                                                        name="contact1" value="contact1"
                                                        placeholder="Column name of contact no1" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="contact">Email ID:</label>
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        value="email" placeholder="Column name of Email" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="contact">Total members in the family:</label>
                                                    <input type="text" class="form-control" id="members" name="members"
                                                        value="members"
                                                        placeholder="Column name of total members in the family"
                                                        required>
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
                    <!--Main Form section starts-->
                    <form action="includes/queries/visitors.php" method="POST" autocomplete="">
                        <div class="form-group">
                            <label for="block">Block:</label>
                            <input type="text" class="form-control" id="block" name="block" aria-describedby="blockHelp"
                                required>
                            <small id="blockHelp" class="form-text text-muted">Enter the block name (make it a drop down
                                later)</small>
                        </div>
                        <div class="form-group">
                            <label for="fno">Flat no:</label>
                            <input type="text" class="form-control" id="fno" name="fno" aria-describedby="fnoHelp"
                                required>
                            <small id="fnoHelp" class="form-text text-muted">Enter the Flat number (make it a drop down
                                later)</small>
                        </div>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                                required>
                            <small id="nameHelp" class="form-text text-muted">Enter the flat owner's name</small>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact No.:</label>
                            <input type="text" class="form-control" id="contact" name="contact"
                                aria-describedby="contactHelp" required>
                            <small id="contactHelp" class="form-text text-muted">Enter the visitor's contact
                                number</small>
                        </div>
                        <div class="form-group">
                            <label for="contact1">Alternate Contact No.:</label>
                            <input type="text" class="form-control" id="contact1" name="contact1"
                                aria-describedby="contact1Help" required>
                            <small id="contact1Help" class="form-text text-muted">Enter the visitor's alternate
                                contact number</small>
                        </div>
                        <div class="form-group">
                            <label for="contact2">Whom to Meet:</label>
                            <input type="text" class="form-control" id="whomToMeet" name="whomToMeet"
                                aria-describedby="whomToMeetHelp">
                            <small id="whomToMeetHelp" class="form-text text-muted">Enter the whom to meet(flat owner's name)</small>
                        </div>
                        <div class="form-group">
                            <label for="contact2">Reason to Meet:</label>
                            <textarea class="form-control" id="reasonToMeet" name="reasonToMeet"  
                                aria-describedby="reasonToMeetHelp"rows="3"></textarea>
                            <small id="reasonToMeetHelp" class="form-text text-muted">Enter the reason to meet</small>
                        </div>
                        <!-- <div class="form-group">
                            <label for="contact">Email ID:</label>
                            <input type="text" class="form-control" id="contact" name="contact"
                                aria-describedby="contactHelp" required>
                            <small id="contactHelp" class="form-text text-muted">Enter the flat owner's email
                                address</small>
                        </div>
                        <div class="form-group">
                            <label for="contact">Total members in the family:</label>
                            <input type="text" class="form-control" id="contact" name="contact"
                                aria-describedby="contactHelp" required>
                            <small id="contactHelp" class="form-text text-muted">Enter the flat owner's total
                                family members</small>
                        </div> -->
                        <button type="submit" class="btn btn-themeblack" name='addvisitors-btn'>Add</button>
                        <button type="reset" class="btn btn-themeblack">Clear</button>
                    </form>
                    <!--Main Form section ends-->
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