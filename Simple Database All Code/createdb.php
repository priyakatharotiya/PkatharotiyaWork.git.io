<?php
include_once 'config.php';
$sql="create database employee";
if($con->query($sql)===TRUE)
{
	echo"database created successfully";
}
else
{
		echo"Error in database creating:".$con->error;
}
$con->close();
?>		