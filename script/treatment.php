

<?php

	include ('connect.php');
/* $sq="CREATE TABLE treatment (tid INT(11) AUTO_INCREMENT PRIMARY KEY, patient_name VARCHAR(20), date_posted timestamp, PID INT(11), Foreign key (PID) references patients(PID))"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Treatment created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}
*/


$submit="";
if (isset($_POST['submit'])){
$patient_name = $_POST['patient_name'];

$date_posted = $_POST['date_posted'];





  // $submit=$_REQUEST['submit']; 


$query=mysql_query("INSERT INTO `treatment`(`patient_name`, `date_posted`) VALUES ('$patient_name','$date_posted')", $con);
if($query)
		   {
			  echo "<script>alert('Patient sent to nurse successfully....');
				window.location='../script/health-officer.php';
				</script>";
		   };

} 

?>





