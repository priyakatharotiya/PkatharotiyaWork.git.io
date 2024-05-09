<?php
$servername="localhost";
$username="root";
$password="";
$con=new mysqli($servername,$username,$password="");
if(mysqli_connect_error())
{
	die("database connection failed:".
	mysqli_connect_error());
}
		else
		{
			echo"connection Done"."<br>";
		}		
?>		
		