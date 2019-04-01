<?php 
	include('connection.php');
	session_start();
	if(isset($_POST['login_user'])){
		$user = mysqli_real_escape_string($db, $_POST['username']);
		$pass = mysqli_real_escape_string($db, md5($_POST['password']));
		
		$select = "SELECT * FROM signin WHERE username='$user' AND password='$pass'";
		$result = mysqli_query($db, $select);
		
		if(mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_array($result);
			$_SESSION['username'] = $signin;
			header('location: index.php');
		}else{
			echo "<script> alert('Username or Password is Incorrect!'); window.location.href='new1.php';</script>";
		}
	}