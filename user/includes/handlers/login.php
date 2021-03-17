<?php

$_SESSION["otp"] = 0;

if(isset($_POST["flatno"]) && isset($_POST["contactno"]))
{
$flatno=$_POST["flatno"];
$contactno=$_POST["contactno"];

//echo $flatno;
//echo $contactno;

$db = mysqli_connect('localhost','root','','sms') or 
die('Error connecting to MySQL server.');

$query = "SELECT * FROM allotments WHERE FlatNumber= '{$flatno}'  ANd  ( ContactNumber = '{$contactno}' OR AlternateContactNo = '{$contactno}' ) ";
//echo $query;
$result = mysqli_query($db, $query); 


if($result)
{

$count=mysqli_num_rows($result);

	if($count==0) {
		echo"<script>alert('Either flat number or contact number provided is incorrect.');</script>";
	} else {
       
        //session_start();
        $_SESSION["flatno"] =  $flatno;
        $_SESSION["contactno"] = $contactno;
        
        include("otp.php");
        
        
	}

}

mysqli_close($db);

}?> 