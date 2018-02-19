<?php
	include('conn.php');
	if(isset($_POST['product_id'])){
		$product_id=$_POST['product_id'];

		$conn->query("delete from department where product_id='$product_id'");
	}
?>

