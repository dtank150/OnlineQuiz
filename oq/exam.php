<?php
include "conn.php"
?>
<html>
<head>
</head>
<body>
<center>
		<h3>Exam Detais</h3>
	<br><form action="account.php" method="POST">
	<input type="text" name="que" value="Question"><br>
	<input type="radio" name="op1"value="Option 1"><br>
	<input type="radio" name="op2"value="Option 2"><br>
	<input type="radio" name="op3"value="Option 3"><br>
	<input type="radio" name="op4"value="Option 4"><br>
	<input type="submit" name="sub"value="Submit">
	</form>
	</center>
	</body>
	</html>