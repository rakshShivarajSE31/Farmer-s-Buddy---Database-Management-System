<html>
<head>
<title> deleting the data</title>
</head>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th> name</th>
		<th> email</th>
		<th> password</th>
		<th> rpassword</th>
		<th> delete </th>
	</tr>
	<?php
		$con = mysqli_connect('127.0.0.1','root','');
		
		mysqli_select_db($con,'agriculture');
		
		$sql = "SELECT * FROM signup";

		$records = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_array($records))
		{
			echo "<tr>";
			echo "<td>".$row['Username']."</td>";
			echo "<td>".$row['Email']."</td>";
			echo "<td>".$row['Password']."</td>";
			echo "<td>".$row['RPassword']."</td>";
			echo "<td><a href=deletee.php?id=".$row['id'].">delete</a></td>";
			
			
		}
		
		
	?>
</table>
</body>
</html>