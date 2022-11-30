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
						$id=$_REQUEST['id'];
						include "conn.php";
						$q="select * from exam_details where category_id='$id'";
						$c=mysqli_query($con,$q);
						while($r=mysqli_fetch_array($c))
						{
					?>
							<div class="col-md-3 service-grid">
								<div class="icon">
								 <i class="glyphicon glyphicon-time"></i>
								</div>
								<h5><?php echo $r['title'];?></h5>
							<br>
								<table style="margin-left:60px" >
									<tr>
										<th>Total-Marks:</th>
										<td><?php echo $r['total_marks'];?></td>
									</tr>
									<tr>
										<th>Total-Question:</th>
										<td><?php echo $r['noofquestion'];?></td>
									</tr>
									<tr>
										<th>Positive-Marks:</th>
										<td><?php echo $r['positive_marks'];?></td>
									</tr>
									<tr>
										<th><b>Negative-Marks:</th>
										<td><?php echo $r['negative_marks'];?></td>
									</tr>
								</table>
							<br>
								<a style="color:blue" href="viewexamquestion.php?id=<?php echo $r['title'];?>&pm=<?php echo $r['positive_marks'];?>&nm=<?php echo $r['negative_marks'];?>">
								Click To Attempts Exam</a>							
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
