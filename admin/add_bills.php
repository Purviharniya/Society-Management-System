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

    <h3 class="my-4">Bills</h3>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card shadow pt-1 pb-5">
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <h4 class="font-weight-bold text-primary">Add Bill</h4>
                    </div>

                    <form action="includes/queries/addbill.php" method="POST" autocomplete="off">

                        <div class="form-group">
                            <label for="block">Block:</label>
                            <input type="text" class="form-control" id="block" name="block" aria-describedby="blockHelp"
                                required>
                            <small id="blockHelp" class="form-text text-muted">Select the block name (make
                                dropdown)</small>
                        </div>
                        <div class="form-group">
                            <label for="flatno">Flat Number:</label>
                            <input type="text" class="form-control" id="flatno" name="flatno"
                                aria-describedby="flatnoHelp" required>
                            <small id="flatnoHelp" class="form-text text-muted">Select the flat Number (Make
                                dropdown)</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name='addflatarea-btn'>Search</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
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