<?php
include('header.php');
if ($_POST) {

	# code...
	$pcode=sanitizeString($_POST['pcode']);
	$pname=sanitizeString($_POST['pname']);
	$pward=sanitizeString($_POST['pward']);
	$pcost=sanitizeString($_POST['pamnt']);
	$pdesc=sanitizeString($_POST['pdesc']);
	$pdate=sanitizeString($_POST['pdate']);
	$query="INSERT INTO projects (proj_code,proj_name,proj_ward,proj_amount,proj_desc,dateadded)VALUES('$pcode','$pname','$pward','$pcost','$pdesc','$pdate')";
	mysql_query($query);


	echo "<script>location.replace('projects.php')</script>";
}
?>
