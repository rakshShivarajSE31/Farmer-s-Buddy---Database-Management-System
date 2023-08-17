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
	
	$Fname = $_POST['firstname'];
	$Lname = $_POST['lastname'];
	$Usertype = $_POST['usertype'];
	$Phonenumber = $_POST['phonenumber'];
	$Country = $_POST['country'];
	$Address = $_POST['address'];
	$City = $_POST['city'];
	$Mail_id = $_POST['mail_id'];
	$Bankname = $_POST['bankname'];
	$Accountnumber = $_POST['accountnumber'];

	$sql = "INSERT INTO newuser (Fname,Lname,Usertype,Phonenumber,Country,Address,City,Mail_id,Bankname,Accountnumber) VALUES ('$Fname','$Lname','$Usertype','$Phonenumber','$Country','$Address','$City','$Mail_id','$Bankname','$Accountnumber')" ;
	
	if(!mysqli_query($con,$sql))	{
		echo 'not inserted';
	}
	else
	{
		echo 'inserted'; 
	}
		
	header("refresh:2;url=ag3.html");
?>