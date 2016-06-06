<?php
include('header.php');
if ($_POST) {
	# code...
	$user=$_SESSION['user'];
	$datea=date('Y-m-d');
	$monin=sanitizeString($_POST['monin']);
	$availbal=sanitizeString($_POST['abal']);
	$upbal=$monin+$availbal;

	//Check current Bal in Transactions
	$tquery="SELECT available_balance,updated_balance,startbal FROM cashtransactions ORDER BY id DESC LIMIT 1";
	$tresult=mysql_fetch_assoc(mysql_query($tquery));
	$abal=$tresult['available_balance'];
	$ubal=$tresult['updated_balance'];
	$newbal=$abal+$monin;
	//Initialise Starting Balance 
	$sbal=$tresult['startbal'];
	$newsbal=$sbal+$ubal;

	//Add Record to Cash book
	$cashupdate="INSERT INTO cashbook(money_in,avbalance,dateadded,recordedby)VALUES('$monin','$upbal','$datea','$user')";
	//Add Transactions
	$tupdate="INSERT INTO cashtransactions(available_balance,updated_balance,dateadded,recorded_by,money_in,startbal)VALUES('$newbal','$newbal','$datea','$user','$monin','$newsbal')";

	//Run Queries
	mysql_query($cashupdate);
	mysql_query($tupdate);

	echo"<script>location.replace('imprest.php')</script>";




}
?>