<?php
	
	include './connection.php';
	
	$name=$_POST['u_n'];
	$paswd=$_POST['pwd'];
	$count=0;
	$login="SELECT * from users where Username='$name' && Password='$paswd'";
	$result=mysqli_query($link,$login);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		echo "Login Successfull";
		if($name == 'admin')
		{
			header('location:./admin/adminhome.php');
			session_start();
			$_SESSION["username"]=$name;
		}
		else{
			header('location:./user/userhome.php');
			session_start();
			$_SESSION["username"]=$name;
		}
	}
	else
	{
		echo "Username or Password is Incorrect";
	}
?>