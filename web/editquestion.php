<?php
$q_id=$_REQUEST['id'];
include "conn.php";

if(isset($_POST['submit']))
{
	$qu=$_POST['questions'];	
	$o1=$_POST['option1'];	
	$o2=$_POST['option2'];
	$o3=$_POST['option3'];
	$o4=$_POST['option4'];
	
	$q="Update question set questions='$qu',option1='$o1',option2='$o2',option3='$o3',option4='$o4' where qid ='$q_id'";
	
	$rs=mysqli_query($cn,$q);
	if($rs)
	{
		?>
		<script>
			alert("Update Successfully...");
			window.location="question.php";
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

$q1="select * from question where qid='$q_id'";
$r=mysqli_query($cn,$q1);
while($row=mysqli_fetch_array($r))
{
	$ques=$row['questions'];	
	$opt1=$row['option1'];	
	$opt2=$row['option2'];
	$opt3=$row['option3'];
	$opt4=$row['option4'];
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
		<h3>Edit Questions</h3>
	<br><form action="#" method="POST"> 
	<table>
<tr>
			<td>Question:</td>
			<td>	
				<input type="text" value="<?php echo $ques;?>" name="questions"><br><br>
			</td>
		</tr>
		<tr>
			<td>A:
			</td>
			<td><input type="text" value="<?php echo $opt1;?>" name="option1"><br><br>
			</td>
		</tr>
         <tr>
			<td>B:
			</td>
			<td><input type="text" value="<?php echo $opt2;?>" name="option2"><br><br>
			</td>
		</tr>
		<tr>
			<td>C:
			</td>
			<td><input type="text" value="<?php echo $opt3;?>" name="option3"><br><br>
			</td>
		</tr>
		<tr>
			<td>D:
			</td>
			<td><input type="text" value="<?php echo $opt4;?>" name="option4"><br><br>
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