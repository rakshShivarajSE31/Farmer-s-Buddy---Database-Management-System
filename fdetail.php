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
	$Phoneno = $_POST['phonenumber'];
	$Country = $_POST['country'];
	$Address = $_POST['address'];
	$City = $_POST['city'];
	$Mailid = $_POST['mail_id'];
	$Bankname = $_POST['bank_name'];
	$Accountno = $_POST['acno'];
	$Cropid = $_POST['crop_id'];
	$Cropname = $_POST['crop_name'];
	$Croptype = $_POST['crop_type'];
	$Dom = $_POST['Dom'];
	$Price = $_POST['price'];

	$sql = "INSERT INTO fdetail (Fname,Lname,Phoneno,Country,Address,City,Mailid,Bankname,Accountno,Cropid,Cropname,Croptype,Dom,Price) VALUES ('$Fname','$Lname','$Phoneno','$Country','$Address','$City','$Mailid','$Bankname','$Accountno','$Cropid','$Cropname','$Croptype','$Dom','$Price')" ;
	
	if(!mysqli_query($con,$sql))	{
		echo 'not inserted';
	}
	else
	{
		echo 'inserted'; 
	}
		
	header("refresh:290 url=fdetail.html");
?>