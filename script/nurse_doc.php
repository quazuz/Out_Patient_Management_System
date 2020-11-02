

<?php

	include ('connect.php');
/* $sq="CREATE TABLE nurse_doc (ndid INT(11) AUTO_INCREMENT PRIMARY KEY, patient_name VARCHAR(20), patient_type VARCHAR(20), nurse_name VARCHAR(20), department VARCHAR(30), date_posted timestamp, description VARCHAR(100), PID INT(11), Foreign key (PID) references patients(PID))"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Nurse To Doctor created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}
*/


$submit="";
if (isset($_POST['submit'])){
$patient_name = $_POST['patient_name'];

$patient_type = $_POST['patient_type'];

$nurse_name = $_POST['nurse_name'];

$department = $_POST['department'];

$date_posted = $_POST['date_posted'];

$description = $_POST['description'];

  // $submit=$_REQUEST['submit']; 


$query=mysql_query("INSERT INTO `nurse_doc`(`patient_name`, `patient_type`, `nurse_name`, `department`, `date_posted`, `description`) VALUES ('$patient_name','$patient_type','$nurse_name','$department','$date_posted','$description')", $con);
if($query)
		   {
			  echo "<script>alert('Patient Sent To Doctor successfully....');
				window.location='../script/nurse.php';
				</script>";
		   };

} 

?>





