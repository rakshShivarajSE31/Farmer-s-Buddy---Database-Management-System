<html>
<head>
<title>delete records from db using php</title>
</head>
<body>
<table border=1 cellpandding=1 cellspacing=1>
	<tr>
		<th>id</th>
		<th>username</th>
		<th>email</th>
		<th>password</th>
		<th>rpassword</th>
		<th>Delete</th>
	</tr>
	<?php
		$con = mysqli_connect('127.0.0.1','root','');
		
		mysqli_select_db($con,'agriculture');	//db name
		
		
		$sql="SELECT * FROM signup";  //table name
		
		$records =mysqli_query($con,$sql);
		
		while($row =mysqli_fetch_array($records))	//enter coloumn names given in your db
		{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['Username']."</td>";
			echo "<td>".$row['Email']."</td>";
			echo "<td>".$row['Password']."</td>";
			echo "<td>".$row['RPassword']."</td>";
			echo "<td><a href=delete.php?username=".$row['Username'].">Delete</a></td>";
		}
	?>
</body>
</html>