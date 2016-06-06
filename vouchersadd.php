<?php
include('header.php');
if ($_POST) {
	# code...

	$user=$_SESSION['user'];
	$datea=date('Y-m-d');
	$vcode=sanitizeString($_POST['vcode']);
	$vsubject=sanitizeString($_POST['vsubject']);
	$vamount=sanitizeString($_POST['vamount']);
	$vdesc=sanitizeString($_POST['vdesc']);
	$vdate=sanitizeString($_POST['vdate']);

	//Check current Bal in Transactions
	$tquery="SELECT available_balance,updated_balance FROM cashtransactions ORDER BY id DESC LIMIT 1";
	$tresult=mysql_fetch_assoc(mysql_query($tquery));
	$abal=$tresult['available_balance'];
	$newbal=$abal-$vamount;
	
	//Add Record to vouchers
	$query="INSERT INTO voucher(voucher_code,voucher_subject,voucher_amount,voucher_description,dateadded)Values('$vcode','$vsubject','$vamount','$vdesc','$vdate')";

	//Add Transactions
	$tupdate="INSERT INTO cashtransactions(available_balance,updated_balance,dateadded,recorded_by,money_out,ttype)VALUES('$newbal','$newbal','$datea','$user','$vamount','1')";


	//Run Queries
	if (!mysql_error()) {
		# code...

	mysql_query($query);
	mysql_query($tupdate);
	
	echo "<script>location.replace('vouchers.php')</script>";
	}
	mysql_error();

}

?>
