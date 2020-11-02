<?php include ('connect.php'); ?>
<?php
	
	
	if(isset($_POST['submit']))
	{
	

   	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$act_type=$_POST['act_type'];
	$gender=$_POST['gender'];
	$MaritalStatus=$_POST['marital_status'];
	$username=$_POST['username'];
	$password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $DateOfBirth=$_POST['dob']
	/* Check if user already exists */
	$chk_username="SELECT * FROM user WHERE username='$username'";
		$rce=mysql_query($chk_username) or die(mysql_error());
		$row=mysql_num_rows($rce);
		if($row==0)
		{
			

		
	$save =  mysql_query("INSERT INTO user (fname, lname, email, address, act_type, gender, marital_status, username, password, re_password, dob)

	VALUES('$firstname','$lastname','$email','$address','$act_type','$gender','$MaritalStatus','$username','$password','$repassword','$DateOfBirth')") or die(mysql_error());

	

 	 if($save){


		//echo "record saved";
		//header("location: ../pages/thank_you_register.html");
		echo "<script>alert('You have successfully registered...');
				window.location='../index.html';
				</script>";
	}
		else{
			//echo "Error saving record";
			echo "<script>alert('User already exists');
				window.location='register.php';
				</script>";
		}
	}
	echo "<script>alert('User already exists');
				window.location='register.php';
				</script>";
}
	
//}
	echo "<script>alert('Query could not be completed');
				window.location='register.php';
				</script>";

	
?>


