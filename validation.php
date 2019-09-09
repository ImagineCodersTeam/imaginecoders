<?php

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	mysql_connect("localhost","root","");
	mysql_select_db("imaginecoders");
	
	$result = mysql_query("select * from admins where username='$username' and password='$password'") or die ("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password)
	{
		Echo " Connect Succesfully !!!";
		header('location:admin.php');
	}
	else
	{
		echo "Failed to Login";
		header('location:login.html');
	}
?>
	