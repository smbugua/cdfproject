<?php
include('header.php');
if ($_POST) {
	# code...
		$std=sanitizeString($_POST['std']);
		$bcode=sanitizeString($_POST['bcode']);
		$sch=sanitizeString($_POST['sch']);
		$pname=sanitizeString($_POST['pname']);
		$pid=sanitizeString($_POST['pid']);
		$ward=sanitizeString($_POST['ward']);
		$parenttel=sanitizeString($_POST['parenttel']);
		$amnt=sanitizeString($_POST['amnt']);
		$datea=sanitizeString($_POST['datea']);
		$query="INSERT INTO student(student_name,bursary_code,school_name,parent_name,parent_id,ward_name,tel_no,dateadded,allocated_amount)VALUES
		('$std','$bcode','$sch','$pname','$pid','$ward','$parenttel','$datea','$amnt')";
		mysql_query($query);
		echo "<script>location.replace('students.php')</script>";
}
?>