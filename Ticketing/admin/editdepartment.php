<?php
	include('conn.php');
	if(isset($_POST['edepartment_name'])){
		$department_name=$_POST['edepartment_name'];
		$department_id=$_POST['department_id'];

		$conn->query("update department set department_name='$department_name' where department_id='$department_id'");
	}
?>