<a href="account.php"></a>

<table border=2px>
<tr>
	<th>S_cid</th>
	<th>Subcategory_name</th>
	<th>Subcategory_image</th>
	
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
	</tr>
	<?php
}
?>
</table>