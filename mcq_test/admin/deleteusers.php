<?php
$id=$_REQUEST['id'];
include "connection.php";
$q="delete from users where customer_id='$id'";
mysqli_query($con,$q);
?>
<script>
	window.location="viewusers.php";
</script>