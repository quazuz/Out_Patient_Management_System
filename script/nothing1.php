

<?php

	include ('connect.php');
 /*$sq="CREATE TABLE nurse_doc (ndid INT(11) AUTO_INCREMENT PRIMARY KEY, patient_name VARCHAR(20), patient_type VARCHAR(20), nurse_name VARCHAR(20), department VARCHAR(30), date )"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Lab Prescription created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}*/

$submit="";
if (isset($_POST['submit'])){
$patient_name = $_POST['patient_name'];

$doctor_name = $_POST['doctor_name'];

$test_name = $_POST['test_name'];



  // $submit=$_REQUEST['submit']; 


$query=mysql_query("INSERT INTO `doc_lab`(`patient_name`, `doctor_name`, `test_name`) VALUES ('$patient_name','$doctor_name','$test_name')", $con);
if($query)
		   {
			  echo "<script>alert('Patient Sent To Doctor successfully....');
				window.location='../script/nurse.php';
				</script>";
		   };

} 
?>





