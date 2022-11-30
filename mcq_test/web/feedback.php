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
include "header.php";
if(!isset($_SESSION['user']))
	{
		?>
		<script>
			alert('You have to Login first');
			window.location="login.php";
		</script>
		<?php
	}
include "connection.php";
if(isset($_POST['btnok']))
{
	include "connection.php";
	$name=$_POST['nmtxt'];
	$sub=$_POST['subtxt'];
	$msg=$_POST['msgtxt'];
	$email=$_POST['emailtxt'];
	$dt=date("d-m-Y");
	
	$q="insert into feedback values('','$name','$msg','$sub','$email','$dt')";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			alert('Message Send Succesfully');
			window.location="index.php";
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
		<div class="contact" id="contact">
					<h3 class="tittle two">Send Suggestion To US</h3>
						<div class="contact-top">
							<div class="col-md-8 contact-top-right">
								<form action="#" method="post">
									 <input type="text" name="nmtxt" class="text ab" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
									 <input type="text" name="emailtxt"  class="text ab" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
									 <input type="text" name="subtxt" class="text ab" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
									 <textarea value="Message" name="msgtxt"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
									<div class="sub-button">
										<input type="submit" name="btnok" value="SEND">
									</div>
								</form>
							</div>
							<div class="col-md-4 contact-top-left">
							<div class="contact-top-one">
								<h4>Address:</h4>
									<p>Opp Hemu Gadhvi Hall.
									<span>Tagor Road,</span>
										Rajkot, Gujarat
									</p>
							</div>
							<div class="contact-top-one">
								<h4>Phone:</h4>
									<p>Telephone: +1 234 567 9871
									</p>
							</div>
							<div class="contact-top-one">
								<h4>E-mail:</h4>
								<p><a href="mailto:info@example.com">mail@example.com</a></p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>

<?php 
	include "footer.php";
?>
