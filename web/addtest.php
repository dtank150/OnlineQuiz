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
		<h3>Add New Test</h3>
	<br><form action="#" method="POST">
	<table>
		<tr>
			<td>Marks:
			</td>
			<td><input type="text" name="marks"><br><br>
			</td>
		</tr>
		<tr>
			<td>Questions:
			</td>
			<td><input type="text" name="questions"><br><br>
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
	$marks=$_POST['marks'];
	$questions=$_POST['questions'];
	
include "conn.php";
		$q="insert into test_info values(null,'$marks','$questions')";
	$rs=mysqli_query($cn,$q);
	if ($rs)
	 {
		?>
		 <script>
		alert("Data Inserted Successfully");
		window.location="test.php";
		</script>
		<?php
	 }
	 else
	 {
		 ?>
	 	<script>
		alert("Data Not Inserted Successfully");
		window.location="test.php";
		</script>
		<?php
	 }
}
 

?>
<?php
	include "footer.php";
	include "menu.php";
?>