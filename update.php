<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	mysqli_select_db($con,'agriculture');
	
	$sql = "UPDATE signup SET Username='$_POST[username]', Email='$_POST[email]', Password='$_POST[psw]', RPassword='$_POST[psw_repeat]' WHERE ID='$_POST[id]'" ;
	
	 if(mysqli_query($con, $sql))
		header("refresh:20; url=indeexx.php");
	else
		echo "nope.. not updated";
	

?>