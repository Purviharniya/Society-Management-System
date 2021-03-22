<?php
include("user/includes/handlers/login.php");
?>

<form method="POST" class="userForm p-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
        <div class="input-group">
            <span><i class="fa fa-building"></i></span>
            <input type="text" class="form-control" name="blockno" id="blockno" placeholder="Enter your Block Number">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span><i class="fa fa-building"></i></span>
            <input type="number" class="form-control" name="flatno" id="flatno" placeholder="Enter your Flat Number">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span><i class="fa fa-phone"></i></span>
            <input type="number" class="form-control" name="contactno" id="contactno"
                placeholder="Enter your Phone Number ">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" name="usersubmit" value="Send OTP" class="btn btn-block btn-primary">Send OTP</button>
    </div>
</form>