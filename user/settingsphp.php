<?php
	session_start();
	include '../connection.php';

	$uname=$_SESSION["username"];
	$paswd=$_POST['pwd'];
	$passwordquery="UPDATE `users` SET `Password` = '$paswd' WHERE `users`.`Username` = '$uname'";
	$result=mysqli_query($link, $passwordquery);
	if($result){
		header('location:./userhome.php');
		echo "Updated";
	}
	else{
		echo "Not Updated";
	}
?>