<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	mysqli_select_db($con,'agriculture');
	
	$sql = "UPDATE bill3 SET Fname='$_POST[fname]', Email='$_POST[email]', Address='$_POST[address]', City='$_POST[city]', State='$_POST[state]', Zip='$_POST[zip]', Noc='$_POST[noc]', Ccn='$_POST[cno]', Expmon='$_POST[em]', Expyr='$_POST[ey]', Cvv='$_POST[cvv]'" ;
	
	 if(mysqli_query($con, $sql))
		header("refresh:5; url=bup.php");
	else
		echo "nope.. not updated";
	

?>