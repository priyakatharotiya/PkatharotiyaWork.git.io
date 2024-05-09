<?php
class Student
{
	public $name;
	function set_name($name)
	{
		$this->name=$name;
	}
	function get_name()
	{
		return $this->name;
	}
}

$rollno=new Student();	
$name=new student();
$semester=new student();
$division=new student();
$rollno->set_name ('Rollno');
$name->set_name ('Name');
$semester->set_name ('Semester');
$division->set_name ('Division');
echo $rollno->get_name();
echo "<br>";
echo $name->get_name();
echo "<br>";
echo $semester->get_name();
echo "<br>";
echo $division->get_name();
echo "<br>";
?>