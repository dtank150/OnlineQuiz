<?php
	session_start();
	unset($_SESSION['admin']);
?>
<script>
alert("Logout Successfully Completed");
window.location="login.php";
</script>