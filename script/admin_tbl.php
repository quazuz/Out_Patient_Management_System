<?php

	include ('connect.php');
 $sq="CREATE TABLE admin (admin_id INT(11) AUTO_INCREMENT PRIMARY KEY, username VARCHAR(20), password VARCHAR(20))"; 
// Execute query
if (mysql_query($sq,$con)) {
  echo "Table Admin created successfully";
} 
else {
  echo "Error creating table: " . mysql_error($con);
}
?>