<?php

//include("config.php"); //to access the db connection and setting session if validation returns true
//include("./admin/includes/handlers/login.php"); //write admin validations, functions, etc in this file
//include("./user/includes/handlers/login.php"); //write user validations,functions etc in this file

?>
<form method="POST" class="adminForm p-3" id="adminForm">
    <div class="form-group">
        <div class="input-group">
            <span><i class="fa fa-user"></i></span>
            <input type="username" class="form-control" name="username" placeholder="Username" id="username">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <i class="fa fa-eye" id="togglePassword"></i>
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
        <input type="submit" name="adminsubmit" value="Login" class="btn btn-block btn-primary">
    </div>
</form>

<!-- Forgot Password Modal -->
<div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" id="forgotpassForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="forgotemail" id="forgotemail" class="form-control"
                            placeholder="Enter your valid email..." required>
                    </div>
                    <div class="form-group">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign In</button>
                    <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i> Send
                        Request</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
});
</script>