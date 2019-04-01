<?php 
	include('connection.php');
	session_start();
	if(isset($_POST['confirm'])){
		$pass1 = mysqli_real_escape_string($db, md5($_POST['password1']));
		$pass2 = mysqli_real_escape_string($db, md5($_POST['password2']));
		$pass3 = mysqli_real_escape_string($db, md5($_POST['password3']));
		$user = $_SESSION['username'];
		$select = "SELECT username FROM signin WHERE username='$user' AND password='$pass1'";
		$result = mysqli_query($db, $select);
		
		if(mysqli_num_rows($result) == 1){
			if ($pass2==$pass3){
				$sql= "Update users set password = '$pass3' WHERE username='$user'";
				mysqli_query($db, $sql);
				echo "<script> alert('Password Successfully Updated!'); window.location.href='login.php';</script>";
			}else{
			echo "<script> alert('Password did not match!'); window.location.href='update_password.php';</script>";
		}
		}else{
			echo "<script> alert('Your Password is Incorrect!'); window.location.href='update_password.php';</script>";
		}
	}