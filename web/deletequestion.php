
<?php
	$q_id=$_REQUEST['id'];
	
include "conn.php";
	$q="delete from question where qid='$q_id'";
	$rs=mysqli_query($cn,$q);
	
	if ($rs)
	 {
		?>
		<script>
			alert("deleted successful");
			window.location="question.php";
			</script>
<?php
	 }
	 else
	 {
		?>
		<script>
			alert("deleted not successful");
			window.location="question.php";
			</script>
	<?php
	 }
 ?>

