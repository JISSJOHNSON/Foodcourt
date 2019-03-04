<?php
	error_reporting(0);
	include '../connection.php';

	if ($_POST['E_BTN']) {

		$E_B_Id=$_POST['E_BTN'];

		$Food_Name="F_Name".$E_B_Id;
		$Food_Rate="F_Rate".$E_B_Id;
		$Food_Quantity="F_Qty".$E_B_Id;
		$FoodAvailable_Quantity="FA_Qty".$E_B_Id;

		$F_Name = $_POST[$Food_Name];
		$F_Rate = $_POST[$Food_Rate];
		$F_Qty = $_POST[$Food_Quantity];
		$FA_Qty = $_POST[$FoodAvailable_Quantity];

		$result="UPDATE `todaysfood` SET `F_Name` = '$F_Name', `F_Qty` = '$F_Qty', `Avail_Qty` = '$FA_Qty', `F_Rate` = '$F_Rate' WHERE `todaysfood`.`TFID` = '$E_B_Id'";

		$res1=mysqli_query($link,$result);
		if ($res1) {
			header('location:./adminhome.php');
		}
		else{
			echo "Not Edited";
		}

	}
	elseif ($_POST['D_BTN']) {

		$D_B_Id=$_POST['D_BTN'];
		$deletefn="DELETE FROM `todaysfood` WHERE `todaysfood`.`TFID` = $D_B_Id";

		$res=mysqli_query($link,$deletefn);

		if ($res) {
			header('location:./adminhome.php');
		}
		else{
			echo "Not Deleted";
		}
	}
	elseif ($_POST['A_BTN']) {
		echo "Addfood";

		$F_ID=$_POST['FID'];
		$F_Name=$_POST['F_Name'];
		$F_Qty=$_POST['F_Qty'];
		$FA_Qty=$_POST['FA_Qty'];
		$F_Rate=$_POST['F_Rate'];

		$insertfn="INSERT INTO `todaysfood` (`TFID`, `F_Name`, `F_Qty`, `Avail_Qty`, `F_Rate`) VALUES ('$F_ID', '$F_Name', '$F_Qty', '$FA_Qty', '$F_Rate')";
		$res=mysqli_query($link,$insertfn);

		if ($res) {
			header('location:./adminhome.php');
		}
		else{
			echo "Not Inserted";
		}

	}
	else{
		echo "Invalid";
	}
?>