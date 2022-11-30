<?php
$id=$_REQUEST['id'];
include "connection.php";
$q="delete from exam_details where exam_id='$id'";
mysqli_query($con,$q);
?>
<script>
	window.location="viewexam.php";
</script>