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
	
	$Cropname = $_POST['crop_name'];
	$Croptype = $_POST['crop_type'];
	$Stays_fresh_by = $_POST['stays_fresh_by'];
	$Price = $_POST['price'];
	$Image = $_POST['image'];

	$sql = "INSERT INTO farmer's (Cropname,Croptype,Stays_fresh_by,Price,Image) VALUES ('$Cropname','$Croptype','$Stays_fresh_by','$Price','$Image')" ;
	
	if(!mysqli_query($con,$sql))	{
		echo 'not inserted';
	}
	else
	{
		echo 'inserted'; 
	}
		
	header("refresh:2; url=ag4.html");
?>