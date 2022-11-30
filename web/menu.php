</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
				 
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li id="menu-home" ><a href="category.php"><i class="fa fa-tachometer"></i><span>Category</span></a></li>
		        <li id="menu-home" ><a href="subcategory.php"><i class="fa fa-tachometer"></i><span>Subcategory</span></a></li>
		        <li id="menu-home" ><a href="test.php"><i class="fa fa-tachometer"></i><span>Test</span></a></li>
				 <li id="menu-home" ><a href="question.php"><i class="fa fa-tachometer"></i><span>Question</span></a></li>
		       
		        <li id="menu-home" ><a href="result.php"><i class="fa fa-tachometer"></i><span>Result</span></a></li>
		        <li id="menu-home" ><a href="report.php"><i class="fa fa-tachometer"></i><span>Report</span></a></li>
		        <li id="menu-home" ><a href="feedback.php"><i class="fa fa-tachometer"></i><span>feedback</span></a></li>
			 </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>