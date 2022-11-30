<!DOCTYPE html> 
<html>
 
	<style> 
    /*set border to the form*/ 
      
    form { 
        border: 2px solid #f1f1f1;
		width: 40%;
		height: 100%;
		align: center;
		margin: 10%;
		padding: 2%;
    } 
    /*assign full width inputs*/ 
      
    input[type=text],
	input[type=password]	{ 
        width: 100%; 
        padding: 12px 20px; 
        margin: 8px 0; 
        display: inline-block; 
        border: 1px solid #ccc; 
        box-sizing: border-box; 
    } 
 
    /*set a style for the buttons*/ 
      
    button { 
        background-color: #4CAF50; 
        color: white; 
        padding: 14px 20px; 
        margin: 8px 0; 
        border: none; 
        cursor: pointer; 
        width: 100%; 
		 } 
    /* set a hover effect for the button*/ 
      
    button:hover { 
        opacity: 0.8; 
    } 
     
    /*centre the display image inside the container*/ 
      
    .imgcontainer { 
        text-align: center; 
        margin: 24px 0 12px 0; 
    }
	
    /*set image properties*/ 
      
    img.login { 
        width: 10%; 
        border-radius: 50%; 
    } 
    /*set padding to the container*/ 
      
    .container { 
        padding: 16px; 
    } 
    /*set the forgot password text*/ 
      
    span.psw {  float: right; 
        padding-top: 16px; 
    } 
    /*set styles for span and cancel button on small screens*/ 
      
    @media screen and (max-width: 300px) { 
        span.psw { 
            display: block; 
            float: none; 
        } 
     
    } 
</style> 
<body> 
  
		
    <!--Step 1 : Adding HTML-->
	<div align="center">
    <form action="#" align="center"> 
        <div class="imgcontainer"> 
            <img src= "C:\xampp\htdocs\project\web2\images\login.jpg" 
                 alt="Login" class="Login"> 
        </div> 
  
        <div class="container" align="center"> 
             
			<input type="text" placeholder="Enter Username" name="uname" required><br><br> 
  
             
            <input type="password" placeholder="Enter Password" name="psw" required><br><br> 
  
            <button type="submit">Login</button> 
     
        </div> 
		<div align="right">	
       				<h5>New User? <a href="register.php">Registration</a></h5>
		</div>
	</form> 
  </div>
</body> 
  
</html> 