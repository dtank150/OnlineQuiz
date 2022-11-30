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
?>

					<div class="services" id="service">
					 <h3 class="tittle two" style="margin-top:-30px;">Exam Details</h3>
						<div class="serve-grids">
					<?php
						$un=$_SESSION['user'];
						include "connection.php";
						$q="select * from result_info where username='$un'";
						$c=mysqli_query($con,$q);
						while($r=mysqli_fetch_array($c))
						{
					?>
							<div class="col-md-3 service-grid">
								<div class="icon">
								 <i class="glyphicon glyphicon-time"></i>
								</div>
								<h5><?php echo $r['exam_id'];?></h5>
							<br>
								<table style="margin-left:60px" >
									<tr>
										<th>Total-Marks:</th>
										<td><?php echo $r['result'];?></td>
									</tr>
									<tr>
										<th>Date:</th>
										<td><?php echo $r['r_date'];?></td>
									</tr>
								</table>
							</div>
							<?php 
						}
						?>
						
						
						<div class="clearfix"></div>

					</div>
				</div>
			<!--//end-services-->
	<!--start-teachers-->
				<!--contact-->
		<?php 
	include "footer.php";
?>
