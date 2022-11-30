<?php
include "conn.php";
if(isset($_POST['submit']))
{
	$nm=$_POST['name'];
	$sub=$_POST['subject'];
	$em=$_POST['email'];
	$fed=$_POST['feedback'];
	$date=date("Y-m-d");
	$time=date("h:i:sa");
	
	$q="insert into feedback values('','$nm','$sub','$em','$fed','$date','$time')";
	
header("location:$ref?q=Thank you for your valuable feedback");
}
?>		