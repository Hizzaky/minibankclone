<?php
include '../../fun.php';
if(isset($_POST["id"]))	
{
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$sql="UPDATE mb_t_kelengkapan SET pengajuan_admin='1' WHERE id_nasabah='$id'";
	if (db()->query($sql)) {
		echo "	<div class='alert alert-success' style='text-align:center;height:1px'>
					Pengajuan Pinjaman Nasabah Dengan Nama <strong> $nama</strong> BERHASIL Disetujui.
				</div> ";
	}else{
		echo "	<div class='alert alert-danger' style='text-align:center;height:1px'>
					Pengajuan Pinjaman Nasabah Dengan Nama  <strong>$nama</strong> GAGAL Disetujui!
				</div> ";
	}
}
?>