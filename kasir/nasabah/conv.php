<?php session_start();
	$id=$_GET['nid'];
	$_SESSION['nid']=$id;
	echo "<script>location.replace('../pencairan')</script>";
 ?>