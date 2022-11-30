<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome to Online Quiz</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Educator Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
 <link href='//fonts.googleapis.com/css?family=Poiret+One|Lily+Script+One|Raleway:400,300,500,600,200,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<!--start-home-->
		<div class="head" id="home">
		    <div class="header-top">
			    <div class="container">  
					   <p class="col-md-6 location"><i class="glyphicon glyphicon-map-marker"></i>AVPTI college,Rajkot</p>
					 <p class="col-md-6 phone"><i class="glyphicon glyphicon-earphone"></i>Phone:<span class="seprat">+123-456-7890</p>
				  <div class="clearfix"> </div>
				 </div>
			</div>
			  <div class="container">  
			     <div class="main">	
				   <div class="wht-head">	
					 <div class="logo">
						<a href="index.html" ><h1><i class="glyphicon glyphicon-education"></i>Online Quiz</h1></a>
					 </div>
					<!--top-nav-->
					 <span class="menu"> </span>
					  <div class="top-menu">
					  <nav>
						<ul class="cl-effect-16">

							<li><a class="active" href="index.php">Home</a></li>
							<li><a href="category.php">Exams</a></li>
							<li><a href="result.php">Result</a></li>
							<li><a href="feedback.php">Feedback</a></li>
							<?php 
							if(!isset($_SESSION['user']))
							{
								?>
							<li><a href="signup.php">Registration</a></li>
							<li><a href="login.php">Login</a></li>
							<?php
							}
							else
							{
								?>
							<li><a href="logout.php">Logout</a></li>
								<?php
							}
							?>
							<div class="clearfix"></div>
						</ul>
					</nav>		
					</div>
					<!-- script-for-menu -->
					<script>
					$( "span.menu" ).click(function() {
					  $( ".top-menu" ).slideToggle( "slow", function() {
						// Animation complete.
					  });
					});
				</script>
				<!-- script-for-menu -->
				<div class="clearfix"></div>
			</div>
			 <div class="banner">
					<div class="banner-slider">
						<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
						<li>
						  <div class="banner-info">
						     <h3>Teach Truth...</h3>
						    <p>Try Your Best</p>
						  </div>
						</li>
						<li>
						  <div class="banner-info">
						   <h3>Study Anywhere </h3>
						  <p>No Matter to prove your knowledge at specific location</p>		 
						 </div>
						<li>
					     <div class="banner-info">
						    <h3>Develop Confidence...</h3>
						    <p>Develop your confidence facing different test</p>
						  </div>
						</li>
					</ul>
			     </div>
			   </div>
			 </div>
			 <!--banner-slide-->
					<script src="js/responsiveslides.min.js"></script>
				<script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager:true,
				        nav:false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>

			 <!--//banner-slide-->
			  <div class="clearfix"></div>
			 <!--end-banner-->
			 	<!--start-services-->
