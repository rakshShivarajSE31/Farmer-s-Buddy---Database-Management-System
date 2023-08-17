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
	
	$Fullname = $_POST['fullname'];
	$Email = $_POST['email'];
	$Address = $_POST['address'];
	$City = $_POST['city'];
	$State = $_POST['state'];
	$ZIP = $_POST['zip'];
	$Nameoncard = $_POST['card_name'];
	$Cardno = $_POST['card_number'];
	$EXPmonth = $_POST['expmonth'];
	$EXPyear = $_POST['expyear'];
	$CVV = $_POST['cvv'];

	$sql = "INSERT INTO billing (Fullname,Email,Address,City,State,ZIP,Nameoncard,Cardno,EXPmonth,EXPyear,CVV,) VALUES ('$Fullname','$Email','$Address','$City','$State','$ZIP','$Nameoncard','$Cardno','$EXPmonth','$EXPyear','$CVV')" ;
	
	if(!mysqli_query($con,$sql))	{
		echo 'not inserted';
	}
	else
	{
		echo 'inserted'; 
	}
		
	header("refresh:290 url=payment.html");
?>