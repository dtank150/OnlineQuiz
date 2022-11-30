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
		<h3>Add New Subcategory</h3>
	<br><form action="#" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Subcategory Name:</td>
			<td>	
				<input type="text" name="subcategory_name"><br><br>
			</td>
		</tr>
		<tr>
			<td>Subcategory Image:
			</td>
			<td><input type="file" name="subcategory_image"><br><br>
			</td>
		</tr>
		<tr>

			<td align="center" colspan=2>
				<input type="submit" name="insert" value="Insert">
			</td>
		</tr>	
		</table>
	
		</form>
</body>
</center>
</html>
</div>
</div>
<?php
if (isset($_POST['insert']))
{
	$s_nm=$_POST['subcategory_name'];
	$s_img=$_FILES['subcategory_image']['name'];
	

include "conn.php";
	$q="insert into subcategory_info values(null,'$s_nm','$s_img')";
	$rs=mysqli_query($cn,$q);
	if ($rs)
	 {
		 move_uploaded_file($_FILES['subcategory_image']['tmp_name'],"upload/".$s_img);
		 ?>
		 <script>
		alert("Data Inserted Successfully");
		window.location="subcategory.php";
		</script>
		<?php
	 }
	 else
	 {
		 ?>
	 	<script>
		alert("Data Not Inserted Successfully");
		window.location="subcategory.php";
		</script>
		<?php
	 }
}
?>
<?php
	include "footer.php";
	include "menu.php";
?>