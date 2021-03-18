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
                    <h4 class="card-title text-info mb-5">Update Flat</h4>
                    <form action="" autocomplete="off">
                        <div class="form-group">
                            <label for="fno">Flat number:</label>
                            <input type="text" class="form-control" id="fno" name="fno" aria-describedby="fnoHelp"
                                placeholder="<?php echo "101" ?>" disabled>
                            <!-- <small id="fnoHelp" class="form-text text-muted">Enter the Flat number</small> -->
                        </div>
                        <div class="form-group">
                            <label for="contactno">Contact number:</label>
                            <input type="text" class="form-control" id="contactno" name="contactno"
                                aria-describedby="contactnoHelp" required>
                            <small id="contactnoHelp" class="form-text text-muted">Enter the Contact number of
                                owner</small>
                        </div>
                        <div class="form-group">
                            <label for="econtactno">Emergency Contact number:</label>
                            <input type="text" class="form-control" id="econtactno" name="econtactno"
                                aria-describedby="fnoHelp" required>
                            <small id="fnoHelp" class="form-text text-muted">Enter the Emergency contact number of
                                owner</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
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