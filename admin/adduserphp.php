<?php
	
	include '../connection.php';

	$F_Name=$_POST['F_Name'];
	$L_Name=$_POST['L_Name'];
	$U_Name=$_POST['U_Name'];
	$A_No=$_POST['A_No'];
	$E_Id=$_POST['E_Id'];
	$P_No=$_POST['P_No'];
	$Pswd=$_POST['Pswd'];
	$result="INSERT INTO `users` (`UID`, `First_Name`, `Last_Name`, `Username`, `Password`, `Admission_No`, `Email_Id`, `Mobile_No`) VALUES (NULL, '$F_Name', '$L_Name', '$U_Name', '$Pswd', '$A_No', '$E_Id', '$P_No')";
	
	$res1=mysqli_query($link,$result);
	
	if($res1)
	{
		echo "Registration Successfull";
		header('location:./adduser.php');
	}
	else
	{
		echo "Not Registred";
	}
?>