<?php
include('header.php');
if ($_POST) {
	# code...
	$wcode1=sanitizeString($_POST['stypename']);

	
	$query="INSERT INTO stafftype(type_name)Values('$wcode1')";
	mysql_query($query);
	echo "<script>location.replace('success.php')</script>";
}

?>