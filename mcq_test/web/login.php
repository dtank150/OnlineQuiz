<?php 
	include "header.php";
?>

<head>
<style>
.ab
{
  width: 80%;
  color: #555;
  outline: none;
  font-size: 0.9em;
  padding: 13px 13px;
  margin-bottom: 1em;
  border: solid 1px #555;
  -webkit-appearance: none;
  float: left;
  margin-right: 1%;
}
</style>
</head>
<?php
include "connection.php";
if(isset($_POST['btnok']))
{
	include "connection.php";
	$un=$_POST['untxt'];
	$password=$_POST['pwtxt'];
	
	
	$q="Select * from users where username='$un' AND password='$password'";
	$c=mysqli_query($con,$q);
	$r=mysqli_num_rows($c);
	if($r>=1)
	{
		$_SESSION['user']=$un;
		?>
		<script>
			alert('Login Succesfully');
			window.location="index.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert('Invalid Username And Passowrd');
		</script>
		<?php
	}
}
?>

			<div class="contact" id="contact">
					<h3 class="tittle two">Login Here</h3>
						<div class="contact-top">
							<div class="col-md-8 contact-top-right">
								<form action="#" method="post">
									 <input type="text" class="ab" name="untxt"  placeholder="Username">
									 <input type="password" class="ab" name="pwtxt"  placeholder="Passowrd">
									<br><input class="ab" type="submit" name="btnok" value="Register">
									
								</form>
							</div>
							
						<div class="clearfix"> </div>
					</div>
				</div>

<?php 
	include "footer.php";
?>
