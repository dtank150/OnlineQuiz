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
	$name=$_POST['nmtxt'];
	$un=$_POST['untxt'];
	$gender=$_POST['slgender'];
	$email=$_POST['emailtxt'];
	$cno=$_POST['cnotxt'];
	$city=$_POST['citytxt'];
	$address=$_POST['addtxt'];
	$password=$_POST['pwtxt'];
	
	
	$q="insert into users values('','$name','$un','$gender','$email','$cno','$city','$address','$password')";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			alert('SignUp Succesfully');
			window.location="login.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert('Something Goes Wrong');
		</script>
		<?php
	}
}
?>

<?php 
	include "header.php";
?>
			<div class="contact" id="contact">
					<h3 class="tittle two">SignUp Here</h3>
						<div class="contact-top">
							<div class="col-md-8 contact-top-right">
								<form action="#" method="post">
									 <input type="text" class="ab" name="nmtxt"   placeholder="Name">
									 <input type="text" class="ab" name="untxt"  placeholder="Username">
									 <input type="password" class="ab" name="pwtxt"  placeholder="Passowrd">
									 <input type="email" class="ab" name="emailtxt"  placeholder="Email">
									 <input type="text" name="cnotxt" class="ab" placeholder="Contact_No">
									 <input type="text" name="citytxt" class="ab" placeholder="City">
									 
									<select name="slgender" class="ab">
										<option>Select Gender</option>
										<option>Male</option>
										<option>FeMale</option>
									</select>
									<textarea value="Address" name="addtxt" style="width:80%"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}">Address</textarea><BR>
									<br><input class="ab" type="submit" name="btnok" value="Register">
									
								</form>
							</div>
							
						<div class="clearfix"> </div>
					</div>
				</div>

<?php 
	include "footer.php";
?>
