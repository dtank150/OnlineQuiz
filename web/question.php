<?php
	include "header.php";
?>
	<div class="inner-block">
		<div class="blank">
			<h2></h2>
			<div class="blankpage-main" align="Right">
		
<a href="addquestion.php">Add Questions</a>




<table border=2px>
	<tr>
		<th>Qid</th>
		<th>Question_Title</th>
		<th>Questions</th>
		<th>Option 1</th>
		<th>Option 2</th>
		<th>Option 3</th>
		<th>Option 4</th>
		<th>Answer</th>
		<th>Action</th>
	</tr>
<?php

include "conn.php";	
	$q="Select*from question";
	$r=mysqli_query($cn,$q);

while($row=mysqli_fetch_array($r))
{
	?>
	<tr>
		<td scope="row"><?php echo $row['qid'];?></td>
		<td scope="row"><?php echo $row['question_title'];?></td>
		<td scope="row"><?php echo $row['questions'];?></td>
		<td scope="row"><?php echo $row['option1'];?></td>
		<td scope="row"><?php echo $row['option2'];?></td>
		<td scope="row"><?php echo $row['option3'];?></td>
		<td scope="row"><?php echo $row['option4'];?></td>
		<td scope="row"><?php echo $row['answer'];?></td>
	
		
		<td>
			<a href="editquestion.php?id=<?php echo $row['qid'];?>">Edit</a>
			<a href="deletequestion.php?id=<?php echo $row['qid'];?>">Delete</a>
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