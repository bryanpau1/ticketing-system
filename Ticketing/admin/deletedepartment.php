<?php
	include('conn.php');
	if(isset($_POST['department_id'])){
		$department_id=$_POST['department_id'];

		$conn->query("delete from department where department_id='$department_id'");
	}
?>

