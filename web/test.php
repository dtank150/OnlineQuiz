<?php
	include "header.php";
?>
	<div class="inner-block">
		<div class="blank">
			<h2></h2>
			<div class="blankpage-main" align="Right">
					

<a href="addtest.php">Add new Test</a>
					
					<?php
					
include "conn.php";
	$q="Select*from test_info";
	$r=mysqli_query($cn,$q);
?>
<table border=2px>
<tr>
	<th>Test_id</th>
	<th>Marks</th>
	<th>Questions</th>
	<th>Action</th>
</tr>
<?php
while($row=mysqli_fetch_array($r))
{
	?>
	<tr>
		<td><?php echo $row['test_id'];?></td>
		<td><?php echo $row['marks'];?></td>
		<td><?php echo $row['questions']."<br/>";?></td>
		<td>
			<a href="edittest.php?id=<?php echo $row['test_id']?>">Edit</a></br>
		<a href="deletetest.php?id=<?php echo $row['test_id']?>">Delete</a>
		
		</td>
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
