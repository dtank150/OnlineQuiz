
<a href="account.php"></a>

<table border=2px>
	<tr>
		<th>Cid</th>
		<th>Category_name</th>
		<th>Category_image</th>
		
	</tr>
<?php

include "conn.php";	
	$q="Select*from category_info";
	$r=mysqli_query($cn,$q);

while($row=mysqli_fetch_array($r))
{
	?>
	<tr>
		<td scope="row"><?php echo $row['cid'];?></td>
		<td scope="row"><?php echo $row['category_name'];?></td>
	
		<td scope="row">
			<img src="upload/<?php echo $row['category_image'];?>" height=50 width=50/>
		</td>
	</tr>
<?php
}
?>
</table>