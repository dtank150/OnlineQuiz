
<?php
	$c_id=$_REQUEST['id'];
	
include "conn.php";
	$q="delete from category_info where cid='$c_id'";
	$rs=mysqli_query($cn,$q);
	
	if ($rs)
	 {
		?>
		<script>
			alert("deleted successful");
			window.location="viewcategory.php";
			</script>
<?php
	 }
	 else
	 {
	 	echo "data not deleted ";
	 }
 ?>

