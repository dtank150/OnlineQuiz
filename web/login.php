
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<?php
	session_start();
	if (isset($_POST['SignIn']))
	{
		$un=$_POST['email'];
		$pw=$_POST['password'];
		if($un=="Admin" && $pw=="admin")
		{
			$_SESSION['admin']=$un;
			?>
		<script>
		
		window.location="index.php";
		</script>
		<?php
		}
		
		else
		{
		?>
			<script>
			alert("Invalid Username And Password");
			window.location="login.php";
			</script>
		<?php
		
		}
			

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
	 ?>
	<script>
			alert("Login not successful");
			window.location="index.php";
	</script>
<?php
}	 
?>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
			
			
				<form action="#" method="POST" >
					<input type="text" name="email" placeholder="Email" required>
					<input type="password" name="password" class="lock" placeholder="Password" required>
					<input type="submit" name="SignIn" value="Login">	
				</form>
				
				<h5><a href="index.php">Go Back to Home</a></h5>
				

			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 Online Quiz. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Dipali Tank , Tulsi Bundela , Mitali Maradiya , Nikita Chudasama</a> </p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
