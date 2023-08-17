<?php
		 
		 $con = mysqli_connect('127.0.0.1','root','');
		 
		 mysqli_select_db($con,'agriculture');
		 
		 $sql = "DELETE FROM signup WHERE username='$_GET(Username)'";
		 
		 $records = mysqli_query($con,$sql);
		 
		 if(mysqli_query($con,$sql))
		 {
			header ("refresh:2;url=dele.php");
			echo "this row is deleted";
		 }
		 else
		 {
			echo "not deleted";
		 }
		header ("refresh:3;url=clg.html");
?>