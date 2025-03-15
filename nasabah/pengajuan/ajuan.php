<?php include '../../fun.php'; 
	$id=$_SESSION['id'];
	$sql="UPDATE mb_t_kelengkapan SET pengajuan_nasabah='1' WHERE id_nasabah='$id'";
	if (db()->query($sql)){
		header("location:../pengajuan/?p=success");
	}else{
		header("location:../pengajuan/?p=fail");
	}
 ?>