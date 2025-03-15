<?php include '../fun.php';
	$id=$_SESSION['id'];
	$sql="SELECT nama_nasabah FROM mb_t_nasabah WHERE id='$id'";
	$nama_nasabah=db()->query($sql)->fetch_assoc();
	echo "WELCOME ".$nama=$nama_nasabah['nama_nasabah'];
 ?>