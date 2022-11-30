
<?php
	$s_id=$_REQUEST['id'];

include "conn.php";
	$q="delete from subcategory_info where s_cid='$s_id'";
	$rs=mysqli_query($cn,$q);
	
	if ($rs)
	 {
		?>
		<script>
			alert("deleted successful");
			window.location="viewsubcategory.php";
			</script>
<?php
	 }
	 else
	 {
	 	echo "data not deleted ";
	 }
 ?>

