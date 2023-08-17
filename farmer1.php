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
	
	$Cropname = $_POST['cropname'];
	$Croptype = $_POST['croptype'];
	$Stays_fresh_by = $_POST['staysfreshby'];
	$Price = $_POST['price'];

	$sql = "INSERT INTO farmer's (Cropname,Croptype,Stays_fresh_by,Price) VALUES ('$Cropname','$Croptype','$Stays_fresh_by','$Price')" ;
	
	if(!mysqli_query($con,$sql))	{
		echo 'not inserted';
	}
	else
	{
		echo 'inserted'; 
	}
		
	header("refresh:2;url=ag4.html");
?>