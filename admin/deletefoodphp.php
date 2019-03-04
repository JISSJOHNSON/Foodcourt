<?php

	include '../connection.php';

	$B_Id=$_POST['BTN'];
	echo "$B_Id";
	$deletefn="DELETE FROM `foodmenu` WHERE `foodmenu`.`FID` = $B_Id";

	$res=mysqli_query($link,$deletefn);

	if (res) {
		header('location:./deletefood.php');
	}
	else{
		echo "Not Deleted";
	}

?>