<?php include 'session.php';?>
<?php

	include ('connect.php');
/* $sq="CREATE TABLE lab_result (dlid INT(11) AUTO_INCREMENT PRIMARY KEY, patient_name VARCHAR(20), test_name VARCHAR(100), laboratorist_name VARCHAR(20), date_posted timestamp, test_result VARCHAR(100))"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Lab Result created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}
*/


$submit="";
if (isset($_POST['submit'])){
$patient_name = $_POST['patient_name'];

$test_name = $_POST['test_name'];

$test_result = $_POST['test_result'];

$d_name = $_POST['d_name'];

$doctor_id = $_POST['doctor_id'];

  // $submit=$_REQUEST['submit']; 


$query=mysql_query("INSERT INTO `lab_result`(`doctor_name`,`patient_name`, `test_name`, `laboratorist_name`, `date_posted`, `test_result`, `flag`, `doctor_id`) VALUES ('$d_name','$patient_name','$test_name','$user_log3',NOW(),'$test_result', 1, '$doctor_id')", $con)or die(mysql_error());
if($query)
		   {
			  echo "<script>alert('Test Result submitted successfully....');
				window.location='../script/doc_lab.php?department=$user_log2';
				</script>";
		   };

} 

?>





