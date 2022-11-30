<?php
	include "header.php";
?>
	<div class="inner-block">
		<div class="blank">
			<h2></h2>
			<div class="blankpage-main" align="center">
<?php

include "conn.php";
	$q="Select*from report_info";
	$r=mysqli_query($cn,$q);
?>
<table border=2px>
<tr>
	<th>Rep_id</th>
	<th>Student_name</th>
	<th>Category_name</th>
	<th>Rank</th>	
</tr>
<?php
while($row=mysqli_fetch_array($r))
{
	?>
	<tr>
		<td><?php echo $row['rep_id'];?></td>
		<td><?php echo $row['student_name'];?></td>
		<td><?php echo $row['category_name'];?></td>
		<td><?php echo $row['rank'];?></td>
			</tr>
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
