<?php
$tid=$_REQUEST['id'];
include "conn.php";

if(isset($_POST['submit']))
{
	$t_type=$_POST['test_type'];	
	$m=$_POST['marks'];	
	$qu=$_POST['questions'];
	
	$q="Update test_info set test_type='$t_type',marks='$m',questions='$qu' where test_id='$tid'";
	
	$rs=mysqli_query($cn,$q);
	if($rs)
	{
		?>
		<script>
			alert("Update Successfully...");
			window.location="test.php";
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

$q1="select * from test_info where test_id='$tid'";
$r=mysqli_query($cn,$q1);
while($row=mysqli_fetch_array($r))
{
	$te_type=$row['test_type'];	
	$ma=$row['marks'];	
	$que=$row['questions'];
	
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
		<h3>Edit Test</h3>
	<br><form action="#" method="POST"> 
	<table>
		<tr>
			<td>Test_type:</td>
			<td>	
				<input type="text" value="<?php echo $te_type;?>" name="test_type"><br><br>
			</td>
		</tr>
		<tr>
			<td>Marks:
			</td>
			<td><input type="text" value="<?php echo $ma;?>" name="marks"><br><br>
			</td>
		</tr>
		<tr>
			<td>Questions:
			</td>
			<td><input type="text" value="<?php echo $que;?>"  name="questions"><br><br>
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