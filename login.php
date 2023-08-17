<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not connected to server';
	}
	
	if(!mysqli_select_db($con,'agriculture'))
	{
		echo 'database not selected';
	}
	
	$Username = $_POST['uname'];
	$Userid = $_POST['userid'];
	$password = $_POST['psw'];
	
	$sql = "INSERT INTO agriculture (Username,Userid,password) VALUES ('$Username','$Userid','$password')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not connected';
	}
	else
	{
		 echo 'Inserted';
	}
	header("refresh:2; url=ag2.html");
	
?>