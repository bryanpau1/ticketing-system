<?php
	include('conn.php');
		session_start();
if (isset($_POST['username'])) {
		$username=$_POST['username'];
		$password=md5($_POST['password']);

		$query=$conn->query("select * from users where username='$username' and password='$password'");
		$row = $query->fetch_assoc();

		$name = $row['name'];
		$username = $row['username'];
		$level  = $row['level'];

		if($username==$username && $password=$password){
			if($level=="admin"){
			$_SESSION['users']=$row['id']; 
            $_SESSION['level']=$row['level'];
            $_SESSION['name']=$row['name'];
		}elseif ($level=="agent") {
			$_SESSION['users']=$row['id']; 
            $_SESSION['level']=$row['level'];
            $_SESSION['name']=$row['name'];
		}elseif ($level=="user") {
			$_SESSION['users']=$row['id']; 
            $_SESSION['level']=$row['level'];
            $_SESSION['name']=$row['name'];
		}
		else{
            ?>
                <span>Login Failed. User not Found.</span>
            <?php 
            }
        }
    }
?>
