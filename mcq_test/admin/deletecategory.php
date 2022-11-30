<?php
$id=$_REQUEST['id'];
include "connection.php";
$q="select * from category where cat_id='$id'";
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
		$nm=$r['category_name'];
		$image=$r['category_image'];
	}
	unlink("upload/".$image);
$q="delete from category where cat_id='$id'";

mysqli_query($con,$q);


?>

<script>
	window.location="viewcategory.php";
</script>