<?php
	error_reporting(0);
	session_start();
	include '../connection.php';
	$user_name=$_SESSION['username'];
	
	$userid1="SELECT * from users where users.Username='$user_name'";
	$result10=mysqli_query($link,$userid1);
	$res10=mysqli_fetch_assoc($result10);
	$userid=$res10['UID'];


	if ($_POST['E_BTN']) {

		$E_B_Id=$_POST['E_BTN'];

		$Food_Quantity="F_Qty".$E_B_Id;

		$F_Qty = $_POST[$Food_Quantity];

		$result="UPDATE `cart` SET `Qty` = '$F_Qty' WHERE `cart`.`CID` = '$E_B_Id'";

		$res1=mysqli_query($link,$result);
		if ($res1) {
			header('location:./orderfood.php');
		}
		else{
			echo "Not Edited";
		}

	}
	elseif ($_POST['D_BTN']) {

		$D_B_Id=$_POST['D_BTN'];
		$deletefn="DELETE FROM `cart` WHERE `cart`.`CID` = $D_B_Id";

		$res=mysqli_query($link,$deletefn);

		if ($res) {
			header('location:./orderfood.php');
		}
		else{
			echo "Not Deleted";
		}
	}
	elseif ($_POST['P_BTN']) {
		$count=0;
		$checkdb="SELECT * from cart";
		$result32=mysqli_query($link,$checkdb);
		$count=mysqli_num_rows($result32);
		$Insquery="INSERT INTO `orders` (`UID`) VALUES ('$userid')";
		$insertorder=mysqli_query($link,$Insquery);
		if($insertorder && $count>0){
			echo "Inserted ";
			$orderid="SELECT * from orders";
			$result11=mysqli_query($link,$orderid);
			while($ordernumber=mysqli_fetch_assoc($result11)){
				$orderno=$ordernumber['Order_Id'];
			}
			// ///////////////////////////////////////////////////////
			$test1="SELECT * FROM cart";
			$test1run=mysqli_query($link,$test1);
			while($test1res=mysqli_fetch_assoc($test1run)){
				$ins_o_id=$test1res['Order_Id'];
				$ins_f_id=$test1res['F_Id'];
				$ins_qty=$test1res['Qty'];
				$placeorder="INSERT INTO `foodorders` (`Foodorder_Id`, `Order_Id`, `FID`, `Qty`) VALUES (NULL, '$ins_o_id', '$ins_f_id', '$ins_qty')";
				$result12=mysqli_query($link,$placeorder);
				if($result12){
					header('location:./vieworder.php');
				}
				else{
					echo "Not placed";
				}
			}
			// ///////////////////////////////////////////////////////

			$trunc="TRUNCATE `cart`";
			$result13=mysqli_query($link,$trunc);
		}
		else{
			echo "Not Inserted. Error occured";
		}
	}
	else{
		echo "Invalid";
	}
?>