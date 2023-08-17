<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{	
		echo 'not connected to db';
	}
	
	if(!mysqli_select_db($con,'project'))
	{
		echo 'not selected'; 
	}
	
	$Username = $_POST['username'];
	$Password = $_POST['password'];

	$sql = "INSERT INTO login (Username,Password) VALUES ('$Username','$Password')" ;
	
	if(!mysqli_query($con,$sql))	{
		echo 'not inserted';
	}
	else
	{
		echo 'inserted'; 
	}
		
	header("refresh:2;url=jp.html");
?>