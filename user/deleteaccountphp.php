<?php
	error_reporting(0);
	session_start();
	include '../connection.php';

	$user_name = $_SESSION["username"];

	if ($_POST['Y_BTN']){
		$deletequery="DELETE FROM `users` WHERE `users`.`Username` = '$user_name'";
		$del=mysqli_query($link,$deletequery);
		if($del){
			echo "Account Deleted";
			header('location:../logout.php');
		}
		else{
			echo "Not deleted";
			echo "Yes Button";
		}
	}
	elseif($_POST['N_BTN']){
		header('location:./userhome.php');
	}
	else{
		echo "Not deleted error occured";
	}
?>