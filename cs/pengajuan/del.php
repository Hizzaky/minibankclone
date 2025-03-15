<?php
include '../../fun.php';

if(isset($_POST["id"]))	
{
	$id=$_POST['id'];
	$sql="UPDATE mb_t_kelengkapan SET pengajuan_nasabah='0' WHERE id_nasabah='$id'";
 	if(db()->query($sql))
 	{
 		echo "	<div class='alert alert-success' style='text-align:center;height:1px'>
					<strong>Pengajuan Nasabah BERHASIL Ditolak!</strong>
				</div> ";
 	}else{
 		echo "	<div class='alert alert-danger' style='text-align:center;height:1px'>
					<strong>Pengajuan Nasabah GAGAL Ditolak!</strong>
				</div> ";
 	}
}
?>