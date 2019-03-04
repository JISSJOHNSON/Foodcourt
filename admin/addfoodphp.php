<?php
	
	include '../connection.php';

	$F_Name=$_POST['F_Name'];
	$F_Rate=$_POST['F_Rate'];
	$F_Qty=$_POST['F_Qty'];
	$result="INSERT INTO `foodmenu` (`FID`, `Name`, `Rate`, `Quantity`) VALUES (NULL, '$F_Name', '$F_Rate', '$F_Qty')";
	
	$res1=mysqli_query($link,$result );
	
	if($res1)
	{
		header('location:./addfood.php');
	}
	else
	{
		echo "Not Added";
	}
?>