<?php 
	include "header.php";
	include "connection.php";
?>
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					  <?php
					  $q="select * from question_master";
					  $c=mysqli_query($con,$q);
					 ?>
					 <h2 class="w3_inner_tittle">Question-Details</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <a href="addquestion.php" style="float:right"><b><u>Add new Question</u></b></a>
										 <h3 class="w3_inner_tittle two">Question Listing</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>Question_ID</th>
												<th>Exam_ID</th>
												<th>Title</th>
												<th>Option1</th>
												<th>Option2</th>
												<th>Option3</th>
												<th>Option4</th>
												<th>Answer</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
										<?php
										 while($r=mysqli_fetch_array($c))
										 {
											?>
					 
											<tr>
												<td align="center"><?php echo $r['ques_id'];?></td>
												<td  align="center"><?php echo $r['exam_id'];?></td>
												<td><?php echo $r['question_title'];?></td>
												<td><?php echo $r['option1'];?></td>
												<td><?php echo $r['option2'];?></td>
												<td><?php echo $r['option3'];?></td>
												<td><?php echo $r['option4'];?></td>
												<td><?php echo $r['answer'];?></td>
												<td>
												<a href="editquestion.php?id=<?php echo $r['ques_id'];?>">
													<i style="color: green; font-size:18px " class="fa fa-pencil-square-o"></i>
												</a>
											&nbsp;&nbsp;&nbsp;
												<a onclick="return confirm('Are You Sure you want to delete this records?')" href="deletequestion.php?id=<?php echo $r['ques_id'];?>">
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