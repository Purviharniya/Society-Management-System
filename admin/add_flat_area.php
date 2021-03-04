<?php

include 'includes/header.php';
include 'includes/sidebar.php';
include 'includes/topbar.php';

?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="my-4">Flat Area</h3>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card pt-1 pb-5">
                <div class="card-body">
                    <h4 class="card-title text-info mb-5">Add Flat Area</h4>

                    <form>
                    
                        <div class="form-group">
                            <label for="block">Block:</label>
                            <input type="text" class="form-control" id="block" name="block" aria-describedby="blockHelp" required>
                            <small id="blockHelp" class="form-text text-muted">Enter the block name</small>
                        </div>
                        <div class="form-group">
                            <label for="series">Flat Series:</label>
                            <input type="text" class="form-control" id="series" name="series" aria-describedby="seriesHelp" required>
                            <small id="seriesHelp" class="form-text text-muted">Enter the flat series for eg- 01,02,03,04</small>
                        </div>
                        <div class="form-group">
                            <label for="area">Flat Area:</label>
                            <input type="text" class="form-control" id="area" name="area" aria-describedby="areaHelp" required>
                            <small id="areaHelp" class="form-text text-muted">Enter the area for each flat in the series</small>
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