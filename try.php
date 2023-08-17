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
	
	$Fname = $_POST['fname'];
	$Email = $_POST['email'];
	$Address = $_POST['address'];
	$City = $_POST['city'];
	$State = $_POST['state'];
	$Zip = $_POST['zip'];
	$Noc = $_POST['noc'];
	$Ccn = $_POST['cno'];
	$Expmon = $_POST['em'];
	$Expyr = $_POST['ey'];
	$Cvv = $_POST['cvv'];

	$sql = "INSERT INTO bill3 (Fname,Email,Address,City,State,Zip,Noc,Ccn,Expmon,Expyr,Cvv) VALUES ('$Fname','$Email','Address','$City','$State','$Zip','$Noc','$Ccn','$Expmon','$Expyr','$Cvv')" ;
	
	if(!mysqli_query($con,$sql))	{
		echo 'not inserted';
	}
	else
	{
		echo 'inserted'; 
	}
		
	header("refresh:2 url=bill2.html");
?>