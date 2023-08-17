<html>
<head>
<title> updating the data</title>
</head>
</body>

<?php
	$con = mysqli_connect('127.0.0.1','root','');
	
	mysqli_select_db($con,'agriculture');
	
	$sql = "SELECT * FROM signup";
	
	$records= mysqli_query($con, $sql);

?>
<table>
	<tr>
		<th> name</th>
		<th> email</th>
		<th> password</th>
		<th> rpassword</th>
		<th> delete </th>
	</tr>
	<?php
	while($row = mysqli_fetch_array($records))
	{
		echo "<tr><form action=update.php method=post>";
		echo "<td><input type=text name=username value='".$row['Username']."'></td>";
		echo "<td><input type=text name=email value='".$row['Email']."'></td>";
		echo "<td><input type=text name=psw value='".$row['Password']."'></td>";
		echo "<td><input type=text name=psw_repeat value='".$row['RPassword']."'></td>";
		echo "<input type=hidden name=id value='".$row['id']."'>";
		echo "<td><input type=submit>";
		echo"</form></tr>";
	}
	?>


</body>
</html>