<?php 

//include("config.php"); //to access the db connection and setting session if validation returns true
//include("./admin/includes/handlers/login.php"); //write admin validations, functions, etc in this file
//include("./user/includes/handlers/login.php"); //write user validations,functions etc in this file
include('includes/header.php');
?>
    <div class="container mt-2 mb-4">
    <div class="col-sm-8 ml-auto mr-auto">
        <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
        <li class="nav-item"> <a class="nav-link active" id="pills-user-tab" data-toggle="pill" href="#pills-user" role="tab" aria-controls="pills-user" aria-selected="true">User</a> </li>
        <li class="nav-item"> <a class="nav-link" id="pills-admin-tab" data-toggle="pill" href="#pills-admin" role="tab" aria-controls="pills-admin" aria-selected="false">Admin</a> </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
            <div class="col-sm-12 border border-primary shadow rounded pt-2">
                <form method="post" class="userForm p-3">
                    <div class="form-group">
                        <div class="input-group">
                            <span><i class="fa fa-user"></i></span>
                            <input type="username" class="form-control" name="username" placeholder="Username" id="username" >
                        </div>  
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control"name="password" id="password" placeholder ="Password" ">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label><input type="checkbox" name="condition" id="condition"> Remember me</label>
                            </div>
                            <div class="col text-right"> 
                                <a href="#" data-toggle="modal" data-target="#forgotPass">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Login" class="btn btn-block btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-admin" role="tabpanel" aria-labelledby="pills-admin-tab">
            <div class="col-sm-12 border border-primary shadow rounded pt-2">
            <form method="post" id="adminForm">
                <div class="form-group">
                <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                <input type="email" name="adminemail" id="adminemail" class="form-control" placeholder="Enter valid email" required>
                </div>
                <div class="form-group">
                <label class="font-weight-bold">User Name <span class="text-danger">*</span></label>
                <input type="text" name="adminusername" id="adminusername" class="form-control" placeholder="Choose your user name" required>
                <div class="text-danger"><em>This will be your login name!</em></div>
                </div>
                <div class="form-group">
                <label class="font-weight-bold">Phone #</label>
                <input type="text" name="signupphone" id="signupphone" class="form-control" placeholder="(000)-(0000000)">
                </div>
                <div class="form-group">
                <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
                <input type="password" name="signuppassword" id="signuppassword" class="form-control" placeholder="***********" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"
                    required>
                </div>
                <div class="form-group">
                <label class="font-weight-bold">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" name="signupcpassword" id="signupcpassword" class="form-control" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="***********" required>
                </div>
                <div class="form-group">
                <label><input type="checkbox" name="signupcondition" id="signupcondition" required> I agree with the <a href="javascript:;">Terms &amp; Conditions</a> for Registration.</label>
                </div>
                <div class="form-group">
                <input type="submit" name="signupsubmit" value="Sign Up" class="btn btn-block btn-primary">
                </div>
            </form>
            <style  type="text/css">
                    .userForm .form-control {
            min-height: 38px;
            box-shadow: none !important;
            border-width: 0 0 1px 0;
            border-radius: 0;
        }
        .form-group {
            margin-bottom: 25px; }

        .userForm .fa {
            
            position: relative;
            top: 6px;
            
        }
            </style>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <form method="post" id="forgotpassForm">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input type="email" name="forgotemail" id="forgotemail" class="form-control" placeholder="Enter your valid email..." required>
                </div>
                <div class="form-group">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign In</button>
                <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Request</button>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
    
    <?php
        include('includes/scripts.php');
    ?>
</body>

</html>