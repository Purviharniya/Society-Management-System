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
                            <select class="form-control" id="block_select" name="block_select" required>
                                <option value="" selected> Select a Block</option>
                                <?php 
                                
                                $sql = "SELECT distinct(BlockNumber) from flats";
                                $res = mysqli_query($con,$sql);

                                while($row= mysqli_fetch_assoc($res)){
                                    echo '
                                    <option value="'. $row["BlockNumber"].'">' .$row["BlockNumber"]. ' </option>';
                                }
                                ?>
                            </select>
                            <small id="blockHelp" class="form-text text-muted">Select the block name </small>
                        </div>
                        <div class="form-group">
                            <label for="flatno">Flat Number:</label>
                            <select class="form-control" id="flat_select" name="flat_select" required>
                                <option value="" selected> Select a Flat</option>
                            </select>
                            <small id="flatnoHelp" class="form-text text-muted">Select the flat Number (Make
                                dropdown)</small>
                        </div>
                        <button type="submit" class="btn btn-themeblack" name='addflatarea-btn'>Search</button>
                        <button type="reset" class="btn btn-themeblack">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container-fluid -->
<script>
$("#block_select").change(function() {
    getflats();
});

function getflats() {
    var data = $("#block_select").val();
    console.log("Block selected: ", data);
    $.ajax({
        type: "POST",
        data: {
            block: data
        },
        url: "includes/handlers/add_bill_flat.php",
        success: function(res) {
            // alert(res);
            // console.log(res);
            $("#flat_select").html(res);
        }
    });

}
</script>


<?php

include './includes/shared/footer.php';
include './includes/shared/scripts.php';

?>