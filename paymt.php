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
	
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$noc = $_POST['card_name'];
	$cardno = $_POST['card_number'];
	$expmonth = $_POST['expmonth'];
	$expyear = $_POST['expyear'];
	$cvv = $_POST['cvv'];

	$sql = "INSERT INTO billl (fullname,email,address,city,state,zip,noc,cardno,expmonth,expyear,cvv) VALUES ('$fullname','$email','$address','$city','$state','$zip','$noc','$cardno','$expmonth','$expyear','$cvv')" ;
	
	if(!mysqli_query($con,$sql))	{
		echo 'not inserted';
	}
	else
	{
		echo 'inserted'; 
	}
		
	header("refresh:2 url=payment.html");
?>