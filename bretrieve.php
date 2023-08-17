<html>
<head>
<title> delete records from db using php</title>
</head>
<body style="backgroung-color:green">
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Fname</th>	<!-- enter the coloumn names of yourtable -->
		<th>Email</th>
		<th>Address</th>
		<th>City</th>
		<th>State</th>
		<th>Zip</th>
		<th>Noc</th>
		<th>Ccn</th>
		<th>Expmonth</th>
		<th>Expyr</th>
		<th>Cvv</th>
		
	</tr>
	<?php
		$con =mysqli_connect('127.0.0.1','root','');
		
		mysqli_select_db($con,'agriculture');	//db name
		
		$sql = "SELECT * FROM bill3";	//table name
		
		$records = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_array($records))
		{
				echo "<tr>";			// enter the coloumn names of your tables present in db
				
				echo "<td>".$row['Fname']."</td>";
				echo "<td>".$row['Email']."</td>";
				echo "<td>".$row['Address']."</td>";
				echo "<td>".$row['City']."</td>";
				echo "<td>".$row['State']."</td>";
				echo "<td>".$row['Zip']."</td>";
				echo "<td>".$row['Noc']."</td>";
				echo "<td>".$row['Ccn']."</td>";
				echo "<td>".$row['Expmon']."</td>";
				echo "<td>".$row['Expyr']."</td>";
				echo "<td>".$row['Cvv']."</td>";

		}
		header ("refresh:5; url=bill2.html");
	?>
</body>
</html>