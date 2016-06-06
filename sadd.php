<?php
include('header.php');
if ($_POST) {
	# code...
	$user=$_SESSION['user'];
	$datea=date('Y-m-d');
	$sbal=sanitizeString($_POST['sbal']);
		$tupdate="INSERT INTO cashtransactions(dateadded,recorded_by,startbal,ttype)VALUES('$datea','$user','$sbal','2')";

	//Run Queries
	mysql_query($tupdate);
	echo "<script>location.replace('finances.php')</script>";
}
?>