<?php
include('header.php');
if ($_POST) {
	# code...
	$user=$_SESSION['user'];
	$row=mysql_fetch_array(mysql_query("SELECT fullname FROM users where username='$user'"));
	$usr=$row['fullname'];
	$aname=sanitizeString($_POST['aname']);
	$areason=sanitizeString($_POST['areason']);
	$datea=sanitizeString($_POST['datea']);
	$query="INSERT INTO appointments(appointee_name,appointment_reason,appointment_date,recorded_by)Values('$aname','$areason','$datea','$usr')";
	mysql_query($query);
	echo "<script>location.replace('appointments.php')</script>";
}

?>