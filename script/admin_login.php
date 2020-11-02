<?php
 include_once 'admin_session.php';?>
<?php
	

	include_once 'connect.php';
	
	
	if (isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysql_query($query)or die(mysql_error());
	$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if( $num_row > 0 ) {
			//echo "Login successful";
		
	$_SESSION['id']=$row['admin_id'];
	$_SESSION['username']= $row['username'];
					$userid = $row['admin_id'];
					$username = $row['username'];
		echo "<script>alert('You are logged in as $user_log');windows: location='admin_pannel.php?userlog=$username'</script>";
		/*header ('location: landing.php?userlog=$company_name');*/
		}
		
		else{
			echo "<script>alert('Wrong username or password. Please try again.');
				window.location='admin.php';
				</script>";
		}
	}
?>