<?php
include 'includes/shared/header.php';
include 'includes/shared/sidebar.php';
include 'includes/shared/topbar.php';
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
    <h3 class="my-4">Allotments</h3>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card shadow pt-1 pb-5">
                <div class="card-body">
                    <h4 class="card-title text-info mb-5">Add Allotments</h4>
                    <div class="col text-center">
                        <button type="button" class="btn btn-themeblack" name="addcourse" data-toggle="modal"
                            data-target="#uploadarea">
                            Upload excel&nbsp;&nbsp;<i class="fas fa-upload"></i>
                        </button>
                    </div>
                    <!-- Modal for importing -->
                    <!--close -->
                    <form action="./includes/queries/allotments.php" autocomplete="off" method='POST'>
                        <div class="form-group">
                            <label for="block">Block:</label>
                            <input type="text" class="form-control" id="block" name="block" aria-describedby="blockHelp"
                                required>
                            <small id="blockHelp" class="form-text text-muted">Enter the block name (make it a drop down
                                later)</small>
                        </div>
                        <div class="form-group">
                            <label for="fno">Flat number:</label>
                            <input type="number" class="form-control" id="fno" name="fno" aria-describedby="fnoHelp"
                                required>
                            <small id="fnoHelp" class="form-text text-muted">Enter the Flat number (make it a drop down
                                later)</small>
                        </div>
                        <div class="form-group">
                            <label for="oname">Owner Name:</label>
                            <input type="text" class="form-control" id="oname" name="oname" aria-describedby="onameHelp"
                                required>
                            <small id="onameHelp" class="form-text text-muted">Enter the flat owner's name</small>
                        </div>
                        <div class="form-group">
                            <label for="ocontact">Owner Contact No.:</label>
                            <input type="number" class="form-control" id="ocontact" name="ocontact"
                                aria-describedby="ocontactHelp" required>
                            <small id="ocontactHelp" class="form-text text-muted">Enter the flat owner's contact
                                number</small>
                        </div>
                        <div class="form-group">
                            <label for="oacontact">Owner Alternate Contact No.:</label>
                            <input type="number" class="form-control" id="oacontact" name="oacontact"
                                aria-describedby="oacontactHelp" required>
                            <small id="oacontactHelp" class="form-text text-muted">Enter the flat owner's alternate
                                contact number</small>
                        </div>
                        <div class="form-group">
                            <label for="oemail">Owner Email ID:</label>
                            <input type="email" class="form-control" id="oemail" name="oemail"
                                aria-describedby="oemailHelp" required>
                            <small id="oemailHelp" class="form-text text-muted">Enter the flat owner's email
                                address</small>
                        </div>
                        <div class="form-group">
                            <label for="omembers">Member Count:</label>
                            <input type="number" class="form-control" id="omembers" name="omembers"
                                aria-describedby="omembersHelp" required>
                            <small id="omembersHelp" class="form-text text-muted">Enter the flat owner's total
                                family members</small>
                        </div>
                        <div class=" form-check">
                            <label class="form-check-label" for="isRent">
                                <input class="form-check-input" type="checkbox" value="1" id="isRent" name="isRent"
                                    onclick="myFunction()">
                                Flat on rent?
                            </label>
                            <!--  <script>
                            $('#isRent').onchange(function() {
                                console.log($('#isRent').value)
                            });
                            </script> -->
                        </div>
                        <div class='' style='display:none' id='rentee'>
                            <div class="form-group">
                                <label for="rname">Rentee Name:</label>
                                <input type="text" class="form-control" id="rname" name="rname"
                                    aria-describedby="rnameHelp">
                                <small id="rnameHelp" class="form-text text-muted">Enter the flat rentee's name</small>
                            </div>
                            <div class="form-group">
                                <label for="rcontact">Rentee Contact No.:</label>
                                <input type="number" class="form-control" id="rcontact" name="rcontact"
                                    aria-describedby="rcontactHelp">
                                <small id="rcontactHelp" class="form-text text-muted">Enter the flat rentee's contact
                                    number</small>
                            </div>
                            <div class="form-group">
                                <label for="racontact">Rentee Alternate Contact No.:</label>
                                <input type="number" class="form-control" id="racontact" name="racontact"
                                    aria-describedby="racontactHelp">
                                <small id="racontactHelp" class="form-text text-muted">Enter the flat rentee's alternate
                                    contact number</small>
                            </div>
                            <div class="form-group">
                                <label for="remail">Rentee Email ID:</label>
                                <input type="email" class="form-control" id="remail" name="remail"
                                    aria-describedby="remailHelp">
                                <small id="remailHelp" class="form-text text-muted">Enter the flat rentee's email
                                    address</small>
                            </div>
                            <div class="form-group">
                                <label for="rmembers">Member Count:</label>
                                <input type="number" class="form-control" id="rmembers" name="rmembers"
                                    aria-describedby="rmembersHelp">
                                <small id="rmembersHelp" class="form-text text-muted">Enter the flat rentee's total
                                    family members</small>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-themeblack" name='addallotment-btn'>Add</button>
                        <button type="clear" class="btn btn-themeblack">Clear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container-fluid -->
<script>
function myFunction() {
    var checkBox = document.getElementById("isRent");
    // Get the output text
    var text = document.getElementById("rentee");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true) {
        // checkBox.value = 1;
        console.log(checkBox.value);
        text.style.display = "block";
    } else {
        checkBox.value = 0;
        console.log(checkBox.value);
        text.style.display = "none";
    }
};
</script>


<?php

include './includes/shared/footer.php';
include './includes/shared/scripts.php';

?>