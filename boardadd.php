<?php
include('header.php');
if ($_POST) {
	# code...
	$mname=sanitizeString($_POST['mname']);
	$mtel=sanitizeString($_POST['mtel']);
	$midno=sanitizeString($_POST['midno']);
	$mpositoin=sanitizeString($_POST['mposition']);
	$mdate=sanitizeString($_POST['mdate']);

	$query="INSERT INTO boardmembers(bname,tel,idno,position,dateadded)VALUES('$mname','$mtel','$idno','$mposition','$mdate')";
	mysql_query($query);
	echo "<script>location.replace('boarddetails.php')</script>";
}
?>