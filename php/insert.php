<?php
	$data = json_decode(file_get_contents("php://input"));
	$empno = mysql_real_escape_string($data->empNo); 
	$fname = mysql_real_escape_string($data->fName); 
	$lname = mysql_real_escape_string($data->lName); 
	$dept = mysql_real_escape_string($data->dept); 
	mysql_connect("localhost", "root", "");
	mysql_select_db("company");
	mysql_query("INSERT INTO employee('emp_no', 'first_name', 'last_name', 'dept_name') VALUES('".$empno."','".$fname."','".$lname."','".$dept."')");

?>