<?php
	 include('connect.php');

	 if(isset($_POST['submit'])){
	 	if( $_POST['password'] != $_POST['repassword'] ) 
		{
        echo "<script>alert('Your passwords do not match, please provide matching passwords');
				window.location='register.php';
				</script>";
    	}
    	else{

		$fname = $_POST['firstname'];

		$lname = $_POST['lastname'];

		$mail = $_POST['email'];

		$address = $_POST['address'];

		$act_type = $_POST['act_type'];

		$gender = $_POST['gender'];

		$marital_status = $_POST['marital_status'];

		$username = $_POST['username'];

		$pass = $_POST['password'];

		$repass = $_POST['repassword'];

		$dob = $_POST['dob'];

		
		// check if e-mail address syntax is valid or not
		$mail = filter_var($mail, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)

		if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
		 {
		    echo "<script>alert('Invalid e-mail!!!');
						window.location='register.php';
						</script>";
		 }
		else
		 {
			$result = mysql_query("SELECT * FROM user WHERE email='$mail'");
		        $data = mysql_num_rows($result);
	        
		if(($data)==0)
	      {
		//Insert query 
	   $query = mysql_query("INSERT INTO user (fname, lname, email, address, act_type, gender, marital_status, username, password, re_password, dob, flag)
			 VALUES ('$fname', '$lname', '$mail', '$address', '$act_type', '$gender', '$marital_status', '$username', '$pass', '$repass', '$dob', 1)") or die(mysql_error());
		if($query)
		   {
			  echo "<script>alert('You have successfully registered....');
				window.location='../index.php';
				</script>";
		   }
		else
		   {
			 echo "<script>alert('Your form could not be submitted, please try again!!!');
				window.location='register.php';
				</script>";  
		   }
	} 
	else
	{
		echo "<script>alert('This user is already registered, Please try another username...');
				window.location='register.php';
				</script>";  
	}  
 }
 }
}
?>