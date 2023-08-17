<html>
<head>
<title> deleting the fdetails data</title>
</head>
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
		$con = mysqli_connect('127.0.0.1','root','');
		
		mysqli_select_db($con,'agriculture');
		
		$sql = "SELECT * FROM bill3";

		$records = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_array($records))
		{
			echo "<tr>";
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
			echo "<td><a href=bdeeleetee.php?id=".">delete</a></td>";
			
			
		}
		
		
	?>
</table>
</body>
</html>