<?php
include('header.php');
if ($_POST) {
	# code...
	$wcode=sanitizeString($_POST['wcode']);
	$ward=sanitizeString($_POST['ward']);
	$datea=sanitizeString($_POST['datea']);
	$query="INSERT INTO ward(ward_code,ward_name,dateadded)Values('$wcode','$ward','$datea')";
	mysql_query($query);
	echo "<script>location.replace('wards.php')</script>";
}

?>