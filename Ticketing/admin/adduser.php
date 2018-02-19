<!-- Insert Database with validation username or email exist -->

<?php
	include('conn.php');
	if(isset($_POST['susername'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['susername'];
		$password=$_POST['spassword'];

		$query=$conn->query("select * from users where username ='$username'");
		$email_check=$conn->query("select * from users where email ='$email'");

		// check data table if username and email exist
		if ($query->num_rows>0){
			?>
  				<span>Username already exist.</span>
  			<?php 
		} 

		elseif ($email_check ->num_rows>0) {
			?>
  				<span>Email already exist.</span>
  			<?php
		}

		// validation username and password

		elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$username)){
			?>
  				<span style="font-size:11px;">Invalid username. Space & Special Characters not allowed.</span>
  			<?php 
		}
		elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$password)){
			?>
  				<span style="font-size:11px;">Invalid password. Space & Special Characters not allowed.</span>
  			<?php 
		}elseif (!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9_-]+\.[a-zA-Z0-9_-]/", $email)){
			?>
  				<span style="font-size:11px;">Invalid email.</span>
  			<?php 
  		}

		// Insert Database from table
		else{
			$mpassword=md5($password);
			$conn->query("insert into users (name, email,username, password, level) values ('$name','$email','$username', '$mpassword','agent')");
			
			?>
  				<span>Sign up Successful.</span>
  			<?php 
		}
	}
?>

<!-- Insert Database with validation username or email exist -->
