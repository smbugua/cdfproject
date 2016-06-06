<?php
include('header.php');
if ($_POST) {
	# code...
	$aname=sanitizeString($_POST['aname']);
	$atype=sanitizeString($_POST['atype']);
	$ano=sanitizeString($_POST['ano']);
	$cond=sanitizeString($_POST['acond']);
	$datea=sanitizeString($_POST['datea']);

	$query="INSERT INTO assets(asset_name,asset_type,asset_no,condition,dateadded)VALUES('$aname','$atype','$ano','$cond','$datea')";
	mysql_query($query);
	echo "<script>location.replace('assetsdetails.php')</script>";
}
?>