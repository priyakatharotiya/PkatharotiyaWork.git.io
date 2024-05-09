<?php

$con= new mysqli("localhost","root","","employee");

$sqltable = "Create Table teacher(

id INT(6) Unsigned auto_increment primary key,

name varchar(30) not null,

salary int(6) not null)";

if ($con->query($sqltable)===true)

{

echo "table teacher created suceesfully";

}

else

{

echo "error:".$sqltable. "<br>".$con->error;

}

?>