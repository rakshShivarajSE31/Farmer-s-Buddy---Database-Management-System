<html>
<head>
<title> updating the data to Payment page</title>
</head>
</body>

<?php
	$con = mysqli_connect('127.0.0.1','root','');
	
	mysqli_select_db($con,'agriculture');
	
	$sql = "SELECT * FROM bill3";
	
	$records= mysqli_query($con, $sql);

?>
<table>
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
	while($row = mysqli_fetch_array($records))
	{
		echo "<tr><form action=buppp.php method=post>";
		echo "<td><input type=text name=fname value='".$row['Fname']."'></td>";
		echo "<td><input type=text name=email value='".$row['Email']."'></td>";
		echo "<td><input type=int name=address value='".$row['Address']."'></td>";
		echo "<td><input type=text name=city value='".$row['City']."'></td>";
		echo "<td><input type=text name=state value='".$row['State']."'></td>";
		echo "<td><input type=text name=zip value='".$row['Zip']."'></td>";
		echo "<td><input type=text name=noc value='".$row['Noc']."'></td>";
		echo "<td><input type=text name=cno value='".$row['Ccn']."'></td>";
		echo "<td><input type=text name=em value='".$row['Expmon']."'></td>";
		echo "<td><input type=text name=ey value='".$row['Expyr']."'></td>";
		echo "<td><input type=text name=cvv value='".$row['Cvv']."'></td>";
		echo "<td><input type=submit>";
		echo"</form></tr>";
	}
	?>


</body>
</html>