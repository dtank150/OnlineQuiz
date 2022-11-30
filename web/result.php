<?php
	include "header.php";
?>
	<div class="inner-block">
		<div class="blank">
			<h2></h2>
			<div class="blankpage-main" align="center">
<?php

include "conn.php";
	$q="Select*from result_info";
	$r=mysqli_query($cn,$q);
?>
<table border=2px>
<tr>
	<th>Res_id</th>
	<th>Student_name</th>
	<th>Category_name</th>
	<th>Percentage</th>
	<th>Rank</th>
	<th>Declaration_date</th>	
	<th>Total</th>	

</tr>
<?php
while($row=mysqli_fetch_array($r))
{
	?>
	<tr>
		<td><?php echo $row['res_id'];?></td>
		<td><?php echo $row['student_name'];?></td>
		<td><?php echo $row['category_name'];?></td>
		<td><?php echo $row['percentage'];?></td>
		<td><?php echo $row['rank'];?></td>
		<td><?php echo $row['declaration_date'];?></td>
		<td><?php echo $row['total'];?></td>

	<?php
}
?>
</table>
			</div>
		</div>
	</div>
<?php
	include "footer.php";
	include "menu.php";
?>
