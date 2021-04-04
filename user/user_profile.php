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
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card shadow pt-1 pb-5">
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <h4 class="font-weight-bold text-primary mb-5">User Profile</h4>
                        <form action="" name="profile_form">
                            <div class="form-group">
                                <label for="blockno" class="font-weight-bold">Block Number:</label>
                                <input type="text" class="form-control" name="blockno" id="blockno" readonly>
                            </div>
                            <div class="form-group">
                                <label for="flatno" class="font-weight-bold">Flat Number:</label>
                                <input type="text" class="form-control" name="flatno" id="flatno" readonly>
                            </div>
                            <div class="form-group">
                                <label for="o_name" class="font-weight-bold">Owner Name:</label>
                                <input type="text" class="form-control" name="o_name" id="o_name">
                            </div>

                            <div class="form-group">
                                <label for="o_contact" class="font-weight-bold">Contact Number:</label>
                                <input type="text" class="form-control" name="o_contact" id="o_contact">
                            </div>

                            <div class="form-group">
                                <label for="oa_contact" class="font-weight-bold">Alternate Contact Number:</label>
                                <input type="number" class="form-control" name="oa_contact" id="oa_contact">
                            </div>

                            <div class="form-group">
                                <label for="a_email" class="font-weight-bold">Email Address:</label>
                                <input type="email" class="form-control" name="a_email" id="a_email">
                            </div>

                            <div class="form-group">
                                <label for="o_email" class="font-weight-bold">Total Members:</label>
                                <input type="email" class="form-control" name="o_email" id="o_email">
                            </div>

                            <input type="submit" class="btn btn-primary" value="Update" name="profile_submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container-fluid -->

<?php

include './includes/shared/footer.php';
include './includes/shared/scripts.php';

?>