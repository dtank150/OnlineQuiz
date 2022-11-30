<?php
	include "header.php";
?>
	<div class="inner-block">
		<div class="blank">
			<h2></h2>
			<div class="blankpage-main" align="Right">
<a href="addsubcategory.php">Add new Subcategory</a>
			
	
	

<table border=2px>
<tr>
	<th>S_cid</th>
	<th>Subcategory_name</th>
	<th>Subcategory_image</th>
	<th>Action</th>
</tr>
<?php

include "conn.php";
$q="Select*from subcategory_info";
	$r=mysqli_query($cn,$q);
while($row=mysqli_fetch_array($r))
{
	?>
	<tr>
		<td><?php echo $row['s_cid'];?></td>
		<td><?php echo $row['subcategory_name'];?></td>
		<td><img src="upload/<?php echo $row['subcategory_image'];?>" height=50 width=50/></td>
		<td>
			<a href="editsubcategory.php?id=<?php echo $row['s_cid']?>">Edit</a></br>
		 <a href="deletesubcategory.php?id=<?php echo $row['s_cid']?>">Delete</a>
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
