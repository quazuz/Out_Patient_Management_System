<?php

	$host = 'localhost';
	$user = 'root';
	$pass = 'root';
    $port = 8889;
$con=mysql_connect($host, $user, $pass, $port) or die (mysql_error());
// Check connection
if (!$con) {
  echo "Failed to connect to MySQL";

}
else {
	//echo"connected";
}

// Create database
/*$sql="CREATE DATABASE hospital";
if (mysql_query($sql,$con)) {
  echo "Database hospital created successfully";
} 
else {
  echo "Error creating database: " . mysql_error($con);
}
*/
$database=mysql_select_db("Hospital",$con);
if(!$con) {
	echo "failed to connect to MySQL: " . mysql_connect_error();
}

?>