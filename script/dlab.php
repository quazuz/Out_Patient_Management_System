<?php include 'session.php';?>
<?php

	include ('connect.php');
/* $sq="CREATE TABLE doc_lab (dlid INT(11) AUTO_INCREMENT PRIMARY KEY, patient_name VARCHAR(20), doctor_name VARCHAR(20), test_name VARCHAR(100), date_posted timestamp)"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Lab Prescription created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}
*/
if (isset($_POST['submit'])){

	$user = $_SESSION['id'];
$patient_name = $_POST['patient_name'];

$test_name = $_POST['test_name'];



  // $submit=$_REQUEST['submit']; 


$query=mysql_query("INSERT INTO doc_lab(patient_name, doctor_name, test_name, date_posted, flag, user_id) VALUES ('$patient_name','$user_log3','$test_name',NOW(), 1,'$user')") or die(mysql_errno());
if($query)
		   {
			  echo "<script>alert('Prescription submitted successfully....');
				window.location='../script/doctor_lab_pannel.php';
				</script>";
		   };

} 
		else
		{
			  echo "<script>alert('Not successfull....');
						window.location='../script/doctor_lab_pannel.php';
						</script>";
		}
?>





