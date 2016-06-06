<?php
include('header.php');
if ($_POST) {
	# code...
		$std1=sanitizeString($_POST['sname']);
		$bcode1=sanitizeString($_POST['sidno']);
		$sch1=sanitizeString($_POST['semail']);
		$pname1=sanitizeString($_POST['stel']);
		$pid1=sanitizeString($_POST['sstatus']);
		
	
		$amnt1=sanitizeString($_POST['stype']);
		$datea1=sanitizeString($_POST['datea']);
		$query="INSERT INTO staff(staff_name,national_id,staff_email,staff_telno,status,staff_type,datemodified)VALUES
		('$std1','$bcode1','$sch1','$pname1','$pid1','$amnt1','$datea1')";
		mysql_query($query);
		echo "<script>location.replace('staffdetails.php')</script>";
}
?>