

<?php

	include ('connect.php');
 /*$sq="CREATE TABLE doc_pharm (dpid INT(11) AUTO_INCREMENT PRIMARY KEY, patient_name VARCHAR(20), doctor_name VARCHAR(20), department VARCHAR(20), date_posted timestamp, history VARCHAR(100), med VARCHAR(100), PID INT(11), Foreign key (PID) references patients(PID))"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Doctor To Pharmacy created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}
*/


$submit="";
if (isset($_POST['submit'])){
$patient_name = $_POST['patient_name'];

$doctor_name = $_POST['doctor_name'];

$department = $_POST['department'];

$date_posted = $_POST['date_posted'];

$history = $_POST['history'];

$med = $_POST['med'];



  // $submit=$_REQUEST['submit']; 


$query=mysql_query("INSERT INTO `doc_pharm`(`patient_name`, `doctor_name`, `department`, `date_posted`, `history`, `med`) VALUES ('$patient_name','$doctor_name','$department','$date_posted','$history','$med')", $con);
if($query)
		   {
			  echo "<script>alert('Patient Sent To Pharmacist successfully....');
				window.location='../script/doctor.php';
				</script>";
		   };

} 

?>





