<?php include './includes/header.php';?>

<?php include './includes/sidebar.php';?>

<?php include './includes/topbar.php';?>

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
    <h3 class="my-4">Complaints</h3>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-info mb-4">Manage complaints</h4>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php include './includes/footer.php';
include './includes/scripts.php';
?>