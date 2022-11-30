<?php
	include "header.php";
?>
	<div class="inner-block">
		<div class="blank">
			<h2></h2>
			<div class="blankpage-main" align="Right">
		
<a href="addcategory.php">Add new Category</a>




<table border=2px>
	<tr>
		<th>Cid</th>
		<th>Category_name</th>
		<th>Category_image</th>
		<th>Action</th>
	</tr>
<?php
$cn=mysqli_connect("localhost","root","","online_quiz");	
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
		<td>
			<a href="edit.php">Edit</a>
			<a href="deletecategory.php?id=<?php echo $row['cid'];?>">Delete</a>
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