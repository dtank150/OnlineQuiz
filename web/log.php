<?php
if(isset($_POST['Sign In']))
{
	$un=$_POST['email'];
	$pw=$_POST['password'];
	$cn=mysqli_connect("localhost","root","","online_quiz");
	$q="select * from login where username='$un' AND password='$pw'";
	$c=mysqli_query($cn,$q);
	$r=mysqli_num_rows($c);
	if($r>=1)
	{
?>
	
		<script>
			alert("Login successful");
			window.location="index.php";
			</script>
	
<?php
	 }
	 else
	 {
	 	echo "Invalid Username Password";
	 }
}	 
?>