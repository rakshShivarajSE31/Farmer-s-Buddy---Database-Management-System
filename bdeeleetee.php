<?php


		$con = mysqli_connect('127.0.0.1','root','');
		
		mysqli_select_db($con,'agriculture');
		
		$sql = "DELETE FROM bill3";
 
		if(mysqli_query($con,$sql))
			
			header("refresh:5 url=bdelete.php");
			
		else
			echo "no delete";


?>