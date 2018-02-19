<?php
	include('conn.php');
	if(isset($_POST['ename'])){
		$name=$_POST['ename'];
		$email=$_POST['eemail'];
		$id=$_POST['id'];

		$conn->query("update users set name='$name', email='$email' where id='$id'");
	}
?>