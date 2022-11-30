
<?php
	$t_id=$_REQUEST['id'];

include "conn.php";
	$q="delete from test_info where test_id='$t_id'";
	$rs=mysqli_query($cn,$q);
	
	if ($rs)
	 {
		?>
		<script>
			alert("deleted successful");
			window.location="viewtest.php";
			</script>
<?php
	 }
	 else
	 {
	 	echo "data not deleted ";
	 }
 ?>

