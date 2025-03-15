<?php include '../../fun.php';
	$id=$_SESSION['id'];
	$field=arKey($_POST);
	$x=slct2("mb_t_kelengkapan", "WHERE id_nasabah=".$id);
	// echo $file="file/".$id.$_SESSION['username']."/".$x[$field];
	$sql="UPDATE mb_t_kelengkapan SET $field=NULL WHERE id_nasabah='$id'";
	if (db()->query($sql)) {
		unlink("file/".$id.$_SESSION['username']."/".$x[$field]);
		header("location:../pengajuan");
	}else{
		header("location:../pengajuan");
	}
 ?>