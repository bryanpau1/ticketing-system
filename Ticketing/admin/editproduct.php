<?php
	include('conn.php');
	if(isset($_POST['eproduct_name'])){
		$product_name=$_POST['eproduct_name'];
		$product_id=$_POST['product_id'];

		$conn->query("update product set product_name='$product_name' where product_id='$product_id'");
	}
?>