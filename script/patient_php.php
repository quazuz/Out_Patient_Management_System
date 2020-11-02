

<?php

	include ('connect.php');
/* $sq="CREATE TABLE patients (PID INT(11) AUTO_INCREMENT PRIMARY KEY, FirstName VARCHAR(20), LastName VARCHAR(20), `State of Origin` VARCHAR(30), `Blood Group` VARCHAR(10), Genotype VARCHAR(10), `Health Records` VARCHAR(100), Sex VARCHAR(10), `Marital Status` VARCHAR(20), Address VARCHAR(100), Nationality VARCHAR(30), `Phone Number` VARCHAR(30), `Home Phone` VARCHAR(30), `Next Of Kin` VARCHAR(30), Guardian VARCHAR(30), `Date Of Birth` INT(11))"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Patients created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}*/

$submit="";
if (isset($_POST['submit'])){
$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$StateOfOrigin = $_POST['StateOfOrigin'];

$BloodGroup = $_POST['BloodGroup'];

$genotype = $_POST['genotype'];

$HealthRecords = $_POST['HealthRecords'];

$sex = $_POST['sex'];

$MaritalStatus = $_POST['MaritalStatus'];

$address = $_POST['address'];

$nationality = $_POST['nationality'];

$PhoneNumber = $_POST['PhoneNumber'];

$HomePhone = $_POST['HomePhone'];

$NextOfKin = $_POST['NextOfKin'];

$guardian = $_POST['guardian'];

$DateOfBirth = $_POST['year'].$_POST['month'].$_POST['day'];



  // $submit=$_REQUEST['submit']; 


$query=mysql_query("INSERT INTO `patients`(`FirstName`, `LastName`, `State of Origin`, `Blood Group`, `Genotype`, `Health Records`, `Sex`, `Marital Status`, `Address`, `Nationality`, `Phone Number`, `Home Phone`, `Next Of Kin`, `Guardian`, `Date Of Birth`) VALUES ('$firstname','$lastname','$StateOfOrigin','$BloodGroup','$genotype','$HealthRecords','$sex','$MaritalStatus','$address','$nationality','$PhoneNumber','$HomePhone','$NextOfKin','$guardian',$DateOfBirth)", $con);
if (!$query){
    echo mysql_error();
}
else{
    echo "it works!";
}
} 
?>





