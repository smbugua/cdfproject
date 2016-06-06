<?php
include('header.php');
if ($_POST) {
	# code...
	$bcode=sanitizeString($_POST['pcode']);
	$sch=sanitizeString($_POST['sch']);
	$nostd=sanitizeString($_POST['nostd']);
	$amnt=sanitizeString($_POST['pamnt']);
	$datea=sanitizeString($_POST['pdate']);

	$query="INSERT INTO school(school_code,school_name) ";
}
?>