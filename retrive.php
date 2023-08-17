<html>
<head>
<title> delete records from db using php</title>
</head>
<body style="backgroung-color:green">
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>ID</th>	<!-- enter the coloumn names of yourtable -->
		<th>uSERNAME</th>
		<th>mail</th>
		<th>paswd</th>
		<th>rpsw</th>
	</tr>
	<?php
		$con =mysqli_connect('127.0.0.1','root','');
		
		mysqli_select_db($con,'agriculture');	//db name
		
		$sql = "SELECT * FROM signup";	//table name
		
		$records = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_array($records))
		{
				echo "<tr>";			// enter the coloumn names of your tables present in db
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['Username']."</td>";
				echo "<td>".$row['Email']."</td>";
				echo "<td>".$row['Password']."</td>";
				echo "<td>".$row['RPassword']."</td>";
		}
		header ("refresh:5; url=login1.html");
	?>
</body>
</html>