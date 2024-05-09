<?php
$con= new mysqli("localhost","root","","employee");
$sqlselect="SELECT id,name,salary FROM teacher";
$result=$con->query($sqlselect);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo"teacher".$row["name"]."having".
		$row["salary"]."salary."."<br>";
	}
}	else
{
	echo"0 results";
}
?>