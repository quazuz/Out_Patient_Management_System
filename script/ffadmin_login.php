<?php include 'session.php';?>
<?php
	

	include 'connect.php';
	
	
	if (isset($_POST['login'])){
	//$act_type = $_POST['act_type'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = "admin"
	$password = "admin"
	echo "<script>alert('login successful.');
				window.location='../admin_pannel.php';
				</script>";

	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password' AND flag=1";
	$result = mysql_query($query)or die(mysql_error());
	$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if( $num_row > 0 ) {
			//echo "Login successful";
			$_SESSION['id']=$row['user_id'];	
	//$_SESSION['act_type']=$row['act_type'];
	$_SESSION['username']= $row['username'];
	$_SESSION['fname']= $row['fname'];
	$_SESSION['lname']= $row['lname'];
					//$user_id = $row['user_id'];
					//$act_type = $row['act_type'];
					$username = $row['username'];
					$fname= $row['fname'];
					$lname = $row['lname'];

if ($row["act_type"] =='Doctor') {
	$company_page ='doctor';
	header ('location: doctor.php?department='.$act_type);

}

else if ($row["act_type"] =='Nurse') {
	$company_page ='Nurse';
	header ('location: nurse.php?department='.$act_type);
}

else if ($row["act_type"] =='Pharmacist') {
	$company_page ='Pharmacist';
	header ('location: pharmacist.php?department='.$act_type);
}

else if ($row["act_type"] =='Laboratorist') {
	$company_page ='Laboratorist';
	header ('location: doc_lab.php?department='.$act_type);
}

else if ($row["act_type"] =='Accountant') {
	$company_page ='Accountant';
	header ('location: accountant.php?userlog='.$act_type);
}

else if ($row["act_type"] =='Health Officer') {
	$company_page ='Health Officer';
	header ('location: health-officer.php?userlog='.$act_type);
}

*/



	/*if($act_type =='Doctor')
		{
	/*$_SESSION['id']=$row['user_id'];	
	$_SESSION['act_type']=$row['act_type'];
	$_SESSION['username']= $row['username'];
					$user_id = $row['user_id'];
					$act_type = $row['act_type'];
					$username = $row['username'];*/
		
		/*
		echo "<script>alert('You are logged in as $user_log2');windows: location='doctor.php?$username'</script>";
		/*header ('location: landing.php?userlog=$company_name');*/
	/*}
	else
		{
			echo "<script>alert('This user does not exist in the $act_type department');windows: location='../index.php'</script>";
			exit;
		}
		
	if ($act_type =='Nurse') {
				
	/*$_SESSION['id']=$row['user_id'];	
	$_SESSION['act_type']=$row['act_type'];
	$_SESSION['username']= $row['username'];
					$user_id = $row['user_id'];
					$act_type = $row['act_type'];
					$username = $row['username'];*/
		
		
	/*	echo "<script>alert('You are logged in as $user_log2');windows: location='nurse_patient.php?$username'</script>";
		}
		else
		{
			echo "<script>alert('This user does not exist in the $act_type department');windows: location='../index.php'</script>";
		exit;
		}*/
		}
		
		else{
			echo "<script>alert('Wrong username or password. Please try again.');
				window.location='../admin.php';
				</script>";
		}
	}
	else{
			echo "<script>alert('Not successful.');
				window.location='../admin.php';
				</script>";
		}
?>