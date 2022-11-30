<?php
$c_id=$_REQUEST['id'];
include "conn.php";

if(isset($_POST['submit']))
{
	$c_nm=$_POST['category_name'];	
	$c_img=$_FILES['category_image']['name'];	
		
	$q="Update category_info set category_name='$c_nm',category_image='$c_img' where cid='$c_id'";
	
	$rs=mysqli_query($cn,$q);
	if($rs)
	{
		 move_uploaded_file($_FILES['category_image']['tmp_name'],"upload/".$c_img);

		?>
		<script>
			alert("Update Successfully...");
			window.location="category.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Update Not Successfully");
			</script>
		<?php
	}
}

$q1="select * from category_info where cid='$c_id'";
$r=mysqli_query($cn,$q1);
while($row=mysqli_fetch_array($r))
{
	$cnm=$row['category_name'];	
	$cimg=$row['category_image'];	
	
	
}
?>
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
		<h3>Edit Category</h3>
	<br><form action="#" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Category Name:</td>
			<td>	
				<input type="text" value="<?php echo $cnm;?>" name="category_name"><br><br>
			</td>
		</tr>
		<tr>
			<td>Category Image:
			</td>
			<td><input type="file" value="<?php echo $cimg;?>" name="category_image"><br><br>
			</td>
		</tr>
		<tr>

			<td align="center" colspan=2>
				<input type="submit" name="submit" value="Update">
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
	include "footer.php";
	include "menu.php";
?>