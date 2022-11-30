<?php
$id=$_REQUEST['id'];
include "connection.php";
$q="delete from question_master where ques_id='$id'";
mysqli_query($con,$q);
?>
<script>
	window.location="viewquestion.php";
</script>