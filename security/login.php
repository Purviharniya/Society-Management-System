<script src="vendor/jquery/login.js"></script>

<form method="POST" class="securityForm p-3" id="securityForm" action="security/includes/handlers/login.php">
    <div class="form-group">
        <div class="input-group">
            <span><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="uname" placeholder="Username" id="uname" required>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="passw" id="passw" placeholder="Password" required>
            <i class="fa fa-eye" id="togglePass"></i>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label><input type="checkbox" name="rme" id="rme"> Remember me</label>
            </div>
            <div class="col text-right">
                <a href="#" data-toggle="modal" data-target="#forgotPassword">Forgot Password?</a>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" name="securitysubmit" value="Login" class="btn btn-block btn-primary">
    </div>
</form>

<!-- Forgot Password Modal -->
<div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" id="forgotpasswordForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="mobno" name="forgotmobno" id="forgotmobno" class="form-control"
                            placeholder="Enter your valid mobile number..." required>
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
const togglePass = document.querySelector('#togglePass');
const passw = document.querySelector('#passw');
togglePass.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = passw.getAttribute('type') === 'password' ? 'text' : 'password';
    passw.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>