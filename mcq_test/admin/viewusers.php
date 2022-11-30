<?php 
	include "header.php";
	include "connection.php";
?>
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					  <?php
					  $q="select * from users";
					  $c=mysqli_query($con,$q);
					 ?>
					 <h2 class="w3_inner_tittle">User-Details</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two">User Listing</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>Name</th>
												<th>UserName</th>
												<th>Gender</th>
												<th>Email</th>
												<th>Contact</th>
												<th>City</th>
												<th>Address</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
										<?php
										 while($r=mysqli_fetch_array($c))
										 {
											?>
					 
											<tr>
												<td align="center"><?php echo $r['name'];?></td>
												<td  align="center"><?php echo $r['username'];?></td>
												<td><?php echo $r['gender'];?></td>
												<td><?php echo $r['email'];?></td>
												<td><?php echo $r['contact'];?></td>
												<td><?php echo $r['city'];?></td>
												<td><?php echo $r['address'];?></td>
												<td>
												
												<a onclick="return confirm('Are You Sure you want to delete this records?')" href="deleteusers.php?id=<?php echo $r['customer_id'];?>">
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