<?php session_start();
	$_SESSION['nid']=$_GET['nid'];
	echo "<script>location.replace('../kelengkapan')</script>";
 ?>