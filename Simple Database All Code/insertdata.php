<?php
$con= new mysqli("localhost","root","","employee");
$sqlinsert="INSERT INTO  teacher(id,name,salary)
VALUES ('4','priya','50000')";
//VALUES ('3','shruti','100000');//
if($con->query($sqlinsert)==TRUE)
{
		echo"new record created successfully";
}
else
{
	echo "Error:".$sql."<br>".$con->error;
}
?>