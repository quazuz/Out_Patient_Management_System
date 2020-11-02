<?php include 'session.php';?>
<?php include 'connect.php';?>
<?php
	
		$dlid = $_REQUEST['lab_result_id'];

		$query = mysql_query("UPDATE lab_result SET flag = -1 WHERE lab_result_id = '$dlid'") or die(mysql_error());

		if($query)
		{
			 echo "<script>alert('Test result deleted successfully....');
				window.location='../script/lab_doc.php';
				</script>";
		}
		else
		{
			 echo "<script>alert('Error deleting test result....');
				window.location='../script/lab_doc.php';
				</script>";
		}

?>