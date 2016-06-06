<?php
include('header.php');
if ($_POST) {
	# code...
	$vname=sanitizeString($_POST['vname']);
	$vreason=sanitizeString($_POST['vreason']);
	$datea=sanitizeString($_POST['datea']);
	$vtel=sanitizeString($_POST['vtel']);
	$query="INSERT INTO visitor(visitor_name,visitor_reason,visitor_date,visitor_tel)Values('$vname','$vreason','$datea','$vtel')";
	mysql_query($query);
	echo "<script>location.replace('visitors.php')</script>";
}

?>