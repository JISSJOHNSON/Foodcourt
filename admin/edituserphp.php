<?php
	
	include '../connection.php';

	$B_Id=$_POST['BTN'];

	$First_Name="F_Name".$B_Id;
	$Last_Name="L_Name".$B_Id;
	$User_Name="U_Name".$B_Id;
	$Admission_No="A_No".$B_Id;
	$Email_Id="E_Id".$B_Id;
	$Mobile_No="M_No".$B_Id;
	$Paswd="Pswd".$B_Id;

	$F_Name = $_POST[$First_Name];
	$L_Name = $_POST[$Last_Name];
	$U_Name = $_POST[$User_Name];
	$A_No = $_POST[$Admission_No];
	$E_Id = $_POST[$Email_Id];
	$M_No = $_POST[$Mobile_No];
	$Pswd = $_POST[$Paswd];

	$result="UPDATE `users` SET `First_Name` = '$F_Name', `Last_Name` = '$L_Name', `Username` = '$U_Name', `Password` = '$Pswd', `Admission_No` = '$A_No', `Email_Id` = '$E_Id', `Mobile_No` = '$M_No' WHERE `users`.`UID` = $B_Id";

	$result2="select * from users";
	$res1=mysqli_query($link,$result);
	$res2=mysqli_query($link,$result2);
	if ($res1) {
		header('location:./edituser.php');
	}
	else{
		echo "Not Edited";
	}
?>