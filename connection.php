<?php
	$host="localhost";
	$username="root";
	$password="";
	$dbname="foodcourt";

	$link=mysqli_connect($host,$username,$password,$dbname);
	if ($link) {
		// echo "Connected";
	}
	else{
		echo "Not Connected";
	}
?>