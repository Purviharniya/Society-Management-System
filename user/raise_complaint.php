<?php include './includes/header.php';?>

<?php include './includes/sidebar.php';?>

<?php include './includes/topbar.php';?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="my-4">Complaints</h3>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-info mb-4">Raise a complaint</h4>
                    <form action="./includes/queries/raise_complaint.php" method="POST" autocomplete="OFF">
                        <div class="form-group">
                            <label for="complaint_type">Complaint Type:</label>
                            <select class="form-control" name="complaint_type" aria-describedby="typeHelp" required>
                                <option selected value='0'>Choose a complaint type</option>
                                <?php 
                                
                                $sql = "SELECT * from complainttypes";
                                $res = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($res)){
                                    echo "<option value= '" .$row['complaint_type']. "'>" . $row['complaint_type'] . "</option>"; 
                                }
                                ?>
                            </select>
                            <small id="typeHelp" class="form-text text-muted">Select the Complaint Type</small>
                        </div>
                        <div class="form-group">
                            <label for="complaint_desc">Complaint Description:</label>
                            <textarea class="form-control" id="complaint_desc" name="complaint_desc"
                                placeholder="Enter complaint description...." rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-themeblack" name='addcomplaint-btn'>Add</button>
                        <button type="reset" class="btn btn-themeblack">Clear</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php include './includes/footer.php';
include './includes/scripts.php';
?>