<?php
	include('conn.php');
	if(isset($_POST['product_name'])){
		$product_name=$_POST['product_name'];

		$conn->query("insert into product (product_name) values ('$product_name')");
	}

?>