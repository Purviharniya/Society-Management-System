<?php

$_SESSION["otp"] = 0;

if(isset($_POST["flatno"]) && isset($_POST["contactno"]) && isset($_POST['blockno']))
{
$flatno=$_POST["flatno"];
$contactno=$_POST["contactno"];
$blockno = $_POST['blockno'];
//echo $flatno;
//echo $contactno;

$db = mysqli_connect('localhost','root','','sms') or 
die('Error connecting to MySQL server.');

$query = "SELECT * FROM allotments INNER join flats on allotments.FlatID=flats.FlatID WHERE allotments.FlatNumber='{$flatno}' AND ( allotments.ContactNumber = '{$contactno}' OR allotments.AlternateContactNo ='{$contactno}') and flats.BlockNumber='{$blockno}';";
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
        $_SESSION["blockno"]=$blockno;
        include("otp.php");
        
        
	}

}

mysqli_close($db);

}?>