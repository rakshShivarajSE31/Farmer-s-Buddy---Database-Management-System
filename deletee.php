<?php


		$con = mysqli_connect('127.0.0.1','root','');
		
		mysqli_select_db($con,'agriculture');
		
		$sql = "DELETE FROM signup WHERE id='$_GET[id]'";
 
		if(mysqli_query($con,$sql))
			
			header("refresh:5 url=inddes.php");
			
		else
			echo "no delete";


?>