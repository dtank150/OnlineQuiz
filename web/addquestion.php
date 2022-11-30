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
		<h3>Ready For Exam...!</h3>
	<br><form action="#" method="POST">
	
	<table>
		<tr>
			<td>Select Test</td>
			<td>	<select name="test">
					<option value="Test">Test</option>
					<option value="Ramayan">Ramayan</option>
					<option value="Mahabharat">Mahabharat</option>
					<option value="Geeta">Geeta</option>
					<option value="Space">Space</option>
					<option value="Robotics">Robotics</option><br><br>
			</td>
		</tr>		
		<tr>
			<td>Question:</td>
			<td>	
				<input type="text" name="que"><br><br>
			</td>
		</tr>
		<tr>
			<td>A:
			</td>
			<td><input type="text" name="op1"><br><br>
			</td>
		</tr>
         <tr>
			<td>B:
			</td>
			<td><input type="text" name="op2"><br><br>
			</td>
		</tr>
		<tr>
			<td>C:
			</td>
			<td><input type="text" name="op3"><br><br>
			</td>
		</tr>
		<tr>
			<td>D:
			</td>
			<td><input type="text" name="op4"><br><br>
			</td>
		</tr>
		<tr>
			<td>Chhose Answer</td>
			<td><select name="answer">
					<option value="Choose Answer">Chhose Answer</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option><br><br>
			</td>		
		</tr>		
		<tr>

			<td align="center" colspan=2>
				<input type="submit" name="submit" value="Add">
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
if (isset($_POST['submit']))
{

	$sv = $_POST['test'];    
	$q=$_POST['que'];
	$o1=$_POST['op1'];
	$o2=$_POST['op2'];
	$o3=$_POST['op3'];
	$o4=$_POST['op4'];
	$sc=$_POST['answer'];

include "conn.php";
	$q="insert into question values('','$sv','$q','$o1','$o2','$o3','$o4','$sc')";
	$rs=mysqli_query($cn,$q);


	if ($rs)
	 {
		 
		 ?>
		 <script>
		alert("Data Inserted Successfully");
		window.location="question.php";
		</script>
		<?php
	 }
	 else
	 {
		 ?>
	 	<script>
		alert("Data Not Inserted Successfully");
		window.location="question.php";
		</script>
		<?php
	 }
}
	
?>

<?php
	include "footer.php";
	include "menu.php";
?>
