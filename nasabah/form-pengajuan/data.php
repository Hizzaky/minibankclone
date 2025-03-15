<?php include '../../fun.php';
	$id=$_SESSION['id'];
	$data=dqr("SELECT * FROM mb_t_nasabah WHERE id='$id'");
 ?> 