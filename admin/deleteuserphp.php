<?php
	include '../connection.php';

	$B_Id=$_POST['BTN'];

	$deletefn="DELETE FROM `users` WHERE `users`.`UID` = $B_Id";

	$res=mysqli_query($link,$deletefn);

	if (res) {
		header('location:./deleteuser.php');
	}
	else{
		echo "Not Deleted";
	}

?>