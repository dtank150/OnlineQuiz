<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Project Worlds || TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>
<?php
include "conn.php";
?>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Test Your Skill</span></div>
<div class="col-md-4 col-md-offset-2">
 <?php
 include "conn.php";
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include "conn.php";
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>
</div>
</div></div>
<div class="bg">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>Netcamp</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	     <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp;Category<span class="sr-only">(current)</span></a></li>
		<li <?php if(@$_GET['q']==2) echo'class="active"'; ?> ><a href="account.php?q=2"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp;Subcategory<span class="sr-only">(current)</span></a></li>
	
        <li <?php if(@$_GET['q']==3) echo'class="active"'; ?> ><a href="account.php?q=3"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Apply Test<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==4) echo'class="active"'; ?>><a href="account.php?q=4"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Result</a></li>
		<li <?php if(@$_GET['q']==5) echo'class="active"'; ?>><a href="account.php?q=5"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Report</a></li>
		<li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyp`	hicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
		</ul>
            <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter tag ">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
      </form>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<!--category start-->

<?php if(@$_GET['q']==1) {

$rs = mysqli_query($cn,"SELECT * FROM category_info");
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr style="color:red"><td><b>cid</b></td><td><b>category_name</b></td><td><b>category_image</b></td></tr>';
while($row = mysqli_fetch_array($rs)) {
	?>
	<tr>
		<td scope="row"><?php echo $row['cid'];?></td>
		<td scope="row"><?php echo $row['category_name'];?></td>
	
		<td scope="row">
			<img src="upload/<?php echo $row['category_image'];?>" height=100 width=100/>
		</td>
	</tr>
<?php
}

$c=0;
echo '</table></div></div>';

}?>
<!--category end-->
<!--subcategory start-->
<?php
if(@$_GET['q']==2) {

$rs = mysqli_query($cn,"SELECT * FROM subcategory_info");
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr style="color:red"><td><b>s_cid</b></td><td><b>subcategory_name</b></td><td><b>subcategory_image</b></td></tr>';
while($row = mysqli_fetch_array($rs)) {
	?>
	<tr>
		<td scope="row"><?php echo $row['s_cid'];?></td>
		<td scope="row"><?php echo $row['subcategory_name'];?></td>
	
		<td scope="row">
			<img src="upload/<?php echo $row['subcategory_image'];?>" height=100 width=100/>
		</td>
	</tr>
<?php
}

$c=0;
echo '</table></div></div>';

}
?>
<!--subcategory end-->


<!--quiz start-->
<?php
if(@$_GET['q']==3 && @$_GET['step']== 2) {
$exam_id=@$_GET['exam_id'];
$category_id=@$_GET['category_id'];
$title=@$_GET['title'];
$q=mysqli_query($cn,"SELECT * FROM questions");
echo '<div class="panel" style="margin:5%">';
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];
echo '<b>Question &nbsp;'.$sn.'&nbsp;::<br />'.$qns.'</b><br /><br />';
echo'<input type="radio" name="ans" value="'.$optionid.'">'.$option.'<br /><br />';
}



echo'<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
//header("location:account.php?q=4&step=2&eid=$id&n=$total");
}
//result display
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
$eid=@$_GET['eid'];
$q=mysqli_query($cn,"SELECT * FROM exam_detalis");

while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
      <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
	  <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
$q=mysqli_query($con,"SELECT * FROM report_info");
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
echo '</table></div>';

}
?>
<!--quiz end-->
<!--Result start-->
<?php
if(@$_GET['q']==4) 
{
$q=mysqli_query($cn,"SELECT * FROM result_info");
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>res_id</b></td><td><b>student_name</b></td><td><b>category_name</b></td><td><b>percentage</b></td><td><b>rank<b></td><td><b>declaration_date</b></td><td><b>total</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
	?>
	<tr>
		<td><?php echo $row['res_id'];?></td>
		<td><?php echo $row['student_name'];?></td>
		<td><?php echo $row['category_name'];?></td>
		<td><?php echo $row['percentage'];?></td>
		<td><?php echo $row['rank'];?></td>
		<td><?php echo $row['declaration_date'];?></td>
		<td><?php echo $row['total'];?></td>

	<?php
}
$c=0;
echo '</table></div></div>';

}
?>
<!--Result end-->

<!--Report start-->
<?php

if(@$_GET['q']== 5) 
{
$q=mysqli_query($cn,"SELECT * FROM report_info" );
echo  '<div class="panel title"><div class="table-responsive">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>rep_id</b></td><td><b>student_name</b></td><td><b>category_name</b></td><td><b>rank</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
?>
	<tr>
		<td><?php echo $row['rep_id'];?></td>
		<td><?php echo $row['student_name'];?></td>
		<td><?php echo $row['category_name'];?></td>
		<td><?php echo $row['rank'];?></td>
			</tr>
	<?php
}
$c=0;
echo '</table></div></div>';

}

?>
<!--Report end-->




</div></div></div></div>
<!--Footer start-->
<div class="row footer">
<div class="col-md-4 box">
<a href="http://www.projectworlds.in/online-examination" target="_blank">About us</a>
</div>
<div class="col-md-4 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-4 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
	</div>
	
	<div class="row">
	<div class="col-md-6" align="center">
		
		<h5 style="color:#202020; font-family:'typo' ;font-size:26px" class="title1">Name:</h5>
		<h4 style="font-familly:'timesnewroman';font-size:20px ">Dipali Tank</h4>
		<h4 style="font-familly:'timesnewroman';font-size:20px ">Tulsi Bundela</h4>
		<h4 style="font-familly:'timesnewroman';font-size:20px ">Mitali Maradiya</h4>
		<h4 style="font-familly:'timesnewroman';font-size:20px ">Nikita Chudasama</h4>
	</div>		
	<div class="row"align="center">
		<h5 style="color:#202020; font-family:'typo' ;font-size:26px" class="title1">Enrollment No:</h5>
		<h4 style="font-familly:'timesnewroman';font-size:20px ">176020307107</h4>
		<h4 style="font-familly:'timesnewroman';font-size:20px ">176020307512</h4>
		<h4 style="font-familly:'timesnewroman';font-size:20px ">176020307061</h4>
		<h4 style="font-familly:'timesnewroman';font-size:20px ">176020307024</h4>
		</div>
		 
</div>	
	
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->
</body>
</html>