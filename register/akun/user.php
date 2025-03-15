<?php session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	if ($password != $repassword) {
		echo "	<div class='alert alert-danger' style='text-align:center'>
					<strong>Password Tidak Sesuai!</strong>
				</div> ";
	}
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	header("location:../register.php");
 ?>