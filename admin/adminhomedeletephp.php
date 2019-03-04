<?php
	
	include '../connection.php';

	$D_B_Id=$_POST['D_BTN'];
	$deletefn="DELETE FROM `todaysfood` WHERE `todaysfood`.`TFID` = '$D_B_Id'";

	$res=mysqli_query($link,$deletefn);

	if ($res) {
		header('location:./adminhome.php');
	}
	else{
		echo "Not Deleted";
	}
?>