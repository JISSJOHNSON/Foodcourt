<?php
	error_reporting(0);
	include '../connection.php';
	$A_B_Id=$_POST['AA_BTN'];
	$Food_Quantity="F_Qty".$A_B_Id;

	$F_Qty = $_POST[$Food_Quantity];

	$orderid="SELECT * from orders";
	$result11=mysqli_query($link,$orderid);
	while($ordernumber=mysqli_fetch_assoc($result11)){
		$orderno=$ordernumber['Order_Id'];
	}
	$neworderid=$orderno+1;
	$result="INSERT INTO `cart` (`CID`, `Order_Id`, `F_Id`, `Qty`) VALUES (NULL, '$neworderid', '$A_B_Id', '$F_Qty')";

	$res1=mysqli_query($link,$result);
	if ($res1) {
		header('location:./orderfood.php');
	}
	else{
		echo "Not Added";
	}
?>