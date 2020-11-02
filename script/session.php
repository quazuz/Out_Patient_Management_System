<?php
     include ('connect.php');
	session_start();
	if(!isset($_SESSION['id'])) {
		echo "<script>window: location='../index.php'</script>";
	}
	$user_log = $_SESSION['username'];
	$user_log2 = $_SESSION['act_type'];
	$user_log3 = $_SESSION['fname'].'&nbsp'.$_SESSION['lname'];
	
?>