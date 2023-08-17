<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	mysqli_select_db($con,'agriculture');
	
	$sql = "UPDATE fdetail SET Fname='$_POST[firstname]', Lname='$_POST[lastname]', Phoneno='$_POST[phonenumber]', Country='$_POST[country]', Address='$_POST[address]', City='$_POST[city]', Mailid='$_POST[mail_id]', Bankname='$_POST[bank_name]', Accountno='$_POST[acno]', Cropid='$_POST[crop_id]', Cropname='$_POST[crop_name]', Croptype='$_POST[crop_type]', Dom='$_POST[Dom]', Price='$_POST[price]' WHERE ID='$_POST[id]'" ;
	
	 if(mysqli_query($con, $sql))
		header("refresh:20; url=fup.php");
	else
		echo "nope.. not updated";
	

?>