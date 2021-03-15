<?php 

//include("config.php"); //to access the db connection and setting session if validation returns true
//include("./admin/includes/handlers/login.php"); //write admin validations, functions, etc in this file
//include("./user/includes/handlers/login.php"); //write user validations,functions etc in this file

?>
    <form method="POST" class="userForm p-3" action="">
        <div class="form-group">
            <div class="input-group">
                <span><i class="fa fa-building"></i></span>
                <input type="number" class="form-control"name="flatno" id="flatno" placeholder ="Enter your Flat Number">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span><i class="fa fa-phone"></i></span>
                <input type="number" class="form-control"name="phoneNumber" id="phoneNumber" placeholder ="Enter your Phone Number ">
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="usersubmit" value="Send OTP" class="btn btn-block btn-primary">
        </div>
    </form>
