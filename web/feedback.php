<?php
	include "header.php";
?>
	<div class="inner-block">
		<div class="blank">
			<h2></h2>
			<div class="blankpage-main" align="center">
<?php

include "conn.php";
	$q="Select*from feedback";
	$r=mysqli_query($cn,$q);
?>
<table border=2px
<tr>
	<th>F_id</th>
	<th>Name</th>
    <th>Subject</th>
    <th>Email</th>
    <th>Feedback</th>
	<th>Date</th>
	<th>Time</th>

	
</tr>
<?php
while($row=mysqli_fetch_array($r))
{
	?>
	<tr>
		<td><?php echo $row['fid'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['subject'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['feedback'];?></td>
		<td><?php echo $row['date'];?></td>
		<td><?php echo $row['time'];?></td>
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
