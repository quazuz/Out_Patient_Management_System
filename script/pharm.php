

<?php

	include ('connect.php');
/* $sq="CREATE TABLE pharm (phid INT(11) AUTO_INCREMENT PRIMARY KEY, patient_name VARCHAR(20), drug_name VARCHAR(100), man_date date, exp_date date, qty VARCHAR(100), price INT(11), man_company VARCHAR(30), date_posted timestamp, description VARCHAR(100), PID INT(11), Foreign key (PID) references patients(PID))"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Pharmacy created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}
*/


$submit="";
if (isset($_POST['submit'])){
$patient_name = $_POST['patient_name'];

$drug_name = $_POST['drug_name'];

$man_date = $_POST['man_date'];

$exp_date = $_POST['exp_date'];

$qty = $_POST['qty'];

$price = $_POST['price'];

$man_company = $_POST['man_company'];

$date_posted = $_POST['date_posted'];

$description = $_POST['description'];



  // $submit=$_REQUEST['submit']; 


$query=mysql_query("INSERT INTO `pharm` (`patient_name`, `drug_name`, `man_date`, `exp_date`, `qty`, `price`, `man_company`, `date_posted`, `description`) VALUES ('$patient_name','$drug_name','$man_date','$exp_date','$qty','$price','$man_company','$date_posted','$description')", $con);
if($query)
		   {
			  echo "<script>alert('details sent successfully....');
				window.location='../script/pharmacist.php';
				</script>";
		   };

} 

?>





