<?php

if(isset($_POST["otp"]))
{

if($_SESSION["otp"]==$_POST["otp"]){
                //print_r($_SESSION);
		//echo"<script>alert('Sucessfull login :) ');</script>";
		$_SESSION["otp"]=0;

        echo'<script>window.location.replace("user/index.php")</script>';
                
                
	}
	else{
            print_r($_SESSION);
            echo"<script>alert('Login failed :( ');</script>";
	}

}

?>