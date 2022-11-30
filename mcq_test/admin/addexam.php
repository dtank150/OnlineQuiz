<?php 
	include "header.php";
	include "connection.php";
	
if(isset($_POST['btnok']))
{
	$title=$_POST['titletxt'];
	$noofque=$_POST['noqtxt'];
	$totalmarks=$_POST['tmtxt'];
	$posmarks=$_POST['pmtxt'];
	$negmarks=$_POST['nmtxt'];
	$cat=$_POST['catsl'];

	$q="INSERT INTO exam_details values('','$cat','$title','$noofque','$totalmarks','$posmarks','$negmarks')";
	$c=mysqli_query($con,$q);

	if($c)
	{
		?>
		<script>
			alert('Succesfully Inserted');
			window.location="viewexam.php";
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
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					
					 <h2 class="w3_inner_tittle">Add New Category</h2>
									<!-- tables -->
									
									<div class="agile-tables">
									<div class="w3l-table-info agile_info_shadow">
									<div class="grid-1">
									<div class="form-body">
									<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data"> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Category-Name</label>
									<div class="col-sm-9"> 
										<select name="catsl" style="padding-top:3px" class="form-control" >
											<option>Select Category</option>
											<?php 
											$q="select * from category";
											include "connection.php";
											$c=mysqli_query($con,$q);
											while($r=mysqli_fetch_array($c))
											{
												?>
												<option><?php echo $r['category_name'];?></option>
												<?php
											}
											
											?>
										</select>										
									</div> 
									</div> 
									
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Exam-Title</label>
									<div class="col-sm-9"> 
										<input type="text" name="titletxt" class="form-control" required placeholder="Any title for this"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">No Of Question</label>
									<div class="col-sm-9"> 
										<input type="text" name="noqtxt" class="form-control" required placeholder="how many question"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Total-Marks</label>
									<div class="col-sm-9"> 
										<input type="text" name="tmtxt" class="form-control" required placeholder="total marks"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Positive-Marks</label>
									<div class="col-sm-9"> 
										<input type="text" name="pmtxt" class="form-control" required placeholder="1 or more"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Negative-Marks</label>
									<div class="col-sm-9"> 
										<input type="text" name="nmtxt" class="form-control" required placeholder="0 or more"> 
									</div> 
									</div> 
									
									<div class="col-sm-offset-2"> 
									<button type="submit" name="btnok" class="btn btn-default">Insert</button> 
									</div> 
									</form> 
																							</div>

																					</div>				  
								</div>
					</div>
						
				    </div>
				</div>
	</div>
	<?php 
		include "footer.php";
	?>