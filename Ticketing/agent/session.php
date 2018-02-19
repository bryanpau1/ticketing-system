<?php
	session_start();
	include('conn.php');

	$query=$conn->query("select * from users where id='".$_SESSION['users']."'");
	$row=$query->fetch_array();

	$user=$row['username'];
?>