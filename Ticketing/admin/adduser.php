<?php
	include('conn.php');
	if(isset($_POST['susername'])){
		$product_name=$_POST['susername'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['susername'];
		$password=$_POST['spassword'];

		$conn->query("insert into users (name, email,username, password, level) values ('$name','$email','$username', '$mpassword','agent')");
	}

?>