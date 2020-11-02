<?php
	session_start();
	if(!isset($_SESSION['id'])) {
		echo "<script>window: location='admin.php'</script>";
	}
	$user_log = $_SESSION['username'];
	
?>