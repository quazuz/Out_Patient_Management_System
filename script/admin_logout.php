<?php
	session_start();
?>
<?php	
	session_destroy();
	echo "<script>alert('You are now logged out.');
				window.location='admin.php';
				</script>";
	
?>