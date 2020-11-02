

<?php

	include ('connect.php');
/* $sq="CREATE TABLE account (acctid INT(11) AUTO_INCREMENT PRIMARY KEY, patient_name VARCHAR(20), drug_name VARCHAR(100), price INT(11), status VARCHAR(10), date_posted timestamp, description VARCHAR(100), PID INT(11), Foreign key (PID) references patients(PID))"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Accountant created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}
*/


$submit="";
if (isset($_POST['submit'])){
$patient_name = $_POST['patient_name'];

$drug_name = $_POST['drug_name'];

$price = $_POST['price'];

$status = $_POST['status'];

$date_posted = $_POST['date_posted'];

$description = $_POST['description'];



  // $submit=$_REQUEST['submit']; 


$query=mysql_query("INSERT INTO `account` (`patient_name`, `drug_name`, `price`, `status`, `date_posted`, `description`) VALUES ('$patient_name','$drug_name','$price','$status','$date_posted','$description')", $con);
if($query)
		   {
			  echo "<script>alert('Confirmation sent successfully....');
				window.location='../script/accountant.php';
				</script>";
		   };

} 

?>





