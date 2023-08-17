<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo 'not connected to db';
}

if(!mysqli_select_db($con,'agriculture'))	//db name
{
    echo 'not selected';
}

?>