<?php
$s_id=$_REQUEST['id'];
include "conn.php";

if(isset($_POST['submit']))
{
	$s_nm=$_POST['subcategory_name'];	
	$s_img=$_FILES['subcategory_image']['name'];	
		
	$q="Update subcategory_info set subcategory_name='$s_nm',subcategory_image='$s_img' where s_cid='$s_id'";
	
	$rs=mysqli_query($cn,$q);
	if($rs)
	{
		 move_uploaded_file($_FILES['subcategory_image']['tmp_name'],"upload/".$s_img);

		?>
		<script>
			alert("Update Successfully...");
			window.location="subcategory.php";
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

$q1="select * from subcategory_info where s_cid='$s_id'";
$r=mysqli_query($cn,$q1);
while($row=mysqli_fetch_array($r))
{
	$snm=$row['subcategory_name'];	
	$simg=$row['subcategory_image'];	
	
	
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
		<h3>Edit Subcategory</h3>
	<br><form action="#" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Subcategory Name:</td>
			<td>	
				<input type="text" value="<?php echo $snm;?>" name="subcategory_name"><br><br>
			</td>
		</tr>
		<tr>
			<td>Subcategory Image:
			</td>
			<td><input type="file" value="<?php echo $simg;?>" name="subcategory_image"><br><br>
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