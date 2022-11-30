<?php 
	include "header.php";
	include "connection.php";
?>
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					  <?php
					  $q="select * from exam_details";
					  $c=mysqli_query($con,$q);
					 ?>
					 <h2 class="w3_inner_tittle">Exam-Details</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										<a href="addexam.php" style="float:right"><b><u>Add new Exam</u></b></a>
										 <h3 class="w3_inner_tittle two">Exam Listing</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>Exam_Id</th>
												<th>Catgeory</th>
												<th>Exam-Title</th>
												<th>NoOfQuestion</th>
												<th>Total Marks</th>
												<th>Positive Marks</th>
												<th>Negative Marks</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
										<?php
										 while($r=mysqli_fetch_array($c))
										 {
											?>
					 
											<tr>
												<td align="center"><?php echo $r['exam_id'];?></td>
												<td  align="center"><?php echo $r['category_id'];?></td>
												<td><?php echo $r['title'];?></td>
												<td><?php echo $r['noofquestion'];?></td>
												<td><?php echo $r['total_marks'];?></td>
												<td><?php echo $r['positive_marks'];?></td>
												<td><?php echo $r['negative_marks'];?></td>
												<td>
												<a href="editexam.php?id=<?php echo $r['exam_id'];?>">
													<i style="color: green; font-size:18px " class="fa fa-pencil-square-o"></i>
												</a>
											&nbsp;&nbsp;&nbsp;
												<a onclick="return confirm('Are You Sure you want to delete this records?')" href="deleteexam.php?id=<?php echo $r['exam_id'];?>">
													<i style="color: red;  font-size:18px" class="fa fa-trash-o"></i>
												</a>
												</td>
										    </tr>
										<?php
										 }
										?>										 
											</tbody>
										  </table>
									
									  
								</div>
					</div>
						
				    </div>
				</div>
	</div>
	<?php 
		include "footer.php";
	?>