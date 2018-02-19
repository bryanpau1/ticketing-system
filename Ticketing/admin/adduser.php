<?php 
	include('conn.php');
	
	if (isset($_POST['username_check'])) {
		$username = $_POST['username'];

		$sql = "SELECT * FROM users WHERE username='$username'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}

	if (isset($_POST['email_check'])) {
		$email = $_POST['email'];

		$sql = "SELECT * FROM users WHERE email='$email'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}

	if (isset($_POST['susername'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['susername'];
		$password=$_POST['spassword'];

		$sql = "SELECT * FROM users WHERE username='$username'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "exists";	
			exit();
		}else{
			$query = "INSERT INTO users (name, email,username, password, level) 
					VALUES ('$name',' '$username', '$email', ',".md5($password)."','agent')";
			$results = mysqli_query($db, $query);
			echo 'Saved!';
			exit();
		}
	}

?>
