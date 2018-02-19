<?php
	include('conn.php');
	if(isset($_POST['department_name'])){
		$department_name=$_POST['department_name'];

		$conn->query("insert into department (department_name) values ('$department_name')");
	}

?>