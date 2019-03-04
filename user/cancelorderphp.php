<?php
	include('../connection.php');
	$bid= $_POST['C_BTN'];
	$cancelfn="UPDATE `orders` SET `Order_Status` = 'Cancelled' WHERE `orders`.`Order_Id` = '$bid'";

	$res=mysqli_query($link,$cancelfn);

	if ($res) {
		header('location:./vieworder.php');
	}
	else{
		echo "Not cancelled";
	}

?>