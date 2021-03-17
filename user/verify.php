<?php
//session_start();
//session_unset();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<body>

<h2>Verify OTP</h2>


<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="otp">Enter OTP</label><br>
  <input type="number" id="otp" name="otp"><br>
  <button type="submit" name="submit">Verify</button>
</form> 

<?php
include("includes/handlers/verify.php");
?>