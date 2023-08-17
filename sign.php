<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{	
		echo 'not connected to db';
	}
	
	if(!mysqli_select_db($con,'agriculture'))
	{
		echo 'not selected'; 
	}
	
	$Username = $_POST['username'];
	$Email = $_POST['email'];
	$Password = $_POST['psw'];
	$RPassword = $_POST['psw_repeat'];

	$sql = "INSERT INTO signup (Username,Email,Password,RPassword) VALUES ('$Username','$Email','$Password','$RPassword')" ;
	
	if(!mysqli_query($con,$sql))	{
		echo ' not registered successfully plz recheck the inserted data';
	}
	else
	{
		echo 'regitration successfull';
	}
		
	header("refresh:10; url=crop2.html");
?>
 <a href=" crop0.html">next</a>