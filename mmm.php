<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "agriculture";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $Username = $_POST['username']; 
   $Email = $_POST['email'];
   $Password = $_POST['psw'];
   $RPassword = $_POST['psw_repeat'];
           
   // mysql query to Update data
   $query = "UPDATE `username` SET `email`='".$Email."',`password`= '".$Password."' WHERE `username` = $Username";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="sign.php" method="post">

            Username To Update: <input type="text" name="username" required><br><br>

            Email:<input password="text" name="email" required><br><br>
			
			Password:<input password="text" name="psw" required><br><br>
			
			Repeat password:<input password="text" name="psw_repeat" required><br><br>

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>