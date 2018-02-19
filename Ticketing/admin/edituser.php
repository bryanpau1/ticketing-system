<?php
	include('conn.php');
	if(isset($_POST['ename'])){
		$name=$_POST['ename'];
		$email=$_POST['eemail'];
		$username=$_POST['eusername'];
		$id=$_POST['id'];

		$conn->query("update users set name='$name', email='$email', username= '$username', password='$password'  where id='$id'");
	}
?>