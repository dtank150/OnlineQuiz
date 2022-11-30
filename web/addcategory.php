<?php
include "header.php";
?>
<div class="inner-block">
		<div class="blank">
<html>
<head>
</head>
<body>
<center>
		<h3>Add New Category</h3>
	<br><form action="#" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Category Name:</td>
			<td>	
				<input type="text" name="category_name"><br><br>
			</td>
		</tr>
		<tr>
			<td>Category Image:
			</td>
			<td><input type="file" name="category_image"><br><br>
			</td>
		</tr>
		<tr>

			<td align="center" colspan="2">
				<input type="submit" name="insert" value="Insert">
			</td>
		</tr>	
		</table>
	
		</form>

</center>
</body>
</html>
</div>
</div>		
	
<?php	
include "conn.php";
if (isset($_POST['insert']))
{
	$c_nm=$_POST['category_name'];
	$c_img=$_FILES['category_image']['name'];
	
	$q="insert into category_info values(null,'$c_nm','$c_img')";
	$rs=mysqli_query($cn,$q);
	if ($rs)
	 {
		 move_uploaded_file($_FILES['category_image']['tmp_name'],"upload/".$c_img);
		 ?>
		 <script>
		alert("Data Inserted Successfully");
		window.location="category.php";
		</script>
		<?php
	 }
	 else
	 {
		 ?>
	 	<script>
		alert("Data Not Inserted Successfully");
		window.location="category.php";
		</script>
		<?php
	 }
}

?>
<?php
	include "footer.php";
	include "menu.php";
?>