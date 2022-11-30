<?php 
include "header.php";
if(!isset($_SESSION['user']))
{
	?>
	<script>
	alert("You have to Login First");
	window.location="login.php";
	</script>
		
	<?php
}
	if(isset($_POST['btnok']))
	{
		$id=$_REQUEST['id'];
		$pm=$_REQUEST['pm'];
		$nm=$_REQUEST['nm'];
		include "connection.php";
						
		$q="select * from question_master where exam_id='$id'";
						$c=mysqli_query($con,$q);
						$result=0;
						while($r=mysqli_fetch_array($c))
						{
							$iddd=$r['ques_id'];
							$ans=$_POST[$iddd];
							if($r['answer']==$ans)
							{
								$result=$result+$pm;
							}
							else
							{
								$result=$result-$nm;
							}
						}
						
						$un=$_SESSION['user'];
						$dt=date("d-m-Y");
						$qq="Insert into result_info values('','$un','$id','$result','$dt')";
						$c=mysqli_query($con,$qq);
						if($c)
						{
							?>
								<script>
									alert("Exam Completed.. You Got result As..<?php echo $result;?>  Marks");
									window.location="index.php";
								</script>
						<?php
						
						}
	}
?>

					<div class="services" id="service">
					 <h3 class="tittle two" style="margin-top:-30px;">Exam Details</h3>
						<div class="serve-grids">
						<center>
						<fieldset style="border:1px">
						<form action="#" method="post">
						<table cellpadding="10px">
						
					<?php
						$id=$_REQUEST['id'];
						include "connection.php";
						$q="select * from question_master where exam_id='$id'";
						$c=mysqli_query($con,$q);
						$count=1;
						while($r=mysqli_fetch_array($c))
						{
							?>
							<tr>
								<td><br><br><b style="font-size:20px; color:black;"><?php echo $count.") ".$r['question_title'];?></b><br><br></td>
							</tr>
							<tr>
								<td>
								<input type="radio" name="<?php echo $r['ques_id'];?>" value="A"/>
								<b style="font-size:15px; color:black;">A. <?php echo $r['option1'];?></b><br><br></td>
								<td>
								<input type="radio" name="<?php echo $r['ques_id'];?>" value="B"/>
								<b style="font-size:15px; color:black;">B. <?php echo $r['option2'];?></b><br><br></td>
							</tr>
							<tr>
								<td>
								<input type="radio" name="<?php echo $r['ques_id'];?>" value="C"/>
								<b style="font-size:15px; color:black;">C. <?php echo $r['option3'];?></b></td>
								<td>
								<input type="radio" name="<?php echo $r['ques_id'];?>" value="D"/>
								<b style="font-size:15px; color:black;">D. <?php echo $r['option4'];?></b></td>
								
							</tr>
							
							<?php 
							$count++;
						}
						?>
						
						</table>
						<br>
						<input type="submit" name="btnok" value="Finish Exam"/>
 						</form>
						</fieldset>
						
						
						<div class="clearfix"></div>

					</div>
				</div>
			<!--//end-services-->
	<!--start-teachers-->
				<!--contact-->
		<?php 
	include "footer.php";
?>
