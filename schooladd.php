<?php
include('header.php');
if ($_POST) {
	# code...
	$scode=sanitizeString($_POST['scode']);
	$sch=sanitizeString($_POST['sch']);
	$ward=sanitizeString($_POST['ward']);
	$addr=sanitizeString($_POST['addr']);
	$datea=sanitizeString($_POST['datea']);
	$query="INSERT INTO school(school_code,school_name,ward_location,address,dateadded)Values('$scode','$sch','$ward','$addr','$datea')";
	mysql_query($query);

	echo "<script>location.replace('schools.php')</script>";
}

?>