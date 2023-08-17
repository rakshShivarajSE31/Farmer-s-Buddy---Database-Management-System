<html>
<head>
<title> delete records from db using php</title>
</head>
<body style="backgroung-color:green">
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Fname</th>	<!-- enter the coloumn names of yourtable -->
		<th>Lname</th>
		<th>Phoneno</th>
		<th>Country</th>
		<th>Address</th>
		<th>City</th>
		<th>Mailid</th>
		<th>Bankname</th>
		<th>Accountno</th>
		<th>Cropid</th>
		<th>Cropname</th>
		<th>Croptype</th>
		<th>Dom</th>
		<th>Price</th>

	</tr>
	<?php
		$con =mysqli_connect('127.0.0.1','root','');
		
		mysqli_select_db($con,'agriculture');	//db name
		
		$sql = "SELECT * FROM fdetail";	//table name
		
		$records = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_array($records))
		{
				echo "<tr>";			// enter the coloumn names of your tables present in db
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['Fname']."</td>";
				echo "<td>".$row['Lname']."</td>";
				echo "<td>".$row['Phoneno']."</td>";
				echo "<td>".$row['Country']."</td>";
				echo "<td>".$row['Address']."</td>";
				echo "<td>".$row['City']."</td>";
				echo "<td>".$row['Mailid']."</td>";
				echo "<td>".$row['Bankname']."</td>";
				echo "<td>".$row['Accountno']."</td>";
				echo "<td>".$row['Cropid']."</td>";
				echo "<td>".$row['Cropname']."</td>";
				echo "<td>".$row['Croptype']."</td>";
				echo "<td>".$row['Dom']."</td>";
				echo "<td>".$row['Price']."</td>";
		}
		header ("refresh:5; url=fdetail.html");
	?>
</body>
</html>