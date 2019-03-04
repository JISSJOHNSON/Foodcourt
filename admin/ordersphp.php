<?php
	error_reporting(0);
	include '../connection.php';

	if ($_POST['Active']) {

		$O_Id=$_POST['Active'];

		$result="UPDATE `orders` SET `Order_Status` = 'Active' WHERE `orders`.`Order_Id` = '$O_Id'";

		$res1=mysqli_query($link,$result);
		if ($res1) {
			header('location:./orders.php');
		}
		else{
			echo "Not Edited";
		}

	}
	elseif ($_POST['Cancel']) {

		$O_Id=$_POST['Cancel'];

		$result="UPDATE `orders` SET `Order_Status` = 'Cancelled' WHERE `orders`.`Order_Id` = '$O_Id'";

		$res1=mysqli_query($link,$result);
		if ($res1) {
			header('location:./orders.php');
		}
		else{
			echo "Not Edited";
		}

	}
	elseif ($_POST['Delivered']) {

		$O_Id=$_POST['Delivered'];

		$result="UPDATE `orders` SET `Order_Status` = 'Delivered' WHERE `orders`.`Order_Id` = '$O_Id'";

		$res1=mysqli_query($link,$result);
		if ($res1) {
			header('location:./orders.php');
		}
		else{
			echo "Not Edited";
		}

	}
	else{
		echo "Invalid";
	}
?>