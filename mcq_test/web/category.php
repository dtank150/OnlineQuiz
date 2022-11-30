<?php 
	include "header.php";
?>

		<div class="gallery" id="gallery" style="background-color:white">
			<h3 class="tittle" style="color:black">Select Category</h3>
			<div class="gallery-bottom">
				 <?php 
				 include "connection.php";
				 $q="select * from category";
				 $c=mysqli_query($con,$q);
				 while($r=mysqli_fetch_array($c))
				 {
					 ?>
				 <div class="view view-fifth">
                    <a href="exam.php?id=<?php echo $r['category_name'];?>" title="Image Title"><img src="../admin/upload/<?php echo $r['category_image'];?>" style="width:320px; height:200px " alt="" class="img-responsive">
						<div class="mask">
						<br><br>
							<h2 style="margin-top:30px" align="center"><?php echo $r['category_name'];?></h2>
						</div>
					</a>
                </div>
					<?php
				 }
				 ?>
		
                <div class="clearfix"> </div>
            </div>
		</div>

<?php 
	include "footer.php";
?>
