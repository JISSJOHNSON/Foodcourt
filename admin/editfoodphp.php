<?php

	include '../connection.php';

	$B_Id=$_POST['BTN'];

	$Food_Name="F_Name".$B_Id;
	$Food_Rate="F_Rate".$B_Id;
	$Food_Quantity="F_Qty".$B_Id;

	$F_Name = $_POST[$Food_Name];
	$F_Rate = $_POST[$Food_Rate];
	$F_Qty = $_POST[$Food_Quantity];

	$result="UPDATE `foodmenu` SET `Name` = '$F_Name', `Rate` = '$F_Rate', `Quantity` = '$F_Qty' WHERE `foodmenu`.`FID` = $B_Id";

	$res1=mysqli_query($link,$result);
	if ($res1) {
		header('location:./editfood.php');
	}
	else{
		echo "Not Edited";
	}
?>